<?php
$config['titulo'] = "Siga-me / Fornecedores";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Fornecedores</h3>
		<div class="input-append pull-right" style="margin-top:-46px;">
			<input class="span2" id="appendedInputButton" type="text">
			<button class="btn" type="button"><i class="icon-search"></i></button>
		</div>
	</div>
	<div class="well">
		<ul class="media-list">
			<li class="media">
				<div class="media-body">
					<h4 class="media-heading">3TEC LTDA</h4>
						CNPJ: 00.329.754/0001-90<br />
						Telefone: (31) 3194-358500<br />
						Ramo de Atuação: Móveis de Escritório<br />
						Código do Fornecedor: 295<br />
				</div>
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn" href="./cadastrar-fornecedores.php"><i class="icon-edit"></i> Editar</a>
					<a class="btn btn-danger" href="#excluir" role="button" data-toggle="modal"><i class="icon-remove icon-white"></i> Excluir</a>
				</div>
			</li>
			<hr>
			<li class="media">
				<div class="media-body">
					<h4 class="media-heading">ABS Industria de Bombas Centrifugas LTDA</h4>
						CNPJ: 77.153.260/0001-21<br />
						Telefone: (27) 3324-3599<br />
						Ramo de Atuação: Bombas Hidráulicas<br />
						Código do Fornecedor: 20<br />
				</div>
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn" href="./cadastrar-fornecedores.php"><i class="icon-edit"></i> Editar</a>
					<a class="btn btn-danger" href="#excluir" role="button" data-toggle="modal"><i class="icon-remove icon-white"></i> Excluir</a>
				</div>
			</li>
			<hr>
			<li class="media">
				<div class="media-body">
					<h4 class="media-heading">ACIMAQ Equipamentos Industriais e Comercialização LTDA</h4>
						CNPJ: 31.780.992/0001-40<br />
						Telefone: (27) 2124-5444<br />
						Ramo de Atuação: Informática<br />
						Código do Fornecedor: 244<br />
				</div>
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn" href="./cadastrar-fornecedores.php"><i class="icon-edit"></i> Editar</a>
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
				<li><a href="#">Próximo</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- Modal de mensagem de confirmação de exclusão -->
<div id="excluir-ci" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Excluir Comunicação Interna</h3>
  </div>
  <div class="modal-body">
    <p>Deseja realmente excluir a Comunicação Interna Nº 740?</p>
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
    <h3>Comunicação Interna Excluída</h3>
  </div>
  <div class="modal-body">
    <p>A Comunicação Interna de Nº 740 foi excluída com êxito!</p>
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