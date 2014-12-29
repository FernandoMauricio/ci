<?php
$config['titulo'] = "Portarias / Portarias Cadastradas";

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Portarias Cadastradas</h3>
		<div class="input-append pull-right" style="margin-top:-46px;">
			<input class="span2" id="appendedInputButton" type="text">
			<button class="btn" type="button"><i class="icon-search"></i></button>
		</div>
	</div>
	<div class="well">
		<ul class="media-list">
			<li class="media">
				<div class="media-body">
					<h4 class="media-heading">PORTARIA 001-2010</h4>
						Tipo: Normas<br />
						Data de Publicação: 01/01/2010<br />
						Resumo: Destituir da função de membro de apoio ao pregoeiro, a...
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#resumo1">leia mais</a>
						<div id="resumo1" class="collapse">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, dolore, iste illum iure ex laborum ipsam et molestias corporis sit natus nisi iusto quis itaque cupiditate fuga laudantium animi eum accusantium beatae suscipit autem maiores at nihil voluptatem sunt perspiciatis hic quaerat id dicta vitae quisquam reiciendis eius. Aliquam, culpa!
						</div><br />
						<a class="btn" href="./src/img/comunicacao_interna_print.pdf" target="_blank"><i class="icon-download-alt icon-inverse"></i> Download da portaria digitalizada</a>
				</div>
			</li>
			<hr>
			<li class="media">
				<div class="media-body">
					<h4 class="media-heading">PORTARIA 001-2010</h4>
						Tipo: Normas<br />
						Data de Publicação: 01/01/2010<br />
						Resumo: Destituir da função de membro de apoio ao pregoeiro, a...
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#resumo2">leia mais</a>
						<div id="resumo2" class="collapse">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, dolore, iste illum iure ex laborum ipsam et molestias corporis sit natus nisi iusto quis itaque cupiditate fuga laudantium animi eum accusantium beatae suscipit autem maiores at nihil voluptatem sunt perspiciatis hic quaerat id dicta vitae quisquam reiciendis eius. Aliquam, culpa!
						</div><br />
						<a class="btn" href="./src/img/comunicacao_interna_print.pdf" target="_blank"><i class="icon-download-alt icon-inverse"></i> Download da portaria digitalizada</a>
				</div>
			</li>
			<hr>
			<li class="media">
				<div class="media-body">
					<h4 class="media-heading">PORTARIA 001-2010</h4>
						Tipo: Normas<br />
						Data de Publicação: 01/01/2010<br />
						Resumo: Destituir da função de membro de apoio ao pregoeiro, a...
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#resumo3">leia mais</a>
						<div id="resumo3" class="collapse">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, dolore, iste illum iure ex laborum ipsam et molestias corporis sit natus nisi iusto quis itaque cupiditate fuga laudantium animi eum accusantium beatae suscipit autem maiores at nihil voluptatem sunt perspiciatis hic quaerat id dicta vitae quisquam reiciendis eius. Aliquam, culpa!
						</div><br />
						<a class="btn" href="./src/img/comunicacao_interna_print.pdf" target="_blank"><i class="icon-download-alt icon-inverse"></i> Download da portaria digitalizada</a>
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
include("./src/inc/footer.inc.php");
?>