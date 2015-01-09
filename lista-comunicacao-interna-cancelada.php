<?php
$config['titulo'] = "Lista de Comunicações Internas";

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span8 conteudo">

	<ul class="nav nav-tabs nav-justified">
      <li role="presentation"><a href="lista-comunicacao-interna.php?id=">Em Circulação</a></li>
      <li role="presentation"><a href="lista-comunicacao-interna-elaboracao.php?id=">Em Elaboração</a></li>
      <li role="presentation"><a href="lista-comunicacao-interna-autorizacao.php?id=">P/ Autorização</a></li>
      <li role="presentation" class="active"><a href="lista-comunicacao-interna-cancelada.php?id=">Canceladas</a></li>
      <li role="presentation"><a href="lista-comunicacao-interna-encerrada.php?id=">Encerradas</a></li>
    </ul>

<br>
	<div class="page-header">

		<h3>Comunicações Internas - Canceladas</h3><br />

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
					<h4 class="media-heading">CI Nº 740 - Contratação de Estagiário</h4>
						Ano: 2015<br />
						Destinatário: DAD<br />
						Data e hora de emissão: 11/02/13 às 14:45<br />
						Situação: <span class="label label-danger">Cancelada</span>
				</div><br /><br /><br />
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn btn-default" href="#" role="button"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
					<a class="btn btn-default" href="./src/img/comunicacao_interna_print.pdf" role="button" target="_blank"><i class="glyphicon glyphicon-print"></i> Visualizar</a>
					<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluir-ci"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
				</div>
			</li>
			<hr>
						<li class="media">
				<div class="media-body">
					<h4 class="media-heading">CI Nº 740 - Contratação de Estagiário</h4>
						Ano: 2015<br />
						Destinatário: DAD<br />
						Data e hora de emissão: 11/02/13 às 14:45<br />
						Situação: <span class="label label-danger">Cancelada</span>
				</div><br /><br /><br />
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn btn-default" href="#" role="button"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
					<a class="btn btn-default" href="./src/img/comunicacao_interna_print.pdf" role="button" target="_blank"><i class="glyphicon glyphicon-print"></i> Visualizar</a>
					<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluir-ci"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
				</div>
			</li>
			<hr>
						<li class="media">
				<div class="media-body">
					<h4 class="media-heading">CI Nº 740 - Contratação de Estagiário</h4>
						Ano: 2015<br />
						Destinatário: DAD<br />
						Data e hora de emissão: 11/02/13 às 14:45<br />
						Situação: <span class="label label-danger">Cancelada</span>
				</div><br /><br /><br />
				<div class="btn-group pull-right" style="margin-top:-34px;">
					<a class="btn btn-default" href="#" role="button"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
					<a class="btn btn-default" href="./src/img/comunicacao_interna_print.pdf" role="button" target="_blank"><i class="glyphicon glyphicon-print"></i> Visualizar</a>
					<a type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluir-ci"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
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



<!-- Modal de cancelamento de CI -->
<div class="modal fade" id="excluir-ci" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cancelar Comunicação Interna</h4>
      </div>
      <div class="modal-body">
        <p>Deseja realmente excluir a Comunicação Interna Nº 5000?</p> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <a data-dismiss="modal" class="btn btn-danger" href="#cancelado" role="button" data-toggle="modal">Cancelar CI</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal de mensagem de cancelamento -->
<div class="modal fade" id="cancelado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Comunicação Interna Cancelada</h4>
      </div>
      <div class="modal-body">
        <p>A Comunicação Interna de Nº 5000 foi cancelada com êxito!</p>
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