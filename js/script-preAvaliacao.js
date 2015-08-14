
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