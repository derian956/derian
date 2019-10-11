
<?php

$mysqli = mysqli_connect("localhost","root","","imc");
if($mysqli==false){
    echo "hubo un problema al conectarse a maria DB";
    die();
}
if ( isset($_POST["peso"]) && ( isset($_POST["altura"])) && ($_POST["peso"]) && ($_POST["altura"])) {

    $peso= $_POST["peso"];
    $altura= $_POST["altura"];
    $imc= $peso /($altura*$altura);
    $imc = round($imc,1);

    if($imc<18.5){
        $resultado = "usted presenta peso bajo";
        $color ="orange";
    }

    if($imc >=18.5 && $imc <24.9)
    $resultado = "Normal";
    $color ="green";


    if($imc >=24.9 && $imc <29.9){
        $resultado = "peso superior al normal";
        $color ="yellow";
    }

    if($imc>30){
        $resultado = " Usted esta en estado de obesidad";
        $color ="red";
    }
    
}

$mysqli->query("INSERT INTO `datos` ( `datos_altura`, `datos_peso`, `datos_imc`) VALUES ('".$altura."', '".$peso."', '".$imc."');");


?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Scrolling Nav - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">calculadora imc</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          
          
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>bienvenidos a calculadora imc</h1>
      
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          
          

          <div class="card mb-4">
            <img class="card-img-top" src="Nueva carpeta/adecco-salud-bienestar.jpg" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">calculadora imc</h2>
              <div class="row">
                <div class="col-lg-6">
              <form action="index.php" method="POST">

                Peso (kg) <input type="number" step=".01" name="peso" value="" placeholder="ingrese tu peso en kilogramos" required><br><br>
                Altura(cm)  <input  type="number"  step=".01" name="altura" value="" placeholder="ingresa tu altura en metros" required><br><br>
                <input type="submit"  s name="" value="calcular">
                </form><br>
              </div>
              <div class="col-lg-6">
              <?php if (isset($imc)) { ?>
              <?php echo "Su indice de masa corporal es --->".$imc; ?>
             <br>
             <div style="color:<?php echo $color  ?>">Resultado: <?= $resultado;  ?></div>
             <?php }  ?>

             </body>
             </div>

             <div class="card-footer text-muted">
              consulta mas informacion
              <a href="https://spinningcentergym.com/?gclid=EAIaIQobChMI3NzZnsO35AIVEZ-fCh1F2wyIEAAYASAAEgLOzPD_BwE">Start Bootstrap</a>



        </div>
      </div>
    </div>
  </section>

  

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
