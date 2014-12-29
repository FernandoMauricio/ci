<?php
$config['titulo'] = "Catálogo de Itens";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Catálogo de Itens</h3>
		<div class="input-append pull-right" style="margin-top:-46px;">
			<input class="span2" id="appendedInputButton" type="text">
			<button class="btn" type="button"><i class="icon-search"></i></button>
		</div>
	</div>
	<div class="well">
		<ul class="media-list">
			<li class="media">
				<div class="media-body">
					<h4 class="media-heading">ESTABILIZADOR DE ENERGIA</h4>
						Código: 41452<br />
						Categoria: Material de Consumo (Informática)<br />
						Item com contrato de Fornecimento: <span class="label label-success">SIM</span><br />
						Situação no Estoque: <span class="label label-important">NÃO DISPONÍVEL</span><br />
				</div>
			</li>
			<hr>
			<li class="media">
				<div class="media-body">
					<h4 class="media-heading">PASSAGENS RODOVIÁRIAS</h4>
						Código: 12932<br />
						Categoria: Despesa com Viagens<br />
						Item com contrato de Fornecimento: <span class="label label-important">NÃO</span><br />
						Situação no Estoque: <span class="label label-success">DISPONÍVEL</span><br />
				</div>
			</li>
			<hr>
			<li class="media">
				<div class="media-body">
					<h4 class="media-heading">PASSAGENS RODOVIÁRIAS</h4>
						Código: 12932<br />
						Categoria: Despesa com Viagens<br />
						Item com contrato de Fornecimento: <span class="label label-important">NÃO</span><br />
						Situação no Estoque: <span class="label label-success">DISPONÍVEL</span><br />
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