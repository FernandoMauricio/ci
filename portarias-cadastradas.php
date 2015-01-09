<?php
$config['titulo'] = "Portarias / Portarias Cadastradas";

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span8 conteudo">
	<div class="page-header">
		<h1>Portarias Cadastradas</h1>

			 <div class="col-lg-5">
			    <div class="input-group">
			      <input type="text" class="form-control" placeholder="Localizar CI...">
			      <span class="input-group-btn">
			        <button class="btn btn-primary" type="button">Go!</button>
			      </span>
			    </div>
			  </div><br /><br />
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
						</div><br /><br />
						<a class="btn btn-primary" href="./src/img/comunicacao_interna_print.pdf" target="_blank"><i class="glyphicon glyphicon-download-alt"></i> Download da portaria digitalizada</a>
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
						</div><br /><br />
						<a class="btn btn-primary" href="./src/img/comunicacao_interna_print.pdf" target="_blank"><i class="glyphicon glyphicon-download-alt"></i> Download da portaria digitalizada</a>
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
						</div><br /><br />
						<a class="btn btn-primary" href="./src/img/comunicacao_interna_print.pdf" target="_blank"><i class="glyphicon glyphicon-download-alt"></i> Download da portaria digitalizada</a>
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

<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("./src/inc/footer.inc.php");
?>