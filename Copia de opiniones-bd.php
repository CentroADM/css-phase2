<?php
require_once('cnc.php');
require_once('util.php');


$query = 'SELECT * FROM usuario;';
?>

<html>
<head>
  <meta charset="UTF-8">
</head>
  <body>
    <header>
      <LINK href="" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="index.html">
        <link rel="stylesheet" href="estilocomentarios.css">
    </header>
<table width="100%" cellspacing="0" id="datos">
      <?= tablaUsuarios($query); ?> 
</table>
  </body>
</html>
