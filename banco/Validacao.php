<?php


class Validacao
{
    public static function protegeAtributo($atributo){
        if ($atributo == "titular" || $atributo == "saldo"){
            throw new Exception("O atribuido $atributo continua privado!");
        }
    }
    public static function verificaNumerico($valor){
        if(!is_numeric($valor)){
            throw new Exception("O tipo definido não é um número válido!");
        }
    }
}