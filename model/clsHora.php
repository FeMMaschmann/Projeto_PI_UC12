<?php
  /**
   *
   */
  class Hora{
    private $id, $horario;

    function __construct($id = NULL, $horario = NULL) {
        $this->id = $id;
        $this->horario = $horario;
    }

    function getId() {
        return $this->id;
    }

    function getHorario() {
        return $this->horario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

  }

?>
