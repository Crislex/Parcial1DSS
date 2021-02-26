<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Calcular Areas</title>
</head>

<body>
<div class="card text-center" style="width: 18rem; margin-left: 38%; margin-top: 5%;">
        <div class="card-header">
            Calcular el área de un cubo
        </div>
        <div class="card-body">
            <form method="POST" action="cubo.php">
                <div class="mb-3">
                    <label class="form-label">Ingrese el valor de la arista (mm):</label>
                    <input type="number" class="form-control" name="num" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Calcular" />
            </form>
        </div>
    </div>
</body>
</br>
<?php 
    if(isset($_POST['num'])){
        $a = $_POST['num'];
        $area = 0;
        $area = 6 * pow($a, 2);
        echo'<script language="javascript"> alert("El área del cubo es: '.$area.' mm"); window.location.href="Ejercicio2.php";</script>';
    }
?>

</html>