<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clínica - Bem Vindo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Script -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
    <form action="controller/salvarConsulta.php?inserir" method="POST">
      <br><br><br><br><br><br><br>
      <label>Horario: </label>
      <select>
        <option value="0">Selecione...</option>
      </select><br><br><br>
      <!-- <input type="datetime-local" name="txtData"/><br><br> -->
      <label>Descreva seu problema:</label><br>
      <textarea cols="100" rows="10" name="txtProblema"></textarea><br><br>

      <input class="input_botao" type="submit" name="Salvar">
      <input class="input_botao" type="reset" name="Limpar">
    </form>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
