<?php

   namespace App\DTO;

   use Symfony\Component\Validator\Constraints as Assert;

   class YnoteFormData
   {
      #[Assert\NotBlank(message: "Le nom complet est obligatoire.")]
      #[Assert\Length(min: 3, max: 50)]
      public ?string $fullname = null;

      #[Assert\NotBlank(message: "L'email est obligatoire.")]
      #[Assert\Email(message: "Email non valide.")]
      public ?string $email = null;

      #[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire.")]
      #[Assert\Regex(
           pattern: '/^(6\d{8}|2376\d{8})$/',
           message: "Numéro de téléphone invalide."
      )]
      public ?string $phone = null;

      #[Assert\NotBlank(message: "La date de naissance non valide.")]
      #[Assert\LessThan("today", message: "La date doit être dans le passé.")]
      public ?string $birth = null;

      #[Assert\NotBlank(message: "Adresse non valide")]
      public ?string $address = null;
   }