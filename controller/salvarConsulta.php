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
    $horario = $_POST['horario'];
    session_start();
    $cliente = new Cliente();
    $cliente->setId( $_SESSION['idCliente']);

    $consulta = new Consulta();
    $consulta->setDia($data);
    $consulta->setMensagem($problema);
    $consulta->setCliente($cliente);
    $consulta->setHorario($horario);

    ConsultaDAO::inserir($consulta);
    header("Location: ../index.php");
  }

?>
