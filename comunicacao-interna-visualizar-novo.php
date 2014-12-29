<?php
$config['titulo'] = "Criar Comunicação Interna";

//Inclui a página de cabeçalho
include("./src/inc/header.inc.php");
//Inclui a página do menu lateral
include("./src/inc/sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span8 conteudo">

	<ul class="nav nav-tabs nav-justified">
      <li role="presentation"><a href="comunicacao-interna.php">Comunicação Interna</a></li>
      <li role="presentation" class="active"><a href="#">Visualizar CI</a></li>
      <li role="presentation"><a href="comunicacao-interna-despacho-pendente.php?id=">Despachos Pendentes</a></li>
    </ul>

	<div class="page-header">
		<h3>Visualizar Comunicação Interna</h3>
	</div>

  
<div class="bs-docs-grid">
    <div class="row show-grid">
      <div class="col-xs-9">.col-xs-9</div>
      <div class="col-xs-4">.col-xs-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
      <div class="col-xs-6">.col-xs-6<br>Subsequent columns continue along the new line.</div>
    </div>
  </div>




</div>
<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("./src/inc/footer.inc.php");
?>