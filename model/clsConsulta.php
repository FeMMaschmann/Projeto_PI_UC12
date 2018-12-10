<?php
  /**
   *
   */
  class Consulta {
    private $id, $dia, $cliente, $mensagem, $horario;

    function __construct($id = NULL, $dia = NULL, $cliente = NULL, $mensagem = NULL, $horario = NULL) {
        $this->id = $id;
        $this->dia = $dia;
        $this->cliente = $cliente;
        $this->mensagem = $mensagem;
        $this->horario = $horario;
    }

    function getId() {
        return $this->id;
    }

    function getDia() {
        return $this->dia;
    }

    function getCliente() {
        return $this->cliente;
    }
    function getMensagem() {
        return $this->mensagem;
    }
    function getHorario() {
        return $this->horario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDia($dia) {
        $this->dia = $dia;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }
    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }
    function setHorario($horario) {
        $this->horario = $horario;
    }


  }

?>
