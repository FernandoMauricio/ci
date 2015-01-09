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

<br>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Visualizar Comunicação Interna</h3>
  </div>
  <div class="panel-body">

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
      Seja Bem Vindo ao Gerenciador de Documentacao Eletronica</font></td>
  </tr>
</table>
  
<br>
<table width="100%" border="1" cellspacing="0" bordercolor="#666666">
  <tr valign="middle"> 
    <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">DATA</font></strong></td>
    <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">DE</font></strong></td>
    <td><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">PARA</font></strong></td>
    <td><div align="center"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">DESPACHOS</font></strong></div>
      <div align="center"><strong></strong></div></td>
  </tr>
  <tr valign="middle"> 
    <td valign="top"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">05/01/15</font></td>
    <td valign="top"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">GIC</font></td>
    <td valign="top"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">DAD</font> <br> <br> 
      <font size="1" face="Verdana, Arial, Helvetica, sans-serif"><em>Cópia Para:<br>
      GRH</em> 
      </font></td>
    <td width="51%">


Prezados Gerentes
É com prazer que informamos o mais novo Portal de Documentação do Senac-Am que tem como objetivo oferecer novos recursos para envio e recebimento de documentos internos do nosso DR, além de atualizar as funcionalidades existentes.
Inicialmente foi disponibilizado apenas o módulo de Documentação Eletrônica (antiga Comunicação Interna do Gênesis), com proposta de tornar os despachos de documentos ainda mais eletrônicos.
Para 2011 pretendemos disponibilizar os demais recursos que ora estão em desenvolvimento como: Requisição de Viagem, Prestação de Contas de Viagem e Fundo Rotativo, Requisição de Reprografia integrado ao Star-Team, além de migrar as funcionalidades que hoje praticamos no Gênesis.
O objetivo deste guia é orientar quanto ao uso do Modulo de Documentação Eletrônica nesta nova versão e que sirva de auxilio para qualquer ação dentro da aplicação.
Bom trabalho a todos e bom uso.


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