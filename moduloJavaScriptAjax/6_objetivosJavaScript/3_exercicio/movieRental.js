function newFilme(titulo, ano, duracao, preco){
    return filme = {
        titulo: titulo,
        ano: ano,
        duracao: duracao,
        precoAluguer: preco,
        alugado: null,
        ultimoCliente: null,
    };
}

newFilme("o rei leão", 1994, "1h29", "10€");

function aluguer() {
    filme.alugado = 'sim';
    filme.ultimoCliente = 'Bryan';
    console.log(`Aproveite o filme: ${filme.ultimoCliente} `);
};

function devolvido() {
    filme.alugado = 'nao';
    console.log("Filme devolvido com sucesso");
};

function tracking() {
    if (filme.alugado === 'sim') {
        console.log(`O DVD ${filme.titulo}, atualamente esta alugado para: ${filme.ultimoCliente}`);
    } else {
        console.log(`O DVD ${filme.titulo}, está disponivel para ser alugado.`);
    }
};