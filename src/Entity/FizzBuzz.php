<?php

namespace App\Entity;

use App\Repository\FizzBuzz2Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FizzBuzz2Repository::class)]
class FizzBuzz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numeroInicial = null;

    #[ORM\Column]
    private ?int $numeroFinal = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fechaRegistro = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $fizzBuzzString = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroInicial(): ?int
    {
        return $this->numeroInicial;
    }

    public function setNumeroInicial(int $numeroInicial): self
    {
        $this->numeroInicial = $numeroInicial;

        return $this;
    }

    public function getNumeroFinal(): ?int
    {
        return $this->numeroFinal;
    }

    public function setNumeroFinal(int $numeroFinal): self
    {
        $this->numeroFinal = $numeroFinal;

        return $this;
    }

    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro(?\DateTimeInterface $fechaRegistro): self
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    public function getFizzBuzzString(): ?string
    {
        return $this->fizzBuzzString;
    }

    public function setFizzBuzzString(?string $fizzBuzzString): self
    {
        $this->fizzBuzzString = $fizzBuzzString;

        return $this;
    }
}
