<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductsRepository::class)]
class Products
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    private ?SubCatego $tagSubCatego = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descriptions = null;

    #[ORM\Column(nullable: true)]
    private ?bool $first_options = null;

    #[ORM\Column(nullable: true)]
    private ?bool $second_options = null;

    #[ORM\Column(nullable: true)]
    private ?bool $third_options = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2, nullable: true)]
    private ?string $price_f_options = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2, nullable: true)]
    private ?string $price_s_options = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2, nullable: true)]
    private ?string $price_t_options = null;

    #[ORM\Column(nullable: true)]
    private ?int $percent_alcool = null;

    #[ORM\Column(nullable: true)]
    private ?bool $active = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name_f_options = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name_s_options = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name_t_options = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTagSubCatego(): ?SubCatego
    {
        return $this->tagSubCatego;
    }

    public function setTagSubCatego(?SubCatego $tagSubCatego): self
    {
        $this->tagSubCatego = $tagSubCatego;

        return $this;
    }

    public function getDescriptions(): ?string
    {
        return $this->descriptions;
    }

    public function setDescriptions(?string $descriptions): self
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    public function isFirstOptions(): ?bool
    {
        return $this->first_options;
    }

    public function setFirstOptions(?bool $first_options): self
    {
        $this->first_options = $first_options;

        return $this;
    }

    public function isSecondOptions(): ?bool
    {
        return $this->second_options;
    }

    public function setSecondOptions(?bool $second_options): self
    {
        $this->second_options = $second_options;

        return $this;
    }

    public function isThirdOptions(): ?bool
    {
        return $this->third_options;
    }

    public function setThirdOptions(?bool $third_options): self
    {
        $this->third_options = $third_options;

        return $this;
    }

    public function getPriceFOptions(): ?string
    {
        return $this->price_f_options;
    }

    public function setPriceFOptions(?string $price_f_options): self
    {
        $this->price_f_options = $price_f_options;

        return $this;
    }

    public function getPriceSOptions(): ?string
    {
        return $this->price_s_options;
    }

    public function setPriceSOptions(?string $price_s_options): self
    {
        $this->price_s_options = $price_s_options;

        return $this;
    }

    public function getPriceTOptions(): ?string
    {
        return $this->price_t_options;
    }

    public function setPriceTOptions(?string $price_t_options): self
    {
        $this->price_t_options = $price_t_options;

        return $this;
    }

    public function getPercentAlcool(): ?int
    {
        return $this->percent_alcool;
    }

    public function setPercentAlcool(?int $percent_alcool): self
    {
        $this->percent_alcool = $percent_alcool;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getNameFOptions(): ?string
    {
        return $this->name_f_options;
    }

    public function setNameFOptions(?string $name_f_options): self
    {
        $this->name_f_options = $name_f_options;

        return $this;
    }

    public function getNameSOptions(): ?string
    {
        return $this->name_s_options;
    }

    public function setNameSOptions(?string $name_s_options): self
    {
        $this->name_s_options = $name_s_options;

        return $this;
    }

    public function getNameTOptions(): ?string
    {
        return $this->name_t_options;
    }

    public function setNameTOptions(?string $name_t_options): self
    {
        $this->name_t_options = $name_t_options;

        return $this;
    }

}
