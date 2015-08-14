<?php
$host      = "localhost";
$user      = "root";
$pass      = "vertrigo";
$banco     = "cadastro";
$conexao   = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

session_start();
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
<meta charset="utf-8">
<html lang="pt-br">
<head>
	<title>Pré-Avaliação Web</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <script type="text/javascript" href="js/javascript.js"></script>
	<link rel="shortcut icon" href="imagens/icon.ico">
	<script>

function Mudarcor(n){
            document.getElementById(n).style.backgroundColor = 'black';
            document.getElementById(n).style.color           = 'white';
            switch (n){
                case 'botao1':
                    document.getElementById('botao2').style.backgroundColor = 'white';
                    document.getElementById('botao2').style.color           = 'black';
                    document.getElementById('botao3').style.backgroundColor = 'white';
                    document.getElementById('botao3').style.color           = 'black';
                    break;
                case 'botao2':
                    document.getElementById('botao3').style.backgroundColor = 'white';
                    document.getElementById('botao3').style.color           = 'black';
                    document.getElementById('botao1').style.backgroundColor = 'white';
                    document.getElementById('botao1').style.color           = 'black';
                    break;
                case 'botao3':
                    document.getElementById('botao2').style.backgroundColor = 'white';
                    document.getElementById('botao2').style.color           = 'black';
                    document.getElementById('botao1').style.backgroundColor = 'white';
                    document.getElementById('botao1').style.color           = 'black';

            }
        }
        function abri(){
             document.getElementById("background").style.display = 'block';
             document.getElementById("lightbox").style.display = 'block';
         }
        function fechar(){
            document.getElementById("background").style.display='none';
            document.getElementById("lightbox").style.display='none';
        }


        function comentneg(){
            document.getElementById('titlecoment').innerText    = "Comentário negativo";
        }
        function comentpos(){
            document.getElementById('titlecoment').innerText    = "Comentário positivo";
        }
        $(document).ready(function () {
    $("li").click(function () {
        $('li > ul').not($(this).children("ul")).hide();
        $(this).children("ul").toggle();
    });
});
        function abreLB(){
    document.getElementById("box").style.display='block';
    document.getElementById("box").style.transition='1';
    document.getElementById("box").style.transition='1';
    document.getElementById("lightBoxBG").style.display='block';
    document.getElementById("lightBoxBG").style.transition='1';
}
function fechaLB(){
    document.getElementById("box").style.display='none';
    document.getElementById("lightBoxBG").style.display='none';
}



function abreLBFrame(){
    document.getElementById("boxLBFrame").style.display='block';
    document.getElementById("boxLBFrame").style.transition='1';
    document.getElementById("boxLBFrame").style.transition='1';
    document.getElementById("bgLBFrame").style.display='block';
    document.getElementById("bgLBFrame").style.transition='1';
}
function fechaLBFrame(){
    document.getElementById("boxLBFrame").style.display='none';
    document.getElementById("bgLBFrame").style.display='none';
}



function lightboxNeg(){
    document.getElementById("lbTitle").innerText="Comentário Negativo";
}
function lightboxPos(){
    document.getElementById("lbTitle").innerHTML="Comentário Positivo";
}
	</script>
</head>
<body>
<!--Barra Top-->
<!--Lightbox Comentarios-->

    <div id="background" onclick="fechar()"></div>
    <div id="lightbox">
        <img id="fecharLBFrame" onclick="fechar()" src="imagens/fechar.png" style="cursor:pointer;float:right;position:relative;z-index:1004;">

        <h1 id="titlecoment" style="font-family: Trebuchet MS, sans-serif;"></h1>
        
        <hr class="hrlightbox">

        <textarea id="tarea" class="tarea"></textarea>
        <a href="#" onclick="enviar()" class="enviar">Salvar</a>
    </div>
<!--Fim Lightbox comentarios-->
<!--lightbox Avaliação passada--
<div id="bgLBFrame" onclick="fechaLBFrame()"></div>
<div id="boxLBFrame">
    <img id="fecharLBFrame" onclick="fechaLBFrame()" src="imagens/fechar.png" style="cursor:pointer;">
    <h2 style="color:black;font-size:30pt;width:500px;">Como eu me avaliaria</h2>
    <div class="quadrosJS">
        <div id="quadroLB">
            <form method="post" id="formTableFrame">   
                <table border="0" style="font-family: Trebuchet MS, sans-serif;font-size:17px;width:750px;height:300px;margin-left:auto;margin-right:auto;position:relative;top:10px;">

                        <tr style="background-color:#2c2c2d;color:white;height:30px;position:relative;right:110px">
                            <th class="quesito"> Quesito</th>
                            <th class="nota"> NT</th>
                            <th class="obs2"> Obs.</th>
                        </tr>

                            <tr style="background-color:#dedede;">
                                <td>União e coperação</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>

                            <tr style="background-color:#dedede;">
                                <td>Disciplina</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>

                            <tr style="background-color:#dedede;">
                                <td>Dedicação</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>

                            <tr style="background-color:#dedede;">
                                <td>Consciência Crítica</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>

                            <tr style="background-color:#dedede;">
                                <td>Bom domínio e agilidade nas rotinas</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>

                            <tr style="background-color:#dedede;">
                                <td>Boa organização nos processos</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>

                            <tr style="background-color:#dedede;">
                                <td>Boa criatividade</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>

                            <tr style="background-color:#dedede;">
                                <td>Boa interação com seus coordenadores</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>

                            <tr style="background-color:#dedede;">
                                <td>Iniciativa</td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>

                                
                            
                    </table>
            </form>
        </div>
    </div>
    <input type="submit" id="salvarLBFrame" value="Salvar" onclick="fechaLBFrame()" style="cursor:pointer;"><br>

