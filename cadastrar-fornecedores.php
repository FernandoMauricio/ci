<?php
$config['titulo'] = "Siga-me / Cadastrar Fornecedores";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Cadastrar Fornecedores</h3>
	</div>
	<div class="well">
		<form>
			Nome Fantasia<br />
			<input type="text" placeholder="Digite aqui o nome fantasia"/><br /><br />

			CNPJ<br />
			<input type="text" placeholder="Digite aqui o CNPJ"/><br /><br />

			Tipo de Atividade<br />
			<input type="text" placeholder="Digite aqui o tipo de atividade"/><br /><br />

			Telefone<br />
			<input type="text" placeholder="Digite aqui o telefone"/><br /><br />

			
			<br /><br />
			<button class="btn" type="reset">Limpar</button>
			<button class="btn btn-primary" type="button" onclick="javascript:alert('O Fornecedor foi cadastrado com êxito!'); window.location = './adm-fornecedores.php';">Cadastrar</button>
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