<?php

class ConsultaDAO {
  public static function inserir($consulta){
    $sql = "INSERT INTO consultas (dia, codCliente,codHora, mensagem) VALUES "
    . " ( '".$consulta->getDia()."' , "
    . "    ".$consulta->getCliente()->getId()." , "
    . "    ".$consulta->getHora()->getId()." , "
    . "   '".$consulta->getMensagem()."' "
    . "  ); ";

    Conexao::executar( $sql );
  }

  public static function editar( $consulta ){
    $sql = "UPDATE consultas SET "
    . " dia =  ".$consulta->getDia()." , "
    . " codCliente =    ".$consulta->getCliente()->getId()." , "
    . " codHora =    ".$consulta->getHora()->getId()." , "
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
      $sql = " SELECT p.id, p.dia, p.mensagem, c.id, c.nome,h.id, h.hora "
           . " FROM consultas p "
           . " INNER JOIN clientes c "
           . " ON p.codCliente = c.id "
           . " INNER JOIN hora h "
           . " ON p.codHora = h.id";

      $result = Conexao::consultar($sql);
      $lista = new ArrayObject();
      while( list( $cod, $dia, $mensagem, $codCli, $nomeCli, $horaId, $horaHora) = mysqli_fetch_row($result) ){
          $cliente = new Cliente();
          $cliente->setId( $codCli );
          $cliente->setNome( $nomeCli );

          $hora = new Hora();
          $hora->setId($horaId);
          $hora->setHorario($horaHora);

          $consulta = new Consulta();
          $consulta->setId($cod);
          $consulta->setCliente($cliente);
          $consulta->setHora($hora);
          $consulta->setDia($dia);
          $consulta->setMensagem($mensagem);




          $lista->append($consulta);
      }

      return $lista;
  }

  public static function getConsultasById($id){
      $sql = " SELECT p.id, p.dia, p.mensagem, c.id, c.nome "
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
          $consulta->setDia($hora);
          $consulta->setMensagem($mensagem);

          return $consulta;
      }

  }

 ?>
