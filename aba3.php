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
    <style type="text/css">
      table
      {
        border-collapse: collapse;
        border:1px solid black;
        font-family:Trebuchet MS, sans-serif;
        font-size:15px;
        width:610px;
        height:250px;
        left: 25px;
        position:relative;
        top:40px;
        text-aling:center;
        
        }
      table, td, th
      {
        border: 2px solid black;
      }
      .greenobs{
      	background-color:#bcefb9;
      	font-family:Trebuchet MS, sans-serif;
      	font-size:11pt;
      	text-align: center;
      }
      .numeros{
      	text-align: center;
      	font-family: Trebuchet MS, sans-serif;
      	font-size: 11pt;

      }
      .resulttabel{
        font-family:Trebuchet MS, sans-serif;
        font-size:15px;
        width:187px;
        height:20px;
        left: 449px;
        position:relative;
        top:38px;
        color: green;
      }
    </style>
</head>
<body>
					<table>

						<tr style="background-color:#000075;color:white;">
							<th colspan="5" style="text-aling:center"><?php echo $dadosUsuarios['nome'];?>- PRODUTOR</th>
						</tr>

						<tr style="background-color:#ebef8c;color:black;">
								<th style="position:relative;left:30px;">ITENS</th>
								<th>PA</th>
								<th>AB</th>
								<th>PQ</th>
								<th class="greenobs">Obs.</th>
						</tr>
							<tr>
								<td>União e coperação</td>
								<td class="numeros">32</td>
								<td class="numeros">7</td>
								<td class="numeros">2178</td>
								<td class="greenobs">68,06</td>
							</tr>

							<tr>
								<td>Disciplina</td>
								<td class="numeros">34</td>
								<td class="numeros">5</td>
								<td class="numeros">2466</td>
								<td class="greenobs">72,53</td>
							</tr>

							<tr>
								<td>Dedicação</td>
								<td class="numeros">32</td>
								<td class="numeros">5</td>
								<td class="numeros">2409</td>
								<td class="greenobs">72,28</td>
							</tr>

							<tr>
								<td>Consciência Crítica</td>
								<td class="numeros">29</td>
								<td class="numeros">10</td>
								<td class="numeros">1824</td>
								<td class="greenobs">62,9</td>
							</tr>

							<tr>
								<td>Bom domínio e agilidade nas rotinas</td>
								<td class="numeros">34</td>
								<td class="numeros">5</td>
								<td class="numeros">2369</td>
								<td class="greenobs">71</td>
							</tr>

							<tr>
								<td>Boa organização nos processos</td>
								<td class="numeros">34</td>
								<td class="numeros">5</td>
								<td class="numeros">2369</td>
								<td class="greenobs">69,68</td>
							</tr>

							<tr>
								<td>Boa criatividade</td>
								<td class="numeros">27</td>
								<td class="numeros">12</td>
								<td class="numeros">1805</td>
								<td class="greenobs">66,85</td>
							</tr>

							<tr>
								<td>Boa interação com seus coordenadores</td>
								<td class="numeros">34</td>
								<td class="numeros">5</td>
								<td class="numeros">2369</td>
								<td class="greenobs">74,35</td>
							</tr>

							<tr>
								<td>Iniciativa</td>
								<td class="numeros">22</td>
								<td class="numeros">17</td>
								<td class="numeros">1440</td>
								<td class="greenobs">65,45</td>
							</tr>
								<table class="resulttabel">
									<tr>
										<td style="position:relative;left:75px">69,9</td>
									</tr>

								</table>
					</table>
</body>
</html>