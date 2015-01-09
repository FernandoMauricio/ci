<?php
$config['titulo'] = "Área Restrita / Usuários / Cadastrar Usuário";

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span8 conteudo">
	<div class="page-header">
		<h1>Cadastrar Usuário</h1>
	</div>
	<div class="well">
		<form>
			<label for="disabledTextInput">Número da Matrícula</label><br />
			<input type="text" class="form-control" placeholder="Digite aqui o número da matrícula"/><br />

			<label for="disabledTextInput">Nome do Usuário</label><br />
			<input type="text" class="form-control" placeholder="Digite aqui o nome do usuário"/><br />

			<label for="disabledTextInput">Nível Funcional:</label><br />
			<select class="form-control">
				<option>Servidor</option>
				<option>Gerente</option>
				<option>Supervisor</option>
			</select><br />

			<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-nivel-funcional"><i class="glyphicon glyphicon-plus"></i> Nível Funcional</a><br /><br />

			<label for="disabledTextInput">Unidade Administrativa:</label><br />
			<select class="form-control">
			  <option>SEDE ADMINISTRATIVA - GIC</option>
			  <option>SEDE ADMINISTRATIVA - DAD</option>
			  <option>SEDE ADMINISTRATIVA - DPM</option>
			  <option>SEDE ADMINISTRATIVA - GMT</option>
			  <option>SEDE ADMINISTRATIVA - GMA</option>
			  <option>SEDE ADMINISTRATIVA - GIC</option>
			  <option>SEDE ADMINISTRATIVA - DAD</option>
			  <option>SEDE ADMINISTRATIVA - DPM</option>
			  <option>SEDE ADMINISTRATIVA - GMT</option>
			  <option>SEDE ADMINISTRATIVA - GMA</option>
			</select><br />

			<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-unidade-adm"><i class="glyphicon glyphicon-plus"></i> Unidade</a><br /><br />

			<label for="disabledTextInput">Foto:</label><br />
			<input type="file"/><br /><br />

			<label for="disabledTextInput">Senha:</label><br />
			<input type="password" class="form-control" /><br />

			<label for="disabledTextInput">Confirmar Senha:</label><br />
			<input type="password" class="form-control" /><br />
			
			<br /><br />
			<button class="btn" type="reset">Limpar</button>
			<button class="btn btn-primary" type="button" onclick="javascript:alert('O Usuário foi cadastrado com êxito!')">Cadastrar</button>
		</form>
	</div>
</div>
<!-- FIM DO CONTEÚDO -->

<!--MODAIS-->
<!-- Modal de inclusão de novo Tipo de Portaria -->
<div class="modal fade" id="add-nivel-funcional" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Adicionar Níveis Funcionais</h4>
      </div>
      <div class="modal-body">
  	<form>
		<label for="recipient-name" class="control-label">Novo Nível Funcional</label><br />
		<input type="text" class="form-control" id="recipient-name" placeholder="Digite aqui o novo nível funcional"/><br />
		<a class="btn btn-success" href="javascript:void(0);">Adicionar</a><br /><br />
	</form>
    <table class="table table-hover">
    	<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Ação</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Servidor</td>
				<td>
					<a class="btn btn-small btn-primary" role="button"><i class="glyphicon glyphicon-edit"></i> Editar</a>
					<a class="btn btn-small btn-danger" role="button"><i class="glyphicon glyphicon-remove"></i> Excluir</a>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Gerente</td>
				<td>
					<a class="btn btn-small btn-primary" role="button"><i class="glyphicon glyphicon-edit"></i> Editar</a>
					<a class="btn btn-small btn-danger" role="button"><i class="glyphicon glyphicon-remove"></i> Excluir</a>
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Supervisor</td>
				<td>
					<a class="btn btn-small btn-primary" role="button"><i class="glyphicon glyphicon-edit"></i> Editar</a>
					<a class="btn btn-small btn-danger" role="button"><i class="glyphicon glyphicon-remove"></i> Excluir</a>
				</td>
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

<!-- Modal de inclusão de nova unidade -->
<div class="modal fade" id="add-unidade-adm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel2">Adicionar Unidade Administrativa</h4>
      </div>
      <div class="modal-body">
  	<form>
		<label for="recipient-name" class="control-label">Nova Unidade Administrativa</label><br />
		<input type="text" class="form-control" id="recipient-name" placeholder="Digite aqui a nova unidade"/><br />
	    <label for="recipient-name" class="control-label">Sigla da Unidade Administrativa</label><br />
		<input type="text" class="form-control" id="recipient-name" placeholder="Digite aqui a sigla"/><br />
		<a class="btn btn-success" href="javascript:void(0);">Adicionar</a><br /><br />
	</form>
<table class="table table-hover">
    	<thead>
			<tr>
				<th>Sigla</th>
				<th>Nome</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>GIC</td>
				<td>Gerência de Informática Corporativa</td>
				<td>
					<a class="btn btn-small btn-primary" role="button"><i class="glyphicon glyphicon-edit"></i> Editar</a>
					<a class="btn btn-small btn-danger" role="button"><i class="glyphicon glyphicon-remove"></i> Excluir</a>
				</td>
			</tr>
			<tr>
				<td>DAD</td>
				<td>Gerência Administrativa</td>
				<td>
					<a class="btn btn-small btn-primary" role="button"><i class="glyphicon glyphicon-edit"></i> Editar</a>
					<a class="btn btn-small btn-danger" role="button"><i class="glyphicon glyphicon-remove"></i> Excluir</a>
				</td>
			</tr>
			<tr>
				<td>GMA</td>
				<td>Gerência de Materias</td>
				<td>
					<a class="btn btn-small btn-primary" role="button"><i class="glyphicon glyphicon-edit"></i> Editar</a>
					<a class="btn btn-small btn-danger" role="button"><i class="glyphicon glyphicon-remove"></i> Excluir</a>
				</td>
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

<?php
//Inclui a página de rodapé
include("./src/inc/footer.inc.php");
?>