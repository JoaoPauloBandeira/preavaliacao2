<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		#tabela{
			
			width: 190px;
			height: 460.2px;
			overflow:hidden;
			float: right;
			position:relative;
			top:50px;
			left:-15px;	
			text-align:center;

		}
		.backgroundtabel{
			background-image:url("imagens/preav.png");
			width: 230px;
			height: 630px;
			overflow:hidden;
			float: right;
			position:relative;
			top:0px;
			border-radius:5px;
		}

		#up{
			cursor:pointer;
			position:relative;
			top:76px;
			right:30px;
			float:right;	
			z-index:1001;
		}
		#down{
			cursor:pointer;
			position:relative;
			bottom:95px;
			right:30px;
			float:right;
			z-index:1001;

		}

		.fotosp
		{
			width: 70px;
			height: 70px;
			margin-bottom:20px;
			margin-left:-2px;
			padding-top:10px;
			padding-bottom:10px;
			padding-left:10px;
			padding-right:10px;
			border-radius: 50%;
			background-size: 100%;
			float:left;
		}

		.namepeople
		{
			font-size: 17pt;
			position: relative;
			top: -5px;
			left: 130px;
			color: #bf673d;
			font-family: Trebuchet MS, sans-serif;
			font-weight: bold;
		}
		p{
			font-family: Trebuchet MS, sans-serif;
			position: relative;
			color: white;
			bottom: 30px;
			left: 10px;
		}
		.hrup{
			position: relative;
		    width: 145px;
		    left: -10px;
		    top: 119px;
		    z-index: 101;
		    border: none;
    		border-top: 1px solid #fe8646 ;
		}
		.hrdown{
			position: relative;
    		width: 145px;
		    left: -10px;
		    top:570px;
		    z-index: 101;
		    border: none;
    		border-top: 1px solid #fe8646 ;
		}
	</style>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script text="text/javascript">
		$(document).ready(function(){
    // get the number of .child elements
    var totalitems = $("#tabela .fotos").length;
    // get the height of .fotos
    var scrollval = $('.fotos').height();
    // work out the total height.
    var totalheight = (totalitems*scrollval)-($("#tabela").height());
    
    $(document).on("click", "#down",function(){
    	var currentscrollval = $('#tabela').scrollTop();

    	$('#tabela').scrollTop(scrollval+currentscrollval);

        // hide/show buttons
        if(currentscrollval == totalheight) {
        	$(this).show();         
        }
        else {
        	$("#up").show();
        }
    });
    $(document).on("click", "#up",function(){
    	var currentscrollval = parseInt($('#tabela').scrollTop());

    	$('#tabela').scrollTop(currentscrollval-scrollval);

         // hide/show buttons
         if((scrollval+currentscrollval) == scrollval) {
         	$(this).show();         
         }
         else {
         	$("#down").show();
         }
     });
});
	</script>
</head>
<body>
	<div>
		<hr class="hrup"><img src="imagens/seta-cima.gif" alt="" id="up">
	</div>
	<div class="backgroundtabel">
		<span class="namepeople">Pessoas</span>
		<div id="tabela">
			<div class="fotos fotosp"> 
				<img src="imagens/perfil/mirelle.jpg"  class="fotosp">
				<p>Mirele de Sousa</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/maycon.jpg"  class="fotosp">
				<p>Antonio Maycon</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/dimas.jpg" class="fotosp">
				<p>Francisco Dimas</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/isabela.jpg"  class="fotosp">
				<p>Isabela Borges</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/israel.jpg"  class="fotosp">
				<p>Israel de Oliveira</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/jaquet.jpg"  class="fotosp">
				<p>Jaqueline Mendes</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/marina.jpg"  class="fotosp">
				<p>Marina Sampaio</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/nicolas.jpg"  class="fotosp">
				<p>Ruan Nicolas</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/samuel.jpg"  class="fotosp">
				<p>Samuel</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/samuelb.jpg"  class="fotosp">
				<p>Samuel B.</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/joao.jpg" class="fotosp">
				<p>João</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/giselly.jpg" class="fotosp">
				<p>Giselly</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/fabio.jpg" class="fotosp">
				<p>Fabio</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/miguel.jpg" class="fotosp">
				<p>Miguel</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/kananda.jpg" class="fotosp">
				<p>Kananda</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/josinaldo.jpg" class="fotosp">
				<p>Josinaldo</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/anderson.jpg" class="fotosp">
				<p>Anderson</p>
			</div>
			<div class="fotos fotosp">
				<img src="imagens/perfil/gerardo.jpg" class="fotosp">
				<p>Gerardo</p>
			</div>
		</div>
	</div>
	<div>
		<hr class="hrdown"><img src="imagens/seta_baixo.gif" alt="" id="down">
	</div>
</body>
</html>