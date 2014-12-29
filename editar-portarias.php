<?php
$config['titulo'] = "Portaria / Editar Portaria";

$numero = $_GET['numero'];
$data = $_GET['data'];
$resumo = $_GET['resumo'];

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Editar Portaria</h3>
	</div>
	<div class="well">
		<form>
			Número da Portaria<br />
			<input type="text" placeholder="Digite aqui o número da portaria" value="<?php echo $numero; ?>"/><br /><br />

			Ano da Portaria:<br />
			<select>
				<option>2013</option>
				<option>2012</option>
				<option>2011</option>
				<option>2010</option>
				<option>2009</option>
				<option>2008</option>
			</select><br /><br />

			Tipo da Portaria:<br />
			<select>
				<option>Revogação</option>
				<option>Não lembro</option>
				<option>Depois eu coloco</option>
			</select> <a data-toggle="modal" href="#add-novo" class="btn btn-small" style="margin:0 0 10px 0;"><i class="icon-edit"></i> Add Novo</a><br /><br />

			Data de Publicação da Portaria<br />
			<input type="text" placeholder="Digite aqui a data de publicação da portaria" value="<?php echo $data; ?>"/><br /><br />

			Arquivo da Portaria Digitalizado:<br />
			<input type="file" /><br /><br />

			Resumo da Portaria:<br />
			<textarea rows="8" class="input-xxlarge"><?php echo $resumo; ?></textarea>
			
			<br /><br />
			<button class="btn" type="reset">Limpar</button>
			<button class="btn btn-primary" type="button" onclick="javascript:alert('A Portaria foi cadastrada com êxito!')">Cadastrar</button>
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