<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

#[Entity]
class Student
{
    #[Id]
    #[GeneratedValue]
    #[Column]
    public readonly int $id;

    public function __construct(
        #[Column]
        public readonly string $name
    ) {
    }
}
