<?php

   namespace App\Controller;

   use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
   use Symfony\Component\HttpFoundation\Response;
   use Symfony\Component\HttpFoundation\Request;
   use Symfony\Component\Security\Csrf\CsrfToken;
   use Symfony\Component\Validator\Validator\ValidatorInterface;
   use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
   use Symfony\Component\Routing\Attribute\Route;
   use App\DTO\YnoteFormData;
   use Symfony\Contracts\HttpClient\HttpClientInterface;

   final class UserController extends AbstractController
   {
      private HttpClientInterface $client;

      public function __construct(HttpClientInterface $client)
      {
         $this->client = $client;
      }

      #[Route('/' , name:'ynote_form')]
      public function index(Request $request , CsrfTokenManagerInterface $csrfTokenManager) : Response
      {
         $token = $csrfTokenManager->getToken('ynote_form')->getValue();//return dd($token);
         $oldDataForm = $request->getSession()->getFlashBag()->get('oldFields' , []);
         $oldFields = $oldDataForm[0] ?? []; //return dd($oldFields['address']);

         try{
            $response = $this->client->request('GET' , 'https://photon.komoot.io/api/?q=yaounde&limit=10');
            $address = $response->toArray();

            return $this->render('form/ynote.html.twig' , [
                 'controller_name' => 'UserController' ,
                 'csrf_token' => $token ,
                 'adresses' => $address ,
                 'oldFields' => $oldFields ,
            ]);
         }catch(\Throwable $exception){
            return new Response('Error: '.$exception->getMessage() , Response::HTTP_BAD_REQUEST);
         }


      }

      #[Route('/submit' , name:'ynote_save' , methods:['POST'])]
      public function save(Request $request , ValidatorInterface $validator , CsrfTokenManagerInterface $csrfTokenManager) : Response
      {
         $submittedToken = $request->request->get('_token');
         if(!$csrfTokenManager->isTokenValid(new CsrfToken('ynote_form' , $submittedToken))){
            $this->addFlash('error' , 'Jeton CSRF invalide.');
            return $this->redirectToRoute('ynote_form' , $request->request->all());
         }

         $data = new YnoteFormData();
         $data->fullname = $request->request->get('fullname');
         $data->email = $request->request->get('email');
         $data->phone = $request->request->get('phone');
         $data->birth = $request->request->get('birth');
         $data->address = $request->request->get('address'); //dd($request->request->all());

         $errors = $validator->validate($data); //dd($errors);

         $errorMessages = [];
         if(count($errors) > 0){
            foreach($errors as $error){
               $errorMessages[] = $error->getPropertyPath().": ".$error->getMessage();
            }
         }

         if($errorMessages){
            foreach($errorMessages as $message){
               $this->addFlash('error' , $message);
            }
            $this->addFlash('oldFields' , $request->request->all());
            return $this->redirectToRoute('ynote_form');
         }else{
            $jsonPath = $this->getParameter('kernel.project_dir').'/var/data.json';
            $jsonData = [];

            if(file_exists($jsonPath)){
               $existing = file_get_contents($jsonPath);
               $jsonData = json_decode($existing , true) ?? [];
            }

            $jsonData[] = $data; //return dd((array) $data);

            $data = (array) $data;
            file_put_contents($jsonPath , json_encode($jsonData , JSON_PRETTY_PRINT));
            $this->addFlash('success' , $data);
            return $this->redirectToRoute('ynote_form' , $request->request->all());
         }

      }
   }
