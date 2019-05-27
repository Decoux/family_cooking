<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IngredientsRepository")
 */
class Ingredients
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $quantity;

    /**
     * @ORM\Column(type="text")
     */
    private $content_ingredient;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\recipes", inversedBy="ingredients")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    public function setQuantity(string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getContentIngredient(): ?string
    {
        return $this->content_ingredient;
    }

    public function setContentIngredient(string $content_ingredient): self
    {
        $this->content_ingredient = $content_ingredient;

        return $this;
    }

    public function getRecipe(): ?recipes
    {
        return $this->recipe;
    }

    public function setRecipe(?recipes $recipe): self
    {
        $this->recipe = $recipe;

        return $this;
    }
}
