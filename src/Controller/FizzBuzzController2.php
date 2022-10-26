<?php

namespace App\Controller;

use App\Entity\FizzBuzz;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Util;

class FizzBuzzController2 extends AbstractController
{
    #[Route('/desafio2/fizz/buzz', name: 'app_fizz_buzz_controller2')]
    public function index(Request $request): Response
    {
        // creates a task object and initializes some data for this example
        $fizzBuzz = new FizzBuzz();        
        //$fizzBuzz->setNumeroInicial(1);
        //$fizzBuzz->setNumeroFinal(30);
        $fizzBuzz->setFechaRegistro(new \DateTime());

        $form = $this->createFormBuilder($fizzBuzz)
            ->add('numeroInicial', NumberType::class)
            ->add('numeroFinal', NumberType::class)
            ->add('fechaRegistro', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'Generar FizzBuzz'])
            ->getForm();

        $form->handleRequest($request);
            
        if ($form->isSubmitted() && $form->isValid()) {
            $fizzBuzz = $form->getData();
            $fizzBuzz->setFizzBuzzString((new Util())->showFizzBuzz(
                $fizzBuzz->getNumeroInicial(), 
                $fizzBuzz->getNumeroFinal()));
        } else{
            $fizzBuzz->setFizzBuzzString('');
        }
        return $this->renderForm('fizz_buzz_controller2/index.html.twig', [
            'excercise_name' => 'Fizz Buzz 2 (Service/Form Controller)',
            'form' => $form,
            'fizz_buzz_response'=>$fizzBuzz->getFizzBuzzString()
        ]);         
    }
}
