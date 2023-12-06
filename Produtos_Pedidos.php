<?php

    $path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce';
    include_once($path."/conexao.php");

    class Produtos_Pedidos {

        // O ID não precisa de SETTERS porque o método que salva no banco já seta o mesmo
            private $ID_Prod_Ped;
            public function getID_Prod_Ped() { return $this->ID_Prod_Ped; }
            
            private $VALOR;
            public function getVALOR() { return $this->VALOR; }
            public function setVALOR($valor) { $this->VALOR = $valor; return $this; }

            public function __construct($VALOR){

            }
    }
