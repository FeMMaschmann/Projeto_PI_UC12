<?php

class HoraDAO{
  public static function getHoras(){
    $sql = " SELECT * FROM hora ORDER BY id";
    $result = Conexao::consultar($sql);
    $lista = new ArrayObject();
    while (list($id, $hora) = mysqli_fetch_row($result)) {
      $hora = new Hora();
      $hora->setId($id);
      $hora->setHorario($hora);

      $lista->append($hora);
    }
    return $lista;
  }

  public static function getHoras(){
    $sql = " SELECT * FROM hora ORDER BY id";
    $result = Conexao::consultar($sql);
    $lista = new ArrayObject();
    while (list($id, $hora) = mysqli_fetch_row($result)) {
      $hora = new Hora();
      $hora->setId($id);
      $hora->setHorario($hora);

      $lista->append($hora);
    }
    return $lista;
  }

  public static function getHoraById($id){
    $sql = " SELECT * FROM hora WHERE id = $id";
    $result = Conexao::consultar($sql);

    list($id, $hora) = mysqli_fetch_row($result)
      $hora = new Hora();
      $hora->setId($id);
      $hora->setHorario($hora);

    return $hora;
  }
}

?>
