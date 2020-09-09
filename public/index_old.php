<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <title>Ingreso SUNARP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <meta name="theme-color" content="#fafafa">
  <style type="text/css" media="screen">
    body{
        background-color: #2ecc71;
    }
    .caja{
        margin: 100px auto;
        background-color: rgb(243, 220, 220);
        padding: 20px;
        width: 50%;
        box-shadow: 2px 2px 5px #000;
    }
    .texto{
        width: 90%;
        padding: 20px;
        border: none;
        background-color:  #d3d3d3;
        margin-top: 10px;
        font-size: 16px;
    }
    .boton{
        margin-top: 10px;
        width: 100%;
        padding: 20px;
        background-color: #2ecc71;
        border: none;
        text-transform: uppercase;
        box-shadow: 2px 2px 5px #000;
    }
    .msg{
        color:dimgrey;
        text-align: center;
    }
    h2, h3, p{
        text-align: center;
    }
</style>
</head>

<body>

  <!-- Add your site or application content here -->
    <div class="caja">
        <h2>Sistema de Verificación de Escrituras Públicas</h2>
        <h3>Para ser compartido con SUNARP</h3>
        <p>Archivo Regional de Puno</p>
        <form action="">
            <input type="text" class="texto" name="usuario" placeholder="Num de DNI">
            <input type="password" class="texto" name="passwd" placeholder="Contraseña">
            <button class="boton">Ingresar</button>
            <p class="msg">El usuario y contraseña es su DNI</p>
        </form>
        <a href="#">Ingresar directo</a>
    </div>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  
</body>

</html>
