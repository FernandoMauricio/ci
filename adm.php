<?php
$config['titulo'] = "Área Restrita (Adm)";

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Área Restrita (Adm)</h3>
	</div>
	<div class="well">
		<a href="./niveis-funcionais.php">Níveis Funcionais</a><br />
		<a href="./unidades-administrativas.php">Unidades Administrativas</a>
		<br />
		<br />
		<h4>USUÁRIOS</h4>
		<a href="./cadastrar-usuario.php">Cadastrar Usuário</a><br />
		<a href="./usuarios-cadastrados.php">Usuários Cadastrados</a>
		<br />
	</div>
</div>
<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("./src/inc/footer.inc.php");