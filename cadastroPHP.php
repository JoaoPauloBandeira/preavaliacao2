<?php
    $host  = "localhost";
    $user  = "root";
    $pass  = "vertrigo";
    $banco  = "cadastro";
    $conexao  = mysql_connect($host, $user, $pass) or die(mysql_error());
    mysql_select_db($banco)or die(mysql_error());
?>

<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Cadastrando</title>
    <script>
        function cadastrosucesso(){
            setTimeout("window.location = 'index.html'");
        };
    </script>
</head>
<body>
<?php
    $nome       = $_POST['nome'];
    $sobrenome  = $_POST['sobrenome'];
    $posto      = $_POST['posto'];
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $senha      = $_POST['senha'];
    $sql        = mysql_query("INSERT INTO usuarios(nome,sobrenome,posto,username,email,senha)
    VALUES('$nome','$sobrenome','$posto','$username','$email','$senha')");
    echo "<script>cadastrosucesso()</script>";

?>
</body>
</html>