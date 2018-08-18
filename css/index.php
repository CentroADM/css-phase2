<html>
  <body>
    <header>
    	<LINK href="estilo3.css" rel="stylesheet" type="text/css">
      <!--
      Estructura básica en HTML: dentro de nuestro elemento “body” crearemos un elemento “header”, el cual será una barra de navegación superior. Dentro colocaremos el elemento “nav” que contendrá el menú desplegable en forma de lista, esta lista “ul” tendrá como id “menu”. Como items de la lista tendremos “Inicio”, “Cursos”, “Tutoriales” y “Contacto”. El item “Cursos” contendrá una lista anidada con los items “Frontend”, “Backend” y “Mobile”, cada item contendrá su respectivo enlace:
      -->
      <nav>
        <ul id="menu">
          <li><a href="">Inicio</a></li>
          <li><a href="">Cursos</a>
            <ul>
              <li><a href="">Frontend</a></li>
              <li><a href="">Backend</a></li>
              <li><a href="">Mobile</a></li>
            </ul>  
          </li>
          <li><a href="">Tutoriales</a></li>
          <li><a href="">Contacto</a></li>
        </ul>
      </nav>
    </header>
  </body>
</html>