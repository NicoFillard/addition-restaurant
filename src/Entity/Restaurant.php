<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RestaurantRepository")
 */
class Restaurant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $sandwich;

    /**
     * @ORM\Column(type="float")
     */
    private $drink;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSandwich(): ?float
    {
        return $this->sandwich;
    }

    public function setSandwich(float $sandwich): self
    {
        $this->sandwich = $sandwich;

        return $this;
    }

    public function getDrink(): ?float
    {
        return $this->drink;
    }

    public function setDrink(float $drink): self
    {
        $this->drink = $drink;

        return $this;
    }
}
