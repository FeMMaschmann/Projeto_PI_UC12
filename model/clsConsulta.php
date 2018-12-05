<?php
  /**
   *
   */
  class Consulta {
    private $id, $horario, $cliente;

    function __construct($id = NULL, $horario = NULL, $cliente = NULL) {
        $this->id = $id;
        $this->horario = $horario;
        $this->cliente = $cliente;
    }
    
    function getId() {
        return $this->id;
    }

    function getHorario() {
        return $this->horario;
    }

    function getCliente() {
        return $this->cliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }
  }

?>
