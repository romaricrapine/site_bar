<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'tagCatego', targetEntity: SubCatego::class)]
    private Collection $SubCategos;

    public function __construct()
    {
        $this->SubCategos = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->name;
    }

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

    /**
     * @return Collection<int, SubCatego>
     */
    public function getSubCategos(): Collection
    {
        return $this->SubCategos;
    }

    public function addSubCatego(SubCatego $subCatego): self
    {
        if (!$this->SubCategos->contains($subCatego)) {
            $this->SubCategos->add($subCatego);
            $subCatego->setTagCatego($this);
        }

        return $this;
    }

    public function removeSubCatego(SubCatego $subCatego): self
    {
        if ($this->SubCategos->removeElement($subCatego)) {
            // set the owning side to null (unless already changed)
            if ($subCatego->getTagCatego() === $this) {
                $subCatego->setTagCatego(null);
            }
        }

        return $this;
    }
}
