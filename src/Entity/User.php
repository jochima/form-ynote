<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
   #[ORM\Id]
   #[ORM\GeneratedValue]
   #[ORM\Column(type: "integer")]
   private ?int $id = null;

   #[ORM\Column(type: "string", length: 100)]
   #[Assert\NotBlank(message: "Le nom complet est requis.")]
   private ?string $fullname = null;

   #[ORM\Column(type: "string", length: 150)]
   #[Assert\NotBlank(message: "L'email est requis.")]
   #[Assert\Email(message: "Adresse email invalide.")]
   private ?string $email = null;

   #[ORM\Column(type: "string", length: 20, nullable: true)]
   #[Assert\Regex(
        pattern: "/^\+?[0-9\s\-]{7,20}$/",
        message: "Numéro de téléphone invalide."
   )]
   private ?string $phone = null;

   #[ORM\Column(type: "date", nullable: true)]
   #[Assert\LessThan("today", message: "La date de naissance doit être dans le passé.")]
   private ?\DateTimeInterface $birth = null;

   #[ORM\Column(type: "string", length: 255, nullable: true)]
   private ?string $address = null;

   // Getters and Setters

   public function getId(): ?int
   {
      return $this->id;
   }

   public function getFullname(): ?string
   {
      return $this->fullname;
   }

   public function setFullname(string $fullname): self
   {
      $this->fullname = $fullname;
      return $this;
   }

   public function getEmail(): ?string
   {
      return $this->email;
   }

   public function setEmail(string $email): self
   {
      $this->email = $email;
      return $this;
   }

   public function getPhone(): ?string
   {
      return $this->phone;
   }

   public function setPhone(?string $phone): self
   {
      $this->phone = $phone;
      return $this;
   }

   public function getBirth(): ?\DateTimeInterface
   {
      return $this->birth;
   }

   public function setBirth(?\DateTimeInterface $birth): self
   {
      $this->birth = $birth;
      return $this;
   }

   public function getAddress(): ?string
   {
      return $this->address;
   }

   public function setAddress(?string $address): self
   {
      $this->address = $address;
      return $this;
   }
}
