<?php

$number=1; // integer

$float=1.2; // Float

$int_float=(int)$float; // Integer

$str_float=(string)$float; //String

$str_boolean=(bool)$float; // Boolean

var_dump($str_boolean);

function kali(int $satu,int $dua):int
{
    return $satu*$dua;
}

/**
 *  Operator
 *  subtract (-)
 *  addition (+)
 *  multiply (*)
 *  divide (/)
 *  modulus (%)
 *  increment (++)
 *  decrement (--)
 *  
 */

 echo 4/2; // 2
 echo PHP_EOL;
 echo 4%2; // 0

 $angka=1; //1
 $angka++; //2
 $angka--; //1
 $angka+=9; //10
 $angka/=5; //2
 $angka.="tujuh"; //2 dan "Tujuh" atau 2tujuh 


 echo PHP_EOL;
 echo $angka;

 $a=5;

 var_dump($a--);
