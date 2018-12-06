<meta charset="utf-8">

<?php
  include_once '../model/clsCliente.php';
  include_once '../model/clsConsulta.php';
  include_once '../dao/clsClienteDAO.php';
  include_once '../dao/clsConsultaDAO.php';
  include_once '../dao/clsConexao.php';

  if ( isset($_REQUEST['inserir']) ) {
    $data = $_POST['txtData'];
    $problema = $_POST['txtProblema'];
    session_start();
    $cliente = new Cliente();
    $cliente->setId( $_SESSION['idCliente']);

    $cliente->setHorario($data);
    $cliente->setProblema($problema);

      clienteDAO::inserir($cliente);
      header("Location: ../index.php");
  }
}
?>