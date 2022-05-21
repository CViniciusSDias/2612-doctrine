<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
    echo "ID: $student->id\nNome: $student->name\n";
    echo "Telefones:\n";

    foreach ($student->phones() as $phone) {
        echo $phone->number . PHP_EOL;
    }

    echo PHP_EOL;
}

echo $studentRepository->count([]) . PHP_EOL;
