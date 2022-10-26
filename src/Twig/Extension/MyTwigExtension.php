<?php

namespace App\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use App\Service\Util;



class MyTwigExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('fizzbuzz', [$this, 'showFizzBuzz']),
        ];
    }

    public function showFizzBuzz($from, $to):string
    {
        return (new Util())->showFizzBuzz($from, $to);
    }
}
