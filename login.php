<!DOCTYPE html>
<html>
  <head>
    <title>Gerenciador Administrativo (GA)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="src/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="src/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="src/css/geral.css" rel="stylesheet" media="screen">

    <style>
      body {
        background-image: url('./src/img/bg_login.png');
        background-color: #ccc;
        background-repeat: no-repeat;
        background-position: center 10px;
      }
    </style>

  </head>
  <body>
      <div style="width:600px; position:absolute; left:50%; top:50%; margin-left:-300px;margin-top:-150px;">
        <div style="position:relative;float:left;margin-top:30px;margin-right:40px;">
          <img src="./src/img/logo_login.png"/>
        </div>

        <div style="position:relative;float:left;width:2px;height:200px;background:#ccc;"></div>

        <div style="position:relative;float:left;margin-top:15px;margin-left:40px;">
          <h4>Gerenciador<br />Administrativo (GA)</h4>
          <form action="./index.php">
            Matrícula:<br />
            <input type="text"/><br />
            Senha:<br />
            <input type="password"/><br />
            <button class="btn pull-right">Entrar</button>
          </form>
        </div>

        <div style="border:1px #ccc solid;width:360px;padding:10px;background:#fff;position:relative;float:right;margin-top:30px;font-size:12px;">
          *Para obter matrícula e senha de acesso, favor solicitar ao NTI (Núcleo de Tecnologia da Informação
        </div>
      </div>


  <!-- POR ENQUANTO NÃO TEM FOOTER, TÁ LIGADO? -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="src/js/bootstrap.min.js"></script>
  </body>
</html>