</div>
<!--Fim lightbox Avaliação passada-->
	<div class="Barratop">
		<div class="Meiobarratop">
			<img src="imagens/logo-branca.png" alt="">
			<img src="imagens/perfil/default.jpg" alt="" class="ImageP">		
            <div class="Nameuser">
                <?php
                echo ucwords($dadosUsuarios['nome']." ".$dadosUsuarios['sobrenome']);
                ?>
            </div>
				<a href="#" class="Buttonconfig">
                    <ul class="Subbotton">
                        <li><a href="#"><img src="imagens/config.png" alt=""></a>
                            <ul>
                                <li><a href="#" class="A">Parent 1</a></li>
                                <li><a href="#" class="A">Parent 1</a></li>
                                <li><a href="#" class="A">Parent 1</a></li>
                            </ul>
                        </li>
                    </ul>
                </a>

				<a href="logaut.php" class="Buttonsair"><img src="imagens/sair.png"></a>

		</div>
	</div>
<!--Fim Barra Top-->

<!--Background-->
	<div class="Background">
	<!--Informações do Usuario no Background-->
							<select>
                                <option value="">1º Trimestre</option>
                                <option value="">2º Trimestre</option>
                                <option value="">3º Trimestre</option>
                                <option value="">4º Trimestre</option>
                            </select>
   	<!--Imagem de informações do usuário-->                        
		<div class="Imageinfo">
			 <img src="imagens/perfil/default.jpg" class="ImageG">
			 <div class="Infouser">
			 	<h2>
				<?php
                    echo ucwords($dadosUsuarios['nome']." ".$dadosUsuarios['sobrenome']);
                ?>
			 	</h2>
			 	<p>
				 	Posto:
					<?php
	                    echo ucwords($dadosUsuarios['posto']);
	                ?>
			 	</p>
			 		<hr>
			 	<p>
			 		E-mail:				
				 	<?php
	                    echo ucwords($dadosUsuarios['email']);
	                ?>
                </p>
			 	<a class="Imagecoment" style="font-size:12pt">X comentários</a>
			 </div>
			 <!--Iframe Tabela-->
			 				<iframe src="tabela.php" class="iframetabela" scrolling="no"> </iframe>
			 <!--Fim Iframe Tabela-->
		</div>
	<!--Fim Imagem de informações do usuário-->

	<!--Fim Informações do Usuario no Background-->	

	<!--Botões('Informações gerais','Como eu me avaliaria','Ava.Passada') Mais tabelas-->
		<div class="ButtonTabel">

			<div class="Botoes">
				<a href="aba1.php" target="iframe" class="Input1">
					<input type="button" value="Informações gerais" class="InputInfor" id="botao1" onclick="Mudarcor('botao1')">
				</a>
				<a href="aba2.php" target="iframe" class="Input2">
					<input type="button" value="Como eu me avaliaria" class="InputComo" id="botao2" onclick="Mudarcor('botao2')">
				</a>
				<a href="aba3.php" target="iframe" class="Input3">
					<input type="button" value="Avaliação passada" class="InputAva" id="botao3" onclick="Mudarcor('botao3')">
				</a>						
				<iframe src="aba1.php" frameborder="0" name="iframe" class="IframeThreetabela" scrolling="no"></iframe>
			</div>

		</div>
	<!--Tabela de comentarios-->

		<!--Comentario Negativo-->
		<div class="TabelacomentariosNEG">
	        <div class="Barrainfo">
                <span class="Pontos">Pontos Negativos</span>
                <br>
                <img onclick="abri(); comentneg(); " id="cn" src="imagens/lapis.png" class="Imagelapis">
            </div>
            <hr class="hr20">
            <br><br>
            <?php 
                $sql = "SELECT * FROM comentarios";
                $sqlcoment = mysql_query($sql);
                $linhas = mysql_num_rows($sqlcoment);
                if ($linhas > 0){
                while ($line =mysql_fetch_array($sqlcoment)) {
                	echo"<p style='width:200px;heigth:100px;margin-left:auto;margin-right:auto;'> ".$comentario = $line['comentario']."</p></br>";
                    echo "<hr class='hr20'>";
                }
            } 
             ?>		
		</div>	
		<!--Fim Comentario Negativo-->	

			<!--Comentario Postivo-->
			<div class="TabelacomentariosPOS">
				<div class="barrainfo">
                    <span class="Pontos">Pontos Positivos</span>
                    <br>
                    <img onclick="abri(); comentpos(); " id="cn" src="imagens/lapis.png" class="Imagelapis">
                </div>
                <hr class="hr20">
			</div>
			<!--Fim Comentario Postivo-->

	<!--Tabela de comentarios-->

	</div>		
<!--Fim Background-->

</body>
</html>