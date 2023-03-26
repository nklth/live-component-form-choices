<?php

namespace App\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

class TestModel
{

    #[Assert\NotBlank]
    #[Assert\Length(max: 100)]
    private ?string $name = null;

    private array $choices = [];

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getChoices(): array
    {
        return $this->choices;
    }

    public function setChoices(array $choices): self
    {
        $this->choices = $choices;
        return $this;
    }


}
