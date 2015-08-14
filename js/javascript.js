
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
            document.getElementById("lightbox").style.display   = 'block';
        }
        function fechar(){
            document.getElementById("background").style.display = 'none';
            document.getElementById("lightbox").style.display   = 'none';
        }
        function comentneg(){
            document.getElementById('titlecoment').innerText    = "Comentário negativo";
        }
        function comentpos(){
            document.getElementById('titlecoment').innerText    = "Comentário positivo";
        }
}
}
        




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

function loginsuccessfully(){
    setTimeout("window.location = 'preavaliacao.php'", 0)
}
function loginfailed(){
    alert("Email ou senha incorreto, tente novamente");
    setTimeout("window.location = 'index.html'",0)
}