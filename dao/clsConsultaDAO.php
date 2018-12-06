<?php

class ConsultaDAO {
  public static function inserir($consulta){
    $sql = "INSERT INTO consultas (horario, codCliente, mensagem ) VALUES "
    . " ( '".$consulta->getHorario()."' , "
    . "    ".$consulta->getCliente()->getId()." , "
    . "   '".$consulta->getMensagem()."' "
    . "  ); ";

    Conexao::executar( $sql );
  }

  public static function editar( $consulta ){
    $sql = "UPDATE consultas SET "
    . " horario =  ".$consulta->getHorario()." , "
    . " codCategoria =    ".$consulta->getcliente()->getId()." , "
    . " mensagem = '".$consulta->getMensagem()."' "
    . " WHERE id = ".$consulta->getId();

    Conexao::executar( $sql );
  }

  public static function excluir($consulta){
      $sql = "DELETE FROM consultas "
           . " WHERE id =  ".$consulta->getId();

      Conexao::executar( $sql );
  }

  public static function getConsultas(){
      $sql = " SELECT p.id, p.horario, p.mensagem, c.id, c.nome "
           . " FROM consultas p "
           . " INNER JOIN clientes c "
           . " ON p.codCliente = c.id "
           . " ORDER BY p.nome ";

      $result = Conexao::consultar($sql);
      $lista = new ArrayObject();
      while( list( $cod, $hora, $mensagem, $codCli, $nomeCli) = mysqli_fetch_row($result) ){
          $cliente = new Clietne();
          $cliente->setId( $codCli );
          $cliente->setNome( $nomeCli );

          $consulta = new Consulta();
          $Consulta->setId($cod);
          $consulta->setHorario($hora);
          $consulta->setMensagem($mensagem);


          $lista->append($consulta);
      }

      return $lista;
  }

  public static function getConsultasById($id){
      $sql = " SELECT p.id, p.horario, p.mensagem, c.id, c.nome "
           . " FROM consultas p "
           . " INNER JOIN clientes c "
           . " ON p.codCliente = c.id "
           . " WHERE p.id = ".$id;

      $result = Conexao::consultar($sql);

      list( $cod, $hora, $mensagem, $codCli, $nomeCli) = mysqli_fetch_row($result);
          $cliente = new Cliente();
          $cliente->setId( $codCli );
          $cliente->setNome( $nomeCli );

          $consulta = new Consulta();
          $consulta->setId($cod);
          $consulta->setHorario($hora);
          $consulta->setMensagem($mensagem);
      }

      return $consulta;
  }


}


 ?>
