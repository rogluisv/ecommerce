<?php

    $path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce';
    include_once($path."/conexao.php");

    class Pedidos {

        // O ID não precisa de SETTERS porque o método que salva no banco já seta o mesmo
            private $ID_Pedido;
            public function getID_Pedido() { return $this->ID_Pedido; }

            private $VALOR_PEDIDO;
            public function getVALOR_PEDIDO() { return $this->VALOR_PEDIDO; }
            public function setVALOR_PEDIDO($valor_pedido) { $this->VALOR_PEDIDO = $valor_pedido; return $this; }

            private $ESTATUS;
            public function getESTATUS() { return $this->ESTATUS; }
            public function setESTATUS($estatus) { $this->ESTATUS = $estatus; return $this; }

            public function __construct($VALOR_PEDIDO, $ESTATUS){

            }
    }