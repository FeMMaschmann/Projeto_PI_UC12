<?php
if (session_status() != PHP_SESSION_ACTIVE) {
	session_start();
}
?>

<link rel="stylesheet" href="style.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-fixed-top  navbar-color">
      <div class="container">

        <!-- header -->
        <div class="navbar-header">

          <!-- botao toggle -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">alternar navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="index.php" class="navbar-brand">
            <span class="img-logo">Clinica</span>
          </a>

        </div>

        <!-- navbar -->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="sobre.php">Sobre a Clínica</a></li>
            <li><a href="equipe.php">Nossa Equipe</a></li>
            <li><a href="consultar.php">Consultar</a></li>
            <li class="divisor"></li>
            <?php
            	if ( isset($_SESSION['logado']) && $_SESSION['logado'] == TRUE ) {
            		echo "<li class='not-active'><a>Olá, ". $_SESSION['nome']."</a></li>";
            		echo "<li><a href='sair.php'>Sair</a></li>";
            	} else {
          	?>
            <li><a href="cadastro.php">Cadastrar-se</a></li>
            <li><a href="logar.php" role="button" data-toggle="modal" data-target="#login-modal">Entrar</a></li>
            <?php
          		}
          	?>
          </ul>
        </div>




      </div><!-- /container -->
    </nav><!-- /nav -->


    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" align="center">
            <img class="img-circle" id="img_logo" src="imagens/logoOlho.png">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
          </div>
          <!-- Begin # DIV Form -->
          <div>
            <!-- Begin # Login Form -->
            <form action="entrar.php" method="POST">
            	<div class="modal-body">
            		<div>
            			<div class="glyphicon glyphicon-chevron-right"></div>
            			<span>Digite seu e-mail ou cpf e sua senha.</span>
            		</div>
            		<input name="txtLogin" class="form-control" type="text" placeholder="E-mail ou CPF" required>
            		<input name="txtSenha" class="form-control" type="password" placeholder="Senha" required>
            	</div>
            	<div class="modal-footer">
              	<div>
                	<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
              	</div>
              	<div>
                	<button type="button" class="btn btn-link"><a href="cadastro.php">Register</a></button>
              	</div>
            	</div>
            </form><!-- End # Login Form -->
          </div><!-- End # DIV Form -->
  			</div>
			</div>
		</div>
