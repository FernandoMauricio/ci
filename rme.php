<?php
$config['titulo'] = "Siga-me / RME";

//Inclui a página de cabeçalho
include("header.inc.php");
//Inclui a página do menu lateral
include("sidebar.inc.php");
?>
<!-- CONTEÚDO SEMPRE DAQUI PRA BAIXO-->
<div class="span9 conteudo">
	<div class="page-header">
		<h3>RME</h3>
	</div>
	<div class="well">
		<form>
			Justificativa<br />
			<textarea rows="8" class="input-xxlarge"></textarea>
			<br /><br />
			<a href="./add-catalogo-de-itens.php" class="btn btn-medium" type="button>Inserir Item"><i class="icon-shopping-cart"></i> Inserir Item</a><br /><br />
			<table class="table table-condensed">
		    	<thead>
					<tr>
						<th>Código</th>
						<th>Item</th>
						<th>Quantidade</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>41452</td>
						<td>Estabilizador de Energia</td>
						<td><input type="text" value="5"/></td>
						<td>
							<a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a>
						</td>
					</tr>
					<tr>
						<td>41412</td>
						<td>Passagens Rodoviárias</td>
						<td><input type="text" value="5"/></td>
						<td>
							<a class="btn btn-small btn-danger" role="button"><i class="icon-remove icon-white"></i> Excluir</a>
						</td>
					</tr>
				</tbody>
			</table>

			
			<br /><br />
			<button class="btn btn-primary" type="button" onclick="javascript:alert('A RME foi cadastrada com êxito!'); window.open('./src/img/comunicacao_interna_print.pdf')">Cadastrar</button>
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