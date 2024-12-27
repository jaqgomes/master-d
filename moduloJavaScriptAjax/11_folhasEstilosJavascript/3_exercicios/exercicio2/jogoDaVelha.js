var count = 0;

function jogada(id) {
    console.log(count);

    if (count % 2 == 0) {
        mudarCorVermelho(id);
    }
    if (count % 2 !== 0) {
        mudarCorAzul(id);
    }

    count++;
    if (count === 10) {
        alert('Fim de jogo');
        count = 0;

    }
}

function mudarCorVermelho(quadrado) {
    quadrado.style.backgroundColor = '#8B0000';
}

function mudarCorAzul(quadrado) {
    quadrado.style.backgroundColor = '#00008B'
}