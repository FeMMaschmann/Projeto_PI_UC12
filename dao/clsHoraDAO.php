<?php

class HoraDAO{
  public static function getHoras(){
    $sql = " SELECT id, DATE_FORMAT(hora,'%H:%i') FROM hora ORDER BY id";
    $result = Conexao::consultar($sql);
    $lista = new ArrayObject();
    while (list($id, $horario) = mysqli_fetch_row($result)) {
      $hora = new Hora();
      $hora->setId($id);
      $hora->setHorario($horario);

      $lista->append($hora);
    }
    return $lista;
  }

  public static function getHoraById($id){
    $sql = " SELECT * FROM hora WHERE id = $id";
    $result = Conexao::consultar($sql);

    list($id, $hora) = mysqli_fetch_row($result);
      $hora = new Hora();
      $hora->setId($id);
      $hora->setHorario($hora);

    return $hora;
  }
}

?>
