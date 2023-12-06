<?php

    $path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce';
    include_once($path."/conexao.php");

    class Carrinho {

        // O ID não precisa de SETTERS porque o método que salva no banco já seta o mesmo
            private $ID_Cart;
            public function getID_Cart() { return $this->ID_Cart; }

            private $QUANTIDADE;
            public function getQUANTIDADE() { return $this->QUANTIDADE; }
            public function setQUANTIDADE($quantidade) { $this->QUANTIDADE = $quantidade; return $this; }

            public function __construct($DESCRICAO, $$VALOR_PROD, $CATEGORIA, $QUANTIDADE){

            }
    }