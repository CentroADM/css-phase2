<html>
  <body>
    <header>
      <LINK href="" rel="stylesheet" type="text/css">
    </header>
<!--
    Como te darás cuenta es una estructura simple he usado un fieldset como contenedor, legend para mostrar un titulo y ademas li para todos los elementos del formulario, debes asegurarte que el fieldset tenga como id “form” para poder aplicar el estilo.
  -->
<form name="frm" method="post" action="envio.php">
<fieldset id="form">
<legend>Mi formulario</legend>
<ol>
    <li><label>Nombre: </label><input type="text" name="fname" size="25" /></li>
    <li><label>E-mail: </label><input type="text" name="femail" size="25" /></li>
    <li><label>Dirección: </label><input type="text" name="fdireccion" size="25" /></li>    
</ul>
    <p align="center"><input type="submit" name="submit" class="btn" value="Enviar" /></p>
</fieldset>
</form>
  </body>
</html>