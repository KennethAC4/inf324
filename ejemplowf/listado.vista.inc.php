<?php  
    $resultadof=mysqli_query($link, "select * from academico.alumnos where ci='23'");
    $filaf=mysqli_fetch_array($resultadof);

    $ci=$filaf["ci"];
    $nombre=$filaf["nombre"];
?>
<input type="text" name = "ci" value = "<?php  echo $ci;?>"/>
<input type="text" name = "nombre" value = "<?php  echo $nombre;?>"/>