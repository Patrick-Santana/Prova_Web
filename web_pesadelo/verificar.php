<?php
session_start();

$senha = $_POST['senha'] ?? '' ;
$email = $_POST['email'] ?? '' ;
$cpf = $_POST['cpf'] ?? '';


 
 $dados = file('Usuarios.csv');
 for($i = 0; $i < sizeof($dados); $i++) {
 $dados[$i] = explode(",",TRIM($dados[$i]));
	if ($senha ==  $dados[$i][3] && $email ==  $dados[$i][2]){
		    $_SESSION['autorizado'] = true;
		    $_SESSION['cpf'] = $dados[$i][1];
		   // salva na sessão o CPF do indivíduo
break;
	}


 }
 header('location: index.php');
 
 ?>


/*
/*
for() {
	$partes explode(',', $linha)
	if ($senha igual $partes[3] && $email igual $partes[2])
}

*/

/*
if ($senha == 'miguel' && $email =='gabrielogabriel10@gmail.com') {
    $_SESSION['autorizado'] = true;
}

if ($senha == 'gabriel' && $email =='mgbs@discente.ifpe.edu.br') {
    $_SESSION['autorizado'] = true;
}
*/
*/
header('location: index.php');
?>