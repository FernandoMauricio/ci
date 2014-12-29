<?php
$config['titulo'] = "Área Restrita / Usuários / Usuários Cadastrados";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Usuários Cadastrados</h3>
		<div class="input-append pull-right" style="margin-top:-46px;">
			<input class="span2" id="appendedInputButton" type="text">
			<button class="btn" type="button"><i class="icon-search"></i></button>
		</div>
	</div>
	<div class="well">
		<ul class="media-list">
			<li class="media">
				<a class="pull-left" href="#" style="border:#ccc 1px solid;">
					<img class="media-object" src="./src/img/foto_vazio.png">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Pedro Fonseca</h4>
						Matrícula: G00052<br />
						Núcleo de Tecnologia da Informação<br />
						Administrador do Sistema<br />
				</div>
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn" href="./cadastrar-usuario.php"><i class="icon-edit"></i> Editar</a>
					<a class="btn btn-danger" href="#excluir" role="button" data-toggle="modal"><i class="icon-remove icon-white"></i> Excluir</a>
				</div>
			</li>
			<hr>
			<li class="media">
				<a class="pull-left" href="#" style="border:#ccc 1px solid;">
					<img class="media-object" src="./src/img/foto_vazio.png">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Pedro Fonseca</h4>
						Matrícula: G00052<br />
						Núcleo de Tecnologia da Informação<br />
						Administrador do Sistema<br />
				</div>
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn" href="./cadastrar-usuario.php"><i class="icon-edit"></i> Editar</a>
					<a class="btn btn-danger" href="#excluir" role="button" data-toggle="modal"><i class="icon-remove icon-white"></i> Excluir</a>
				</div>
			</li>
			<hr>
			<li class="media">
				<a class="pull-left" href="#" style="border:#ccc 1px solid;">
					<img class="media-object" src="./src/img/foto_vazio.png">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Pedro Fonseca</h4>
						Matrícula: G00052<br />
						Núcleo de Tecnologia da Informação<br />
						Administrador do Sistema<br />
				</div>
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn" href="./cadastrar-usuario.php"><i class="icon-edit"></i> Editar</a>
					<a class="btn btn-danger" href="#excluir" role="button" data-toggle="modal"><i class="icon-remove icon-white"></i> Excluir</a>
				</div>
			</li>
			<hr>
		</ul>
		<div class="pagination">
			<ul>
				<li class="disabled"><a href="#">Anterior</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">Próximo</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- Modal de mensagem de confirmação de exclusão -->
<div id="excluir" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Excluir Usuário</h3>
  </div>
  <div class="modal-body">
    <p>Deseja realmente excluir o usuário Pedro Fonseca?</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Cancelar</a>
    <a data-dismiss="modal" href="#excluido" class="btn btn-primary" role="button" data-toggle="modal"> Excluir</a>
  </div>
</div>

<!-- Modal de mensagem de exclusão -->
<div id="excluido" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Usuário Excluído</h3>
  </div>
  <div class="modal-body">
    <p>O usuário Pedro FOnseca foi excluída com êxito!</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-primary" data-dismiss="modal"> Fechar</a>
  </div>
</div>

<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("footer.inc.php");
?>