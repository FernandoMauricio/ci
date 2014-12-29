<?php
$config['titulo'] = "Editar Comunicação Interna";

$assunto = $_GET['assunto'];
$conteudo = $_GET['conteudo'];

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span8 conteudo">
	<div class="page-header">
		<h3>Editar Comunicação Interna</h3>
	</div>
	<div class="well">
		<form>
			<label>Unidade Administrativa de Destino:</label>
			<select>
				<option>Assessoria de Comunicação</option>
				<option>Diretoria</option>
				<option>Administrativo</option>
			</select>
			<br /><br />
			<label>Assunto:</label>
			<input type="text" placeholder="Digite aqui o Assunto" value="<?php echo $assunto; ?>"/>
			<br /><br />
			<label>Conteúdo:</label>
			<textarea rows="8" class="input-xxlarge"><?php echo $conteudo; ?></textarea>
			<br /><br />
			<button class="btn" type="reset">Limpar</button>
			<button class="btn btn-primary" type="button" href="#excluir-ci" role="button" data-toggle="modal">Finalizar</button>
		</form>
	</div>
</div>
<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("./src/inc/footer.inc.php");
?>