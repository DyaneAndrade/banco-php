<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

require_once "Validacao.php";
require_once "ContaCorrente.php";


$contaDyane = new ContaCorrente("Dyane", "1212", "3434-4", 2000.00);

$contaLivia = new ContaCorrente("Livia", "1313", "3535-5", 3000.00);

echo "<pre>";

echo $contaDyane->agencia = "1414" . "<br/>";


var_dump($contaDyane);

$contaDyane->sacar(05.0);
var_dump($contaDyane);

$contaDyane->depositar(10.0);
var_dump($contaDyane);


echo $contaDyane->getSaldo() . "<br/>";


var_dump($contaDyane);


$contaLivia->transferir(500, $contaDyane);
var_dump($contaDyane);

var_dump($contaLivia);

echo $contaDyane;

