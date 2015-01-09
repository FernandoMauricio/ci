<?php
$config['titulo'] = "Portaria / Cadastrar Portaria";

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span8 conteudo">
	<div class="page-header">
		<h1>Cadastrar Portaria</h1>
	</div>
	<div class="well">
		<form>
			<label for="disabledTextInput">Número da Portaria:</label><br / >
			<input type="text" class="form-control" placeholder="Digite aqui o número da portaria"/><br />

				<label for="disabledTextInput">Ano da Portaria:</label><br / >
					<select class="form-control">
						<option>2015</option>
						<option>2014</option>
						<option>2013</option>
						<option>2012</option>
						<option>2011</option>
						<option>2010</option>
						<option>2009</option>
						<option>2008</option>
					</select><br />

				<label for="disabledTextInput">Tipo da Portaria:</label>
				<a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-portaria"><i class="glyphicon glyphicon-plus"></i> Novo</a><br /><br />

					<select class="form-control">
						<option>Revogação</option>
						<option>Contratação</option>
						<option>Outro</option>
					</select> <br />
			
			<label for="disabledTextInput">Data de Publicação da Portaria: </label><br />
			<input type="date" class="form-control"><br /><br />
		
			<label for="disabledTextInput">Arquivo da Portaria Digitalizado:</label><br />
			<input type="file" /><br /><br />

			<label for="disabledTextInput">Resumo da Portaria:</label><br />
			<textarea class="form-control" rows="8" placeholder="Digite aqui um resumo da Portaria"></textarea><br />
			
			<br /><br />
			<button class="btn" type="reset">Limpar</button>
			<button class="btn btn-primary" type="button" onclick="javascript:alert('A Portaria foi cadastrada com êxito!')">Cadastrar</button>
		</form>
		
	</div>
</div>
<!-- FIM DO CONTEÚDO -->

<!-- Modal de inclusão de novo Tipo de Portaria -->
<div class="modal fade" id="add-portaria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Lista de Tipos de Portaria</h4>
      </div>
      <div class="modal-body">
  	<form>
		<label for="recipient-name" class="control-label">Nome do tipo de portaria:</label><br />
		<input type="text" class="form-control" id="recipient-name" placeholder="Digite aqui o tipo de portaria"/><br />
		<a class="btn btn-success" href="javascript:void(0);">Adicionar</a><br /><br />
	</form>
    <table class="table table-hover">
    	<thead>
			<tr>
				<th>Nome</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Revogação</td>
				<td><a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a></td>
			</tr>
			<tr>
				<td>Contratação</td>
				<td><a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a></td>
			</tr>
			<tr>
				<td>Outro</td>
				<td><a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a></td>
			</tr>
		</tbody>
	</table>
			  <div class="modal-footer">
			    <a href="#" class="btn btn-small btn-default" data-dismiss="modal">Fechar</a>
			  </div>
    </div>
  </div>
</div>




</div>
</div>
<?php
//Inclui a página de rodapé
include("./src/inc/footer.inc.php");
?>