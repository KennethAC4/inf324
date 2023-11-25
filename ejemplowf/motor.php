<?php    
    $flujo=$_GET["flujo"];
    $proceso=$_GET["proceso"];
    $procesosiguiente=$_GET["procesosiguiente"];
    //$link=mysqli_connect("localhost","inf324","123456","workflow");
    //$resultado=mysqli_query($link, "select * from flujo where flujo='$flujo' and proceso='$proceso'");
    //$fila=mysqli_fetch_array($resultado);
    header("Location: http://localhost:8080/ejemplowf/pantalla.php?flujo=$flujo&proceso=$procesosiguiente");
?>