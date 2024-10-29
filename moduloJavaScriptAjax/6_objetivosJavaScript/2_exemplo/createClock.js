function moverRelogio(){
    momentoActual = new Date();
    hora = momentoActual.getHours();
    minuto = momentoActual.getMinutes();
    segundo = momentoActual.getSeconds();
    imprimirHora = hora + " : " + minuto + " : " + segundo;

    document.getElementById("relogio").value = imprimirHora;
}