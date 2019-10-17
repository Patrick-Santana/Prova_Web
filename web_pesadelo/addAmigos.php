<?php
session_start();
//$cpf = sessão...
//$cpf = $_SESSION[1] ?? false;
 $dado = $_POST['nome'] . ',' . $_POST['cidade'] . ',' . $_POST['numero'] . ',' . $_POST['email'] .  ',' . $_SESSION['cpf'] . "\n";


    $handle = fopen('amigos.csv', 'a');
    fwrite($handle, $dado); 
    header("location:index.php");
?>