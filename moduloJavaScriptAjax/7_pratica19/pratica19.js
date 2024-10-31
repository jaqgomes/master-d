var numeroEsc = Math.ceil(Math.random() * 20);

var palpite = prompt("Adivinhe o número de 1 a 20 que estou a pensar!");

var tentativa = 3;

if (palpite == numeroEsc) {
    alert("Parabéns acertou!");

} else {
    tetantiva--;

    if (Math.abs(palpite - numeroEsc) < 4) {
        alert("Quase que acertou!");

    } else {
        alert("Ups, falhou!");
    }
}

while (tentativa != numeroEsc) {

    if (tentativa == 0) {
        alert("Fim de jogo! Ganhei!");
        break;
    }

    var palpite = prompt("Adivinha aqui");
    if (palpite == numeroEsc) {
        alert("Parabéns acertou!");

    } else {
        tentativa--;

        if (Math.abs(palpite - numeroEsc) < 4) {
            alert("quase que acertou!");
        } else {
            alert("Ups, falhou!");
        }
    }

}

function botaoNum() {
    document.getElementById("textoBotao").innerHTML = `O número escolhido foi ${numeroEsc}.`;
};