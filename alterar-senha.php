<?php
$config['titulo'] = "Alterar Senha";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Alterar Senha</h3>
	</div>
	<div class="well">
		<form>
			Nova Senha:<br />
			<input type="password"/><br /><br />

			Confirmar Nova Senha:<br />
			<input type="password"/><br /><br />
			
			<br /><br />
			<button class="btn" type="reset">Limpar</button>
			<button class="btn btn-primary" type="button" onclick="javascript:alert('A senha foi altera com êxito!')">Alterar</button>
		</form>
	</div>
</div>
<!-- FIM DO CONTEÚDO -->

</div>
</div>
<?php
//Inclui a página de rodapé
include("footer.inc.php");
?>