<?php
  include_once 'model/clsCliente.php';
  include_once 'dao/clsClienteDAO.php';
  include_once 'dao/clsConexao.php';



  $login = $_POST['txtLogin'];
  $senha = $_POST['txtSenha'];
  $senha = md5($senha);

  $cliente = clienteDAO::logar($login, $senha);

  if ($cliente == NULL) {
    echo '<body onload="window.back.history.back()" >';
  } else {
    session_start();
    $_SESSION['logado'] = TRUE;
    $_SESSION['idCliente'] = $cliente->getId();
    $_SESSION['nome'] = $cliente->getNome();
    $_SESSION['admin'] = $cliente->getAdmin();

    header("Location: ".$_SERVER['HTTP_REFERER']);
  }
?>
