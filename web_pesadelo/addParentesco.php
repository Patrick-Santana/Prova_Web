<?php

 $dado = $_POST['parentesco'] . "\n";

    $handle = fopen('parentesco.csv', 'a');
    fwrite($handle, $dado); 
    header("location:cadastroAtributos.php");
?>