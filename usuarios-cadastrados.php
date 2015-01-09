<?php
$config['titulo'] = "Área Restrita / Usuários / Usuários Cadastrados";

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span8 conteudo">
	<div class="page-header">
		<h3>Usuários Cadastrados</h3>

			 <div class="col-lg-5">
			    <div class="input-group">
			      <input type="text" class="form-control" placeholder="Localizar usuário...">
			      <span class="input-group-btn">
			        <button class="btn btn-primary" type="button">Go!</button>
			      </span>
			    </div>
			  </div><br /><br />
	</div>
	<div class="well">
		<ul class="media-list">
			<li class="media">
				<a class="pull-left" href="#" style="border:#ccc 1px solid;">
					<img class="media-object" src="./src/img/foto_vazio.png">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Fernando Mauricio</h4>
						Matrícula: 2000<br />
						Gerência de Informática Corporativa<br />
						Programador<br />
				</div>
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn btn-primary" href="./cadastrar-usuario.php"><i class="glyphicon glyphicon-edit"></i> Editar</a>
					<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#inativar"><i class="glyphicon glyphicon-remove"></i> Inativar</a>
				</div>
			</li>
			<hr>
			<li class="media">
				<a class="pull-left" href="#" style="border:#ccc 1px solid;">
					<img class="media-object" src="./src/img/foto_vazio.png">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Laércio Varela</h4>
						Matrícula: 25000<br />
						Gerência de Informática Corporativa<br />
						Analista de Suporte<br />
				</div>
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn btn-primary" href="./cadastrar-usuario.php"><i class="glyphicon glyphicon-edit"></i> Editar</a>
					<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#inativar"><i class="glyphicon glyphicon-remove"></i> Inativar</a>
				</div>
			</li>
			<hr>
			<li class="media">
				<a class="pull-left" href="#" style="border:#ccc 1px solid;">
					<img class="media-object" src="./src/img/foto_vazio.png">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Endrio Medeiros</h4>
						Matrícula: 3500<br />
						Gerência de Informática Corporativa<br />
						Técnico de Informática<br />
				</div>
				<div class="btn-group pull-right" style="margin-top:-34px;">

					<a class="btn btn-primary" href="./cadastrar-usuario.php"><i class="glyphicon glyphicon-edit"></i> Editar</a>
					<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#inativar"><i class="glyphicon glyphicon-remove"></i> Inativar</a>

				</div>
			</li>
			<hr>
		</ul>
					<nav>
					  <ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">Anterior</span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">Próximo</span>
					      </a>
					    </li>
					  </ul>
					</nav>
	</div>
</div>

<!-- Modal de inativação de usuário -->
<div class="modal fade" id="inativar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Usuário Inativado</h4>
      </div>
      <div class="modal-body">
        <p>Deseja realmente excluir o usuário Fernando Mauricio?</p> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <a data-dismiss="modal" class="btn btn-danger" href="#inativado" role="button" data-toggle="modal">Confirmar</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal de mensagem de confirmação inativação usuário -->
<div class="modal fade" id="inativado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Usuário Inativado</h4>
      </div>
      <div class="modal-body">
        <p>O usuário Fernando Mauricio foi inativado com êxito!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>







<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("./src/inc/footer.inc.php");
?>