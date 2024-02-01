<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST) && isset($_POST["vl1"]) && isset($_POST["vl2"]))
    {
        if(empty($_POST["vl1"]) || empty($_POST["vl2"] || empty($_POST["vl1"]) && empty($_POST["vl2"]))){
            if(!isset($_SESSION)) session_start();
            $_SESSION["erros"][] =  "Voce precisa inserir mais de um valor";
            header("Location: index.php");
            return;
        }
        $vl1 = $_POST["vl1"];
        $vl2 = $_POST["vl2"];
        if(!is_numeric($vl1) && !is_numeric($vl2) || $vl1 < 0 || $vl2 < 0){
            if(!isset($_SESSION)) session_start();
            $_SESSION["erros"][] =  "Os valores ou seus tipos estao incoerentes!";
            header("Location: index.php");
        }
        try {
            $vl1 /= 1;
            $vl2 /= 1;
        } catch (\Throwable $th) {
            header("Location: index.php");
            if(!isset($_SESSION)) session_start();
            $_SESSION["erros"][] =  "Os numeros precisam ser numeros";
            return;
        }
         // caso ocorra bem
            echo "$vl1 X $vl2 = ".($vl1*$vl2);
            echo "<a href='index.php'>Voltar</a>";
    }else {
        header("Location: index.php");
        return;
    }
    
}else{
    die("Houve um erro <a href=index.php>Voltar? </a>");
} 

?>