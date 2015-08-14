<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Alterar password</h1>
	  <?php
    $host  = "localhost";
    $user  = "root";
    $pass  = "vertrigo";
    $banco  = "cadastro";
    $conexao  = mysql_connect($host, $user, $pass) or die(mysql_error());
    mysql_select_db($banco)or die(mysql_error());
?>
<?php
CREATE TABLE recuperacao (
  utilizador  VARCHAR(255) NOT NULL,
  confirmacao VARCHAR(40) NOT NULL,
  KEY(utilizador, confirmacao)
)
  if( empty($_GET['utilizador']) || empty($_GET['confirmacao']) )
    die('<p>Não é possível alterar a password: dados em falta</p>');
 
  mysql_connect('localhost', 'root', '');  // ligar à base de dados
  mysql_select_db($banco);  // escolher a base de dados pretendida
 
  $user = mysql_real_escape_string($_GET['utilizador']);
  $hash = mysql_real_escape_string($_GET['confirmacao']);
 
  $q = mysql_query("SELECT COUNT(*) FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
 
  if( mysql_result($q, 0, 0) == "1" ){
    // os dados estão corretos: eliminar o pedido e permitir alterar a password
    mysql_query("DELETE FROM recuperacao WHERE utilizador = '$user' AND confirmacao = '$hash'");
 
    echo 'Sucesso! (Mostrar formulário de alteração de password aqui)';   
 
  } else {
    echo '<p>Não é possível alterar a password: dados incorretos</p>';
 
  }
 
?>
</body>
</html>