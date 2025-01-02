function carregar() {


    $.ajax({
        url: 'json.txt',
        type: 'GET',

        success: function (data) {
            objeto_json = eval("(" + data + ")");

            var frase = "";
            for (i = 0; i < objeto_json.ficha.length; i++) {

                frase = frase + "Nome: <b>" + objeto_json.ficha[i].nome + "</b><br/>";
                frase = frase + "Idade: " + objeto_json.ficha[i].parametros.idade + "<br/>";
                frase = frase + "Cidade: " + objeto_json.ficha[i].parametros.cidade + "<br/>";
                frase = frase + "Profissão: " + objeto_json.ficha[i].parametros.profissao + "<br/>";

            }
            $("#caixa").html(frase);
        },

        error: function (xhr, status) {
            alert('Ocorreu um erro.');
        }
    });
}