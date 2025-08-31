<!DOCTYPE HTML>
<html>
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="/css/styles.css?v=<?php echo time(); ?>" />
    <!--<script src="/js/functions.js?v=<?php echo time(); ?>"></script>  -->
    <link rel="shortcut icon" href="logo.png" />
</head>

<body>

<div class="form3">
<form method="POST" action="facturas/facturas.php">

<h2>Ingresar Datos</h2>
  <br>
  <br/>
  <input class="edittext" name="nombre" required placeholder="   Nombre">
  <br>
  <br>
  <input class="edittext" name="monto" required placeholder="   Monto">
  <br>
  <br>
  <!--input class="edittext" name="montoletra" required placeholder="   Monto en letra"-->

  <input  class="edittext" Type="date" min="2019-11-01" name="fecha" required >
  <br>
  <br>
  <select name="proyecto" class= "edittext1" >
  <option disabled selected>Proyecto</option>
  <option value="Atabey Residences">Atabey Residences I</option>
  <option value="Atabey II">Atabey II</option>
  <option value="Panorama Lake">Panorama Lake</option>
</select>
<br>
<br>
  <input class="edittext" name="unidad" required placeholder="   Unidad">
<br>
<br>
<select name="usuario" class= "edittext1" >
  <option disabled selected>Usuario</option>
  <option value="ana">Ana castro</option>
  <option value="adolfina">Adolfina Duran</option>
</select>
  
  <br>
  <br>
  <br/>
  <button class="btn" type="submit">Generar</button>

</form>
</div>

<br>
<br>
<br>
<br>

<footer class="footer">
      
    <p class="copy">&copy; Hendrick Garcia   -   Todos los derechos reservados.</p>
</footer>

</body>

</html>
