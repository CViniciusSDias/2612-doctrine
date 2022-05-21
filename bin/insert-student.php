<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student('Aluno com telefones');
$student->addPhone(new Phone('(21) 99999 - 9999'));
$student->addPhone(new Phone('(21) 2222 - 2222'));

$entityManager->persist($student);
$entityManager->flush();
