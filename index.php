<?php
$config['titulo'] = "Página Inicial";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>Página inicial</h3>
	</div>
	<div class="well">
		<h4>CI - Comunicação Interna</h4>
		<p>Formalização de solicitações internas da empresa através de comunicações internas.</p>
		<h4>Siga-me</h4>
		<p>Requisições necessárias aos usuários, para abertura de processos administrativos.</p>
		<h4>Portarias</h4>
		<p>Catálogo e cadastro das portarias que regem e regulamentam.</p>
		<h4>Catálogo de Itens</h4>
		<p>Todos os itens disponíveis para solicitação no sistema.</p>
		<h4>Fornecedores</h4>
		<p>Informações básicas dos fornecedores da empresa.</p>
		<h4>Área Restrita (Adm)</h4>
		<p>Uso exclusivo do administrador do sistema. Serve para cadastro e edição de usuários e unidades administrativas.</p>
		<h4>Sair (Logout)</h4>
		<p>Para sair do sistema.</p>
	</div>
</div>
<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("footer.inc.php");
?>