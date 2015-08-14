<?php
$host = "localhost";
$user = "root";
$pass = "vertrigo";
$banco = "cadastro";
$conexao = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>


<html>
<head>
    <link rel="shortcut icon" href="imagens/icon.ico" type="image/x-icon" />
    <meta charset="UTF-8">
    <title>Login - Pré Avaliação Web</title>
    <script src="js/javascript.js"></script>
    <script>
        

function loginsuccessfully(){
    setTimeout("window.location = 'preavaliacao.php'", 1000);
}
function loginfailed(){
    setTimeout("window.location = 'index.html'",0);

}

    </script>
<body>

</body>
</html>
<?php
$username = $_POST['username'];
$senha = $_POST['senha'];
$sql = mysql_query("SELECT * FROM usuarios WHERE username = '$username' AND senha ='$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);

if($row > 0){
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['senha'] = $_POST['senha'];
    $_SESSION['id'] = $_POST['senha'];
    header('location: preavalicao.php');
    echo"<script>loginsuccessfully()</script>";

}else{
    header('location: index.html');
    echo"<script>loginfailed()</script>";
};
    
?>