<?php
  /**
   *
   */
  class Consulta {
    private $id, $horario, $cliente, $mensagem;

    function __construct($id = NULL, $horario = NULL, $cliente = NULL, $mensagem = NULL) {
        $this->id = $id;
        $this->horario = $horario;
        $this->cliente = $cliente;
        $this->mensagem = $mensagem;
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
    function getMensagem() {
        return $this->mensagem;
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
    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }


  }

?>
