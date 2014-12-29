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
      <li role="presentation" class="active"><a href="#">Comunicação Interna</a></li>
      <li role="presentation"><a href="comunicacao-interna-visualizar.php?id=">Visualizar CI</a></li>
      <li role="presentation"><a href="comunicacao-interna-despacho-pendente.php?id=">Despachos Pendentes</a></li>
    </ul>

	<div class="page-header">
		<h3>Criar Comunicação Interna</h3>
	</div>
			<label for="disabledTextInput">Código CI:</label><br /><br />
			<label class="radio-inline">
			  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Não Confidencial
			</label>
			<label class="radio-inline">
			  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Confidencial
			</label><br /><br />

			<label for="disabledTextInput">Enviar para:</label>
			<select class="form-control">
			  <option>SEDE ADMINISTRATIVA - GIC</option>
			  <option>SEDE ADMINISTRATIVA - DAD</option>
			  <option>SEDE ADMINISTRATIVA - DPM</option>
			  <option>SEDE ADMINISTRATIVA - GMT</option>
			  <option>SEDE ADMINISTRATIVA - GMA</option>
			  <option>SEDE ADMINISTRATIVA - GIC</option>
			  <option>SEDE ADMINISTRATIVA - DAD</option>
			  <option>SEDE ADMINISTRATIVA - DPM</option>
			  <option>SEDE ADMINISTRATIVA - GMT</option>
			  <option>SEDE ADMINISTRATIVA - GMA</option>
			</select><br />
			<label for="disabledTextInput">Cópia para:</label>
			<select multiple class="form-control">
			  <option>SEDE ADMINISTRATIVA - GIC</option>
			  <option>SEDE ADMINISTRATIVA - DAD</option>
			  <option>SEDE ADMINISTRATIVA - DPM</option>
			  <option>SEDE ADMINISTRATIVA - GMT</option>
			  <option>SEDE ADMINISTRATIVA - GMA</option>
			  <option>SEDE ADMINISTRATIVA - GIC</option>
			  <option>SEDE ADMINISTRATIVA - DAD</option>
			  <option>SEDE ADMINISTRATIVA - DPM</option>
			  <option>SEDE ADMINISTRATIVA - GMT</option>
			  <option>SEDE ADMINISTRATIVA - GMA</option>
			</select><br />

			<form class="form-horizontal">
			  <label for="disabledTextInput">Assunto:</label>
			  <div class="form-group form-group-lg">
			       <div class="col-sm-10">
			      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Assunto">
			    </div>
			  </div>
			  <label for="disabledTextInput">Despacho:</label>
			  <textarea class="form-control" rows="8" placeholder="Digite aqui seu despacho"></textarea><br />
			</form>

			  <div class="form-group">
			    <label for="exampleInputFile">Anexar Arquivo:</label>
			    <input type="file" id="exampleInputFile">
			    <p class="help-block">Envie formatos RAR</p>
			  </div>

			<label for="disabledTextInput">Status:</label>
			<select class="form-control">
			  <option>Em elaboração</option>
			  <option>Para aprovação</option>
			  <option>Em cirulação</option>
			  <option>Cancelado</option>
			  <option>Encerrado</option>
			</select>
			<br /><br />

			<p>
			  <button type="button" class="btn btn-default btn-lg">Limpar</button>
			  <button type="button" class="btn btn-primary btn-lg">Criar Despacho</button>
		    </p>
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