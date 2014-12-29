<?php
$config['titulo'] = "Área Restrita / Níveis Funcionais";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Níveis Funcionais</h3>
	</div>
	<div class="well">
		<form>
			Nome do Nível Funcional<br />
			<input type="text" placeholder="Digite aqui o nome do nível funcional"/><br />
			<a class="btn" href="javascript:void(0);">Adicionar</a><br /><br />
		</form>
	    <table class="table table-condensed">
	    	<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Administrador do Sistema</td>
					<td></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Administrador NSP</td>
					<td>
						<a class="btn btn-small" role="button"><i class="icon-edit"></i> Editar</a>
						<a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Operacional</td>
					<td>
						<a class="btn btn-small" role="button"><i class="icon-edit"></i> Editar</a>
						<a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!-- FIM DO CONTEÚDO -->

</div>
</div>
<?php
//Inclui a página de rodapé
include("footer.inc.php");