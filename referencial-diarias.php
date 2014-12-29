<?php
$config['titulo'] = "Siga-me / Referencial de Diárias";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Referencial de Diárias</h3>
	</div>
	<div class="well">
		<form>
			Categoria<br />
			<input type="text" placeholder="Digite aqui o nome do nível funcional"/><br />
			Valor<br />
			<input type="text" placeholder="Digite aqui o nome do nível funcional"/><br />
			<a class="btn" href="javascript:void(0);">Adicionar</a><br /><br />
		</form>
	    <table class="table table-condensed">
	    	<thead>
				<tr>
					<th>Categoria</th>
					<th>Valor</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>50km no estado - Diretoria</td>
					<td>R$ 189,90</td>
					<td>
						<a class="btn btn-small" role="button"><i class="icon-edit"></i> Editar</a>
						<a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a>
					</td>
				</tr>
				<tr>
					<td>50km no estado - Gerentes</td>
					<td>R$ 150,00</td>
					<td>
						<a class="btn btn-small" role="button"><i class="icon-edit"></i> Editar</a>
						<a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a>
					</td>
				</tr>
				<tr>
					<td>50km no estado - Funcionários</td>
					<td>R$ 2,00</td>
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