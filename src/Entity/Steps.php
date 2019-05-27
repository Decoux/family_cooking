<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StepsRepository")
 */
class Steps
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $content_step;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $picture_step;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\recipes", inversedBy="steps")
     * @ORM\JoinColumn(nullable=false)
     */
    private $recipe;

    public function getId(): ?int
    { 
        return $this->id;
    }

    public function getContentStep(): ?string
    {
        return $this->content_step;
    }

    public function setContentStep(string $content_step): self
    {
        $this->content_step = $content_step;

        return $this;
    }

    public function getPictureStep(): ?string
    {
        return $this->picture_step;
    }

    public function setPictureStep(?string $picture_step): self
    {
        $this->picture_step = $picture_step;

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
