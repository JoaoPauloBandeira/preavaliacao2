<?php 

if (isset($_POST['logar'])) { 


session_start(); 

$username = isset($_POST["username"])? md5(trim($_POST["username"])): FALSE; 

$senha = isset($_POST["senha"])? md5(trim($_POST["senha"])): FALSE; 

if(!$username || !$senha) 
{ 
//$Mensagem_erro=""; 
//header("location: username.php"); 
echo"você deve digitar sua senha e username!"; 
//$Mensagem_erro= "você deve digitar sua senha e username!"; 
exit; 

} 
$sql = "SELECT * FROM usuarios WHERE username = '".$_POST["username"]."'"; 

$result_id= @mysql_query($sql) or die("erro no banco de dados"); 

$total = @mysql_num_rows($result_id); 


if ($total){ 

$dados= @mysql_fetch_array($result_id); 

if (!strcmp($_POST["senha"],$dados["senha"])) 
{ 
$_SESSION["id_usuario"]= $dados["id"]; 
$_SESSION["nome_username"]= stripslashes($dados["username"]); 
$_SESSION["nome_completo"]= stripslashes($dados["nome_completo"]); 

header("location: index.html"); 


exit; 
} 
else 
{ 
$senha = "SENHA INVÁLIDA"; 
} 
} 
else 
{ 
$username = "username INVÁLIDO"; 
} 

} 

?> 


<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>:: SISTEMA DE NOTICIAS ::</title> 
</head> 
<body background="imagens/tela username.jpg"> 
<tr align="center" bottom="middle"><td> 
<table align="center" width="435" border=0> 
<tr><td width="60%" height="304" background="imagens/quadro branco cópia.png" align="center"> 

<FORM action="" method="POST" > 
<img src="imagens/Ticel.jpg" width="100" height="50"><br> 
Sistema de Relatórios Online. <BR><br> 
username: <img src="imagens/usuario.jpg" width="20" height="20"> <input type="text" name="username"> <br> 
<?php if(isset($username) && $username != '') { echo $username; } ?><br> 
Senha:<img src="imagens/senha.jpg" width="20" height="20"> <input type="password" name="senha"> <br> 
<?php if(isset($senha) && $senha != '') { echo $senha; } ?><br> 
<input type="submit" name="logar" value=" OK "><br> 
<a href="cadastronovo.php">Cadastro</a> 

</FORM> 
</td></tr> 

</table> 
</table> 




</td> 

</body> 
</html> 
