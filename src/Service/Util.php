<?php
namespace App\Service;

class Util
{
    public static function showFizzBuzz($from, $to):string
    {
        $returnValue = '';
        $fizzBuzzNumber = '';
        for ($i = $from; $i <= $to; $i++) {
            $fizzBuzzNumber = '';
            if($i%5 == 0){
                $fizzBuzzNumber .= 'Buzz';
            }
            if($i%3 == 0){
                $fizzBuzzNumber .= 'Fizz';
            }
            $returnValue .= ($fizzBuzzNumber==''?$i:'').$fizzBuzzNumber.($i == $to?'':',');
        } 
        return ($returnValue);
    }
}
?>