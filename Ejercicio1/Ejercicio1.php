<?php 
  //Verifica que ningun valor este vacio
  if(!empty($_POST['num1']) && !empty($_POST['num2']) && !empty($_POST['num3']) && !empty($_POST['num4']) && !empty($_POST['num5']) && !empty($_POST['num6']) && !empty($_POST['num7']) && !empty($_POST['num8']) && !empty($_POST['num9']) && !empty($_POST['num10']) && !empty($_POST['num11']) && !empty($_POST['num12']) ){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <title>Conversor a Binario</title>
</head>
<body>
<div class="card text-center" style="width: 18rem; margin-left: 38%; margin-top: 5%;">
        <div class="card-header">
            Listado de Números
        </div>
        <div class="card-body">
                <div class="mb-3">
                  <?php
                  //Asignacion de variables
                  $cont = 0;
                  $pos = 0;
                  $porcentaje = 100 / 12;
                  $num1 = (int)$_POST['num1'];
                  $num2 = (int)$_POST['num2'];
                  $num3 = (int)$_POST['num3'];
                  $num4 = (int)$_POST['num4'];
                  $num5 = (int)$_POST['num5'];
                  $num6 = (int)$_POST['num6'];
                  $num7 = (int)$_POST['num7'];
                  $num8 = (int)$_POST['num8'];
                  $num9 = (int)$_POST['num9'];
                  $num10 = (int)$_POST['num10'];
                  $num11 = (int)$_POST['num11'];
                  $num12 = (int)$_POST['num12'];
                  $numeros = array($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10,$num11,$num12);
                  $numdes = array();
                  $array_count = count($numeros);
                  //comprueba los numeros pares
                  for($i = 0; $i < $array_count ; $i++){
                    if($numeros[$i] % 2 == 0){
                      $cont++;
                    }
                    //comprueba los numeros positivos
                    if($numeros[$i] > 0){
                      $numdes[$pos] = $numeros[$i];
                      $pos++;
                    }
                  }
                  echo '<div class="alert alert-primary" role="alert">Porcentaje de números pares: '.round($cont * $porcentaje, 2).' %</div>';
                  echo '<div class="alert alert-primary" role="alert">Números positivos ordenados de forma descendente</div>';
                  //Ordena el arreglo de forma descendente
                  rsort($numdes);
                  foreach($numdes as $k=>$v){
                    echo '<p>'.$v.'</p>';
                  }
                  
                  
                  ?>
                </div>
                <a class="btn btn-primary" href="Index.html" role="button">Ir al Menú</a>
        </div>
    </div>
</body>
</html>

<?php 
}else{
  echo'<script language="javascript"> alert("Error. Uno o más valores se enviaron vacios"); window.location.href="Index.html";</script>';
}
?>