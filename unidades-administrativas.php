<?php
$config['titulo'] = "Área Restrita / Unidades Administrativas";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Unidades Administrativas</h3>
	</div>
	<div class="well">
		<form>
			Nome da Unidade Administrativa<br />
			<input type="text" placeholder="Digite aqui o nome da unidade administrativa"/><br />
			Sigla da Unidade Administrativa<br />
			<input type="text" placeholder="Digite aqui a sigla da unidade administrativa"/><br />
			<a class="btn" href="javascript:void(0);">Adicionar</a><br /><br />
		</form>
	    <table class="table table-condensed">
	    	<thead>
				<tr>
					<th>Sigla</th>
					<th>Nome</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>DAF</td>
					<td>Diretoria Administrativa Financeira</td>
					<td>
						<a class="btn btn-small" role="button"><i class="icon-edit"></i> Editar</a>
						<a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a>
					</td>
				</tr>
				<tr>
					<td>NTI</td>
					<td>Núcleo de Tecnologia da Informação</td>
					<td>
						<a class="btn btn-small" role="button"><i class="icon-edit"></i> Editar</a>
						<a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a>
					</td>
				</tr>
				<tr>
					<td>NSP</td>
					<td>Núcleo de Serviço e Protocolo</td>
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