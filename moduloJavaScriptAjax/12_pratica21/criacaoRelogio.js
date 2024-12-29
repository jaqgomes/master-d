var loopRelogio = setInterval(relogio, 1000);

function relogio(atual, hora, minuto, segundo) {
    atual = new Date();
    hora = atual.getHours();
    minuto = atual.getMinutes();
    segundo = atual.getSeconds();

    imprimirHora = hora + ":" + minuto + ":" + segundo;

    document.getElementById("relogioAuto").innerHTML = imprimirHora;

}

function mouseOver() {
    document.getElementById("relogioAuto").style.color = "red";
    document.getElementById("relogioAuto").style.fontSize = "56px";
}

function mouseOut() {
    document.getElementById("relogioAuto").style.color = "black";
    document.getElementById("relogioAuto").style.fontSize = "24px";
}
