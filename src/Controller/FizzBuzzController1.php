<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FizzBuzzController1 extends AbstractController
{
    #[Route('/desafio1/fizz/buzz', name: 'fizz_buzz_1')]
    public function index(): Response
    {
        return $this->render('fizz_buzz_controller1/index.html.twig', [
            'excercise_name' => 'Fizz Buzz 1 (Twig Extension Controller)',
        ]);
    }
}
