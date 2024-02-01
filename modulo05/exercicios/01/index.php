<?php 
if(!isset($_SESSION)) session_start();

if(isset($_SESSION["erros"])){
    foreach($_SESSION["erros"] as $erro){
        echo "<script>alert('".$erro."')</script>";
    }
    unset($_SESSION["erros"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tratamento.php" method="post">
        <label for="">Digite um numero : </label>
        <br>
        <input type="number" name="vl1" id="">
        <br><br>
        <label for="">Digite outro numero : </label>
        <br>
        <input type="number" name="vl2" id="">
        <br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>