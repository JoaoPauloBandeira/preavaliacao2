<?php
$host      = "localhost";
$user      = "root";
$pass      = "vertrigo";
$banco     = "cadastro";
$conexao   = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<?php
session_start();
if(!isset($_SESSION['email']) and !isset($_SESSION['senha'])){
    header("location: ../index.html");
}
?>
<?php
$sql       = "SELECT * FROM usuarios";
$query     = mysql_query($sql);
while($sql = mysql_fetch_array($query)){
$id        = $sql ["id"];
$nome      = $sql["nome"];
$sobrenome = $sql["sobrenome"];
$posto     = $sql["posto"];
$email     = $sql["email"];
}
?>
<?php
function logaut(){
    session_start();
    session_destroy();

}

if(!isset($_SESSION['username']) and !isset($_SESSION['senha'])){
    header("location: index.html");
}
$db = new mysqli($host, $user, $pass, $banco);
$sql       = "SELECT * FROM usuarios WHERE username = '$_SESSION[username]'"; 
$resultado = $db->query($sql);
$dadosUsuarios = array();

while($row = $resultado->fetch_array()) {
    $dadosUsuarios = $row;

}
?>
<html>
<head>
    <link  rel="stylesheet" href="css/style.css">
</head>
<body>
        <div class="boxaba1">
            <div class="info"><a style="float:left; color: white;margin-left:10px;top:10px;">Informações gerais</a></div>
            <p><a> Posto:</a></p>
            <p><a> Entrou no projeto: DIA/MÊS/ANO</a></p>
            <p><a> E-mail:<?php echo $dadosUsuarios['email'];?></a></p>
            <p><a> Telefone:(xx)xxxx-xxxx</a></p>
            <p><a> Horas trabalhadas: --- </a></p>
            <p><a> Folgas:0/0/0</a></p>
            <p><a> Faltas:0/0/0</a></p>
            <p><a> Vídeos/Livros:0/0/0</a></p>
        </div>

</body>
</html>