<meta charset="utf-8">

<?php
  include_once '../model/clsCliente.php';
  include_once '../dao/clsClienteDAO.php';
  include_once '../dao/clsConexao.php';

  if ( isset($_REQUEST['inserir']) ) {
    $senha = $_POST['txtSenha'];
    $senhaConfirma = $_POST['txtSenhaConfirma'];

    if ($senha != $senhaConfirma) {
      echo "<body onload ='window.history.back();'>";
    }else{
      $cliente = new Cliente();
      $cliente->setNome( $_POST['txtNome']  );
      $cliente->setTelefone( $_POST['txtTelefone']  );
      $cliente->setEmail( $_POST['txtEmail']  );
      $cliente->setCpf( $_POST['txtCPF']  );

      $cliente->setSexo( $_POST['rbSexo'] );
      $senha = md5($senha);
      $cliente->setSenha( $senha );

      $cliente->setAdmin(0);

      ClienteDAO::inserir($cliente);
      header("Location: ../index.php");
  }
}
?>
