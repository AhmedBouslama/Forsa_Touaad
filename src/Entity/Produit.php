<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Brand = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Etat = null;

    #[ORM\Column(length: 255)]
    private ?string $Attribute = null;

    #[ORM\Column(length: 255)]
    private ?string $Value = null;

    #[ORM\ManyToOne(inversedBy: 'Category')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $Category = null;

    #[ORM\Column]
    private ?float $Prix_Debut_enchere = null;

    #[ORM\Column(nullable: true)]
    private ?float $prix_BuyOut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->Brand;
    }

    public function setBrand(string $Brand): self
    {
        $this->Brand = $Brand;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->Etat;
    }

    public function setEtat(string $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }

    public function getAttribute(): ?string
    {
        return $this->Attribute;
    }

    public function setAttribute(string $Attribute): self
    {
        $this->Attribute = $Attribute;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->Value;
    }

    public function setValue(string $Value): self
    {
        $this->Value = $Value;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->Category;
    }

    public function setCategory(?Category $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getPrixDebutEnchere(): ?float
    {
        return $this->Prix_Debut_enchere;
    }

    public function setPrixDebutEnchere(float $Prix_Debut_enchere): self
    {
        $this->Prix_Debut_enchere = $Prix_Debut_enchere;

        return $this;
    }

    public function getPrixBuyOut(): ?float
    {
        return $this->prix_BuyOut;
    }

    public function setPrixBuyOut(?float $prix_BuyOut): self
    {
        $this->prix_BuyOut = $prix_BuyOut;

        return $this;
    }
}
