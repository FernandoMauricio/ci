<?php
$config['titulo'] = "Área Restrita / Usuários / Cadastrar Usuário";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Cadastrar Usuário</h3>
	</div>
	<div class="well">
		<form>
			Número da Matrícula<br />
			<input type="text" placeholder="Digite aqui o número da matrícula"/><br /><br />

			Nome do Usuário<br />
			<input type="text" placeholder="Digite aqui o nome do usuário"/><br /><br />

			Nível Funcional:<br />
			<select>
				<option>Administrador do Sistema</option>
				<option>Administrador NSP</option>
				<option>Operacional</option>
			</select> <a data-toggle="modal" href="./niveis-funcionais.php" class="btn btn-small" style="margin:0 0 10px 0;"><i class="icon-edit"></i> Add Novo</a><br /><br />

			Unidade Administrativa:<br />
			<select>
				<option>Núcleo da Tecnologia da Informação</option>
				<option>Núcleo de Serviços e Protocolos</option>
				<option>Núcleo Financeiro Contábil</option>
			</select> <a data-toggle="modal" href="./unidades-administrativas.php" class="btn btn-small" style="margin:0 0 10px 0;"><i class="icon-edit"></i> Add Novo</a><br /><br />

			Foto:<br />
			<input type="file" /><br /><br />

			Senha:<br />
			<input type="password"/><br /><br />

			Confirmar Senha:<br />
			<input type="password"/><br /><br />
			
			<br /><br />
			<button class="btn" type="reset">Limpar</button>
			<button class="btn btn-primary" type="button" onclick="javascript:alert('O Usuário foi cadastrado com êxito!')">Cadastrar</button>
		</form>
	</div>
</div>
<!-- FIM DO CONTEÚDO -->

<!-- Modal de inclusão de novo Tipo de Portaria -->
<div id="add-novo" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Lista de Tipos de Portaria</h3>
  </div>
  <div class="modal-body">
  	<form>
		Nome do tipo de portaria<br />
		<input type="text" placeholder="Digite aqui o tipo de portaria"/><br />
		<a class="btn" href="javascript:void(0);">Adicionar</a><br /><br />
	</form>
    <table class="table table-condensed">
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
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Fechar</a>
  </div>
</div>

</div>
</div>
<?php
//Inclui a página de rodapé
include("footer.inc.php");
?>