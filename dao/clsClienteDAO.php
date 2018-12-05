<?php

class ClienteDAO{

  public static function inserir($cliente){
    $sql = "INSERT INTO clientes
    (nome, sexo, email, cpf, admin, senha, telefone ) VALUES "
    . " ( '".$cliente->getNome()."' , "
    . "   '".$cliente->getSexo()."' , "
    . "   '".$cliente->getEmail()."' , "
    . "   '".$cliente->getCpf()."' , "
    . "   '".$cliente->getAdmin()."' , '"
    . "   '".$cliente->getSenha()."' , "
    . "   '".$cliente->getTelefone()"' "
    . "  ); ";

    Conexao::executar($sql);
  }

  public static function editar($cliente){
    $sql = "UPDATE clientes SET "
    . " nome =       '".$cliente->getNome()."' , "
    . " sexo =       '".$cliente->getSexo()."' , "
    . " email =      '".$cliente->getEmail()."' , "
    . " cpf =        '".$cliente->getCpf()."' , "
    . " admin =      '".$cliente->getAdmin()."' , '"
    . " senha =      '".$cliente->getSenha()."' , "
    . " telefone =   '".$cliente->getTelefone()"' "
    . " WHERE id =   ".$cliente->getId();

    Conexao::executar($sql);
  }

  public static function excluir($cliente){
      $sql = "DELETE FROM clientes "
           . " WHERE id =  ".$cliente->getId();

      Conexao::executar( $sql );
  }

  public static function getClientes(){
    $sql = "SELECT * FROM clientes ORDER BY nome";

    $result = Conexao::consultar($sql);
    $lista = new ArrayObject();
    while (list ($id, $nome, $sexo, $email, $cpf, $admin, $senha, $telefone) = mysqli_fetch_row($result)) {
      $cliente = new Cliente();
      $cliente->setId($id);
      $cliente->setNome($nome);
      $cliente->setSexo($sexo);
      $cliente->setEmail($email);
      $cliente->setCpf($cpf);
      $cliente->setAdmin($admin);
      $cliente->setSenha($senha);
      $cliente->setTelefone($telefone);

      $lista->append($cliente);


    }
    return $lista;
  }

  public static function getClienteById($id){
    $sql = "SELECT * FROM clientes WHERE id =".$id;

    $result = Conexao::consultar($sql);
    $lista = new ArrayObject();
    list ($id, $nome, $sexo, $email, $cpf, $admin, $senha, $telefone) = mysqli_fetch_row($result);
      $cliente = new Cliente();
      $cliente->setId($id);
      $cliente->setNome($nome);
      $cliente->setSexo($sexo);
      $cliente->setEmail($email);
      $cliente->setCpf($cpf);
      $cliente->setAdmin($admin);
      $cliente->setSenha($senha);
      $cliente->setTelefone($telefone);

      $lista->append($cliente);


    return $lista;
  }

  public static function logar($login, $senha){
      $sql = " SELECT id, nome, admin "
           . " FROM clientes "
           . " WHERE ( email = '".$login."' OR "
           . "           CPF = '".$login."' )  "
           . "     AND senha = '".$senha."'    ";
      $result = Conexao::consultar($sql);

      if( mysqli_num_rows( $result ) > 0 ){
          $dados = mysqli_fetch_assoc( $result );
          $cliente = new Cliente();
          $cliente->setId( $dados['id'] );
          $cliente->setNome( $dados['nome'] );
          $cliente->setAdmin( $dados['admin'] );
          return $cliente;
      } else {
          return NULL;
      }

  }




  }


 ?>
