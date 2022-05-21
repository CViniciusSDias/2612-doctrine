<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$phone1 = new Phone('(21) 99999 - 9999');
$phone2 = new Phone('(21) 2222 - 2222');
$entityManager->persist($phone1);
$entityManager->persist($phone2);

$student = new Student('Aluno com telefones');
$student->addPhone($phone1);
$student->addPhone($phone2);

$entityManager->persist($student);
$entityManager->flush();
