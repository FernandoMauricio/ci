<?php
$config['titulo'] = "Siga-me";

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span8 conteudo">
	<div class="page-header">
		<h3>Siga-me</h3>
	</div>
	<div class="well">
		<h4>REQUISIÇÕES</h4>
		<a href="./rme.php">RME - Requisição de Material de Estoque</a><br />
		<a href="./rme.php">RAV - Requisição de Autorização de Viagem</a><br />
		<a href="./rme.php">RIA - Requisição Interna Administrativa</a>
		<br />
		<br />
		<h4>ACESSO RESTRITO NÚCLEO FINANCEIRO CONTÁBIL</h4>
		<a href="./referencial-diarias.php">Cadastro/Atualização Referenciais de Diárias</a>
		<br />
		<br />
		<h4>ACESSO RESTRITO NÚCLEO DE SERVIÇOS E PROTOCOLOS</h4>
		<a href="./adm-fornecedores.php">Cadastro de Fornecedores</a>
	</div>
</div>
<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("./src/inc/footer.inc.php");