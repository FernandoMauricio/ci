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
      <li role="presentation"><a href="comunicacao-interna-visualizar.php?id=">Visualizar CI</a></li>
      <li role="presentation" class="active"><a href="#">Despachos Pendentes</a></li>
    </ul>
<br>

<div class="panel panel-danger">
  <div class="panel-heading">
    <h4 class="panel-title">Despachos Pentendes</h4>
  </div>
  <div class="panel-body">
    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Código CI</th>
                        <th>Unidade/Setor</th>
                        <th>Responsável</th>
                        <th>Situação</th>
                      </tr>
                    </thead>
                 <tbody>
		        <tr>
		          <td>5000</td>
		          <td>DRG</td>
		          <td>Silvana Carvalho</td>
		          <td><span class="label label-danger">Pendente</span></td>
		        </tr>
		        <tr>
		          <td>5000</td>
		          <td>DAD</td>
		          <td>Neilon Márcio</td>
		        <td><span class="label label-danger">Pendente</span></td>
		        </tr>
		        <tr>
		          <td>5000</td>
		          <td>GIC</td>
		          <td>Rui Alencar</td>
		        <td><span class="label label-danger">Pendente</span></td>
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
include("./src/inc/footer.inc.php");
?>