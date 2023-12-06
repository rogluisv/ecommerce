<?php

    $path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce';
    include_once($path."/conexao.php");

    class Produtos {

        // O ID não precisa de SETTERS porque o método que salva no banco já seta o mesmo
            private $ID_Prod;
            public function getID_Prod() { return $this->ID_Prod; }

            private $DESCRICAO;
            public function getDESCRICAO() { return $this->DESCRICAO; }
            public function setDESCRICAO($descricao) { $this->DESCRICAO = $descricao; return $this; }

            private $VALOR_PROD;
            public function getVALOR_PROD() { return $this->VALOR_PROD; }
            public function setVALOR_PROD($valor_prod) { $this->VALOR_PROD = $valor_prod; return $this; }

            private $CATEGORIA;
            public function getCATEGORIA() { return $this->CATEGORIA; }
            public function setCATEGORIA($categoria) { $this->CATEGORIA = $categoria; return $this; }

            private $QUANTIDADE;
            public function getQUANTIDADE() { return $this->QUANTIDADE; }
            public function setQUANTIDADE($quantidade) { $this->QUANTIDADE = $quantidade; return $this; }

            public function __construct($DESCRICAO, $$VALOR_PROD, $CATEGORIA, $QUANTIDADE){

            }
    }
