<?php
$config['titulo'] = "Página Inicial";

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span8 conteudo">
	<div class="page-header">
		<h3>Página inicial</h3>
	</div>


<div class="jumbotron">
  <h3>Boa tarde, Fernando Maurício!</h3><br />

	<h4>CI - Comunicação Interna</h4>
		<h5>Formalização de solicitações internas da empresa através de comunicações internas.</h5><br />
	<h4>Portarias</h4>
		<h5>Catálogo e cadastro das portarias que regem e regulamentam.</h5><br />
 	<h4>Área Restrita (Adm)</h4>
		<h5>Uso exclusivo do administrador do sistema. Serve para cadastro e edição de usuários e unidades administrativas.</h5><br />
	<h4>Sair (Logout)</h4>
		<h5>Para sair do sistema.</h5>

</div>


</div>
<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("./src/inc/footer.inc.php");
?>