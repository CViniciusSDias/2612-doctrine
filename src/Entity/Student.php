<?php

namespace Alura\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;

#[Entity]
class Student
{
    #[Id, GeneratedValue, Column]
    public int $id;

    #[OneToMany(
        mappedBy: "student",
        targetEntity: Phone::class,
        cascade: ["persist", "remove"]
    )]
    private Collection $phones;

    public function __construct(
        #[Column]
        public readonly string $name
    ) {
        $this->phones = new ArrayCollection();
    }

    public function addPhone(Phone $phone)
    {
        $this->phones->add($phone);
        $phone->setStudent($this);
    }

    /**
     * @return Collection<Phone>
     */
    public function phones(): Collection
    {
        return $this->phones;
    }
}
