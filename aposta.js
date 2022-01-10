function escolheCasa() {
    document.getElementById("casa").style.borderColor = "yellow";
    document.getElementById("fora").style.borderColor = "black";
    document.getElementById("empate").style.borderColor = "black";
}

function escolheEmpate() {
    document.getElementById("casa").style.borderColor = "black";
    document.getElementById("fora").style.borderColor = "black";
    document.getElementById("empate").style.borderColor = "yellow";
}

function escolheFora() {
    document.getElementById("casa").style.borderColor = "black";
    document.getElementById("fora").style.borderColor = "yellow";
    document.getElementById("empate").style.borderColor = "black";
}
