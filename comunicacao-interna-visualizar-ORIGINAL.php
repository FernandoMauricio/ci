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



<table width="100%" border="1" cellspacing="0" bordercolor="#000000">
  <tr> 
    <td width="16%" rowspan="2" valign="middle"> <div align="center"><img src="./src/img/logo_pequena.jpg" width="100" height="65"></div></td>
    <td width="54%" height="37" valign="middle">
<div align="center"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">FORMULÁRIO 
        DE DESPACHO</font></strong></div></td>
    <td width="30%"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>[Nº] 5000 de 05/01/2015</strong></font></div></td>
  </tr>
  <tr> 
    <td colspan="2"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><em>[ASSUNTO]</em> 
      Compensação de horas para o curso de DESENVOLVIMENTO JAVA</font></td>
  </tr>
</table>
  
<br>
<table width="100%" border="1" cellspacing="0" bordercolor="#666666">
  <tr valign="middle"> 
    <td width:"16%"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">DATA</font></strong></td>
    <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">DE</font></strong></td>
    <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">PARA</font></strong></td>
    <td><div align="center"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">DESPACHOS</font></strong></div>
      <div align="center"><strong></strong></div></td>
  </tr>
  <tr valign="middle"> 
    <td valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">05/01/2015</font></td>
    <td valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">GIC</font></td>
    <td valign="top"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">DAD</font> <br> <br> 
      <font size="1" face="Verdana, Arial, Helvetica, sans-serif"><em>Cópia Para:<br>
      GRH</em> 
      </font></td>
    <td width="51%">


Prezado Gerente da DAD, Senhor Neilon Márcio.

Considerando a participação do nosso colaborador Fernando Maurício, programador, em um dos programas (JOVENS TALENTOS) oferecidos pela FUCAPI para selecionar jovens com conhecimentos específicos em programação para participar do curso de JAVA, totalmente gratuito, cuja seleção ocorreu em 2(duas) etapas, sendo elas: Análise de currículo e prova com conhecimentos específicos. E conforme reportagem abaixo da aprovação dos selecionados nessas duas fases contando com a inclusão do nosso colaborador:

http://www.fucapi.br/educacao/2014/12/fucapi-divulga-lista-de-aprovados-do-programa-jovens-talentos-2015/

Venho por meio deste, solicitar à aprovação desta gerência a liberação de meio período do colaborador no período do curso que acontecerá conforme detalhamento abaixo:

Período das Aulas: 05 de Janeiro a 27 de Fevereiro de 2015.
Horário: 14h às 18h.
Local: FUCAPI, Bloco E, Laboratório E4.
C.H TOTAL DO CURSO: 160 horas
A sugestão desta gerência seria do colaborador compensar essas horas conforme detalhamento abaixo.
C.H TOTAL PARA COMPENSAR: 180 horas
DIAS PARA COMPENSAR: 40
HORAS POR DIA PARA COMPENSAR: 4:30hrs (13:00 às 17:30)
As férias do colaborador serão em MARÇO/2015 (30 dias de férias). Poderíamos considerar a compensação de 10 dias nessas férias totalizando carga horária compensada = 80 horas e para o restante da compensação, o colaborador poderá entrar 1 hora antes.



    </p> <table width="100%" border="0">
        <tr> 
          <td><font size="2" face="Arial, Helvetica, sans-serif"><em><strong>Anexos 
            - - - - - - - - - - - - - </strong></em></font></td>
        </tr>
      </table>

      <table width="100%" border="0">
        <tr> 
          <td><div align="right"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">Assinado 
              Eletronicamente por<br>
             RUI ALENCAR<br>09:27:03</font></div></td>
        </tr>
      </table></td>
  </tr>
  <tr valign="middle"> 
    <td colspan="4"><hr align="left" width="45%"></td>
  </tr>
</table>





</div>
<!-- FIM DO CONTEÚDO -->
</div>
</div>
<?php
//Inclui a página de rodapé
include("./src/inc/footer.inc.php");
?>