<?php
session_start();

$senha = $_POST['senha'] ?? '' ;
$email = $_POST['email'] ?? '' ;


 
 $dados = file('adm.csv');
 for($i = 0; $i < sizeof($dados); $i++) {
 $dados[$i] = explode(",",TRIM($dados[$i]));
	if ($senha ==  $dados[$i][1] && $email ==  $dados[$i][0]){
		    $_SESSION['autorizado'] = true;
		    $_SESSION['cpf'] = $dados[$i][1];
		   // salva na sessão o CPF do indivíduo
break;
	}


 }
 header('location: cadastroAtributos.php');
 
 ?>


