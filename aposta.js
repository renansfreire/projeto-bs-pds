function escolheCasa() {
    document.getElementById("casa").style.borderColor = "yellow";
    document.getElementById("fora").style.borderColor = "#333";
    document.getElementById("empate").style.borderColor = "#333";
}

function escolheEmpate() {
    document.getElementById("casa").style.borderColor = "#333";
    document.getElementById("fora").style.borderColor = "#333";
    document.getElementById("empate").style.borderColor = "yellow";
}

function escolheFora() {
    document.getElementById("casa").style.borderColor = "#333";
    document.getElementById("fora").style.borderColor = "yellow";
    document.getElementById("empate").style.borderColor = "#333";
}

function escolheCasa1(){
    document.getElementById("casa1").style.borderColor = "yellow";
    document.getElementById("fora1").style.borderColor = "#333";
    document.getElementById("empate1").style.borderColor = "#333";
}

function escolheEmpate1() {
    document.getElementById("casa1").style.borderColor = "#333";
    document.getElementById("fora1").style.borderColor = "#333";
    document.getElementById("empate1").style.borderColor = "yellow";
}

function escolheFora1() {
    document.getElementById("casa1").style.borderColor = "#333";
    document.getElementById("fora1").style.borderColor = "yellow";
    document.getElementById("empate1").style.borderColor = "#333";
}

function id( el ){
    return document.getElementById( el );
}
window.onload = function(){

id('mais').onclick = function(){
        id('format').value = parseInt( id('format').value )+1;
}
id('menos').onclick = function(){
        if( id('format').value>0 )
                id('format').value = parseInt( id('format').value )-1;
    }
id('mais2').onclick = function(){
        id('format2').value = parseInt( id('format2').value )+1;
}
id('menos2').onclick = function(){
        if( id('format2').value>0 )
                id('format2').value = parseInt( id('format2').value )-1;
    }
id('finalizar').onclick = function(){
   id('valor-aposta').value = parseInt(id('valor-aposta').value);

   var calc = (id('format').value*id('format2').value)+1.5;

   id('total').value = 1.5*id('valor-aposta').value*calc;  
}
}
