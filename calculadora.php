<?php

$mysqli = mysqli_connect("localhost","root","","imc");
if($mysqli==false){
    echo "hubo un problema al conectarse a maria DB";
    die();
}

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
$mysqli->query("INSERT INTO `datos` ( `datos_altura`, `datos_peso`, `datos_imc`) VALUES ('".$altura."', '".$peso."', '".$imc."');");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora iMc</title>
</head>
<body>
    <h2>Calcula tu indice de masa corporal</h2>
    <br>

<form action="calculadora.php" method="POST">

Peso (kg) <input type="number" step=".01" name="peso" value="" placeholder="ingrese tu peso en kilogramos" required><br><br>
Altura(cm)  <input  type="number"  step=".01" name="altura" value="" placeholder="ingresa tu altura en metros" required><br><br>
<input type="submit"  s name="" value="calcular">
</form><br>




<?php if (isset($imc)) { ?>
    <?php echo "Su indice de masa corporal es --->".$imc; ?>
<br>
<div style="color:<?php echo $color  ?>">Resultado: <?= $resultado;  ?></div>
<?php }  ?>

</body>
</html>