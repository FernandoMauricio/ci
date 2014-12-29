<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $config['titulo']; ?> - Comunicação Interna Senac AM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="src/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="src/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="src/css/geral.css" rel="stylesheet" media="screen">
  </head>
  <body>
  	<div class="navbar navbar-fixed-top">
	    <div class="navbar-inner" style="background: #ccc;">
	        <div class="container bg_topo">
		        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </a>
		        <a class="brand" href="./"><img src="src/img/logo.png"/></a>
		        <div class="nome_sistema_topo"></div>
				<ul style="margin-top: 10px;" class="nav pull-right">
					<div class="media">
						<img class="media-object pull-right" src="src/img/foto_vazio.png">
						<div class="media-body" style="text-align:right;">
							<h4 class="media-heading">Fernando Mauricio</h4>
							<span>
								Programador<br />
								Gerência de Informática Corporativa - GIC<br />
								<a href="./alterar-senha.php">Alterar Senha</a>
							</span>
						</div>
					</div>
				</ul>
	        </div>
	    </div>
	    <div class="navbar">
	    	<div class="navbar-inner nav-ga" style="min-height:30px; height:30px;">
	    		<div class="container">
	    			<ul class="breadcrumb">
						<li><a href="./">Página Inicial</a> </li>
						<li class="active">
							<?php
							if($config['titulo'] != "Página Inicial"){
								echo "<span class='divider'>/</span>";
								echo $config['titulo'];
							}
							?>
						</li>
					</ul>
	    		</div>
	    	</div>
	    </div>
	</div>
  	<div class="container" style="margin-top:180px;">
		<div class="row">