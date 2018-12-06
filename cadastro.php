<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clínica - Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
      include_once "menu.php";
    ?>

    <form action="controller/salvarCliente.php?inserir" method="POST">
      <br><br><br><br><br><br><br>
      <label>Nome: </label>
  		<input type="text" name="txtNome" required maxlength="200" /><br><br>
  		<label>Telefone: </label>
  		<input type="text" name="txtTelefone" maxlength="50" /><br><br>
  		<label>Email: </label>
  		<input type="email" name="txtEmail" required maxlength="200" /><br><br>
      <label>CPF: </label>
  		<input type="text" name="txtCPF" required /><br><br>

      <label>Sexo: </label>
  		<input type="radio" name="rbSexo" value="f" required>Feminino
  		<input type="radio" name="rbSexo" value="m">Masculino<br><br>

      <label>Senha: </label>
  		<input type="password" name="txtSenha" required maxlength="50" /><br><br>
  		<label>Confirme Senha: </label>
  		<input type="password" name="txtSenhaConfirma" required maxlength="50" /><br>
  		<br><br>

      <input class="input_botao" type="submit" name="Salvar">
  		<input class="input_botao" type="reset" name="Limpar">
    </form>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
