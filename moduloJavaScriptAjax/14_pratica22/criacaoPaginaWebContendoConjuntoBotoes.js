function carregar(id) {
    $.ajax({
        url: 'info.txt',
        type: 'GET',
        success: function (data) {
            objeto_json = eval("("+data+")");

            var frase = "";

            if (id == 0) {
                frase = frase + "<h1>" + objeto_json.geral[0].titulo + "</h1>";

                frase = frase + "<p>" + objeto_json.geral[0].descricao + "</p>";

            } else if (id == 1) {
                frase = frase + "<h1>" + objeto_json.geral[1].titulo + "</h1>";

                frase = frase + "<p>" + objeto_json.geral[1].descricao + "</p>";

            } else if (id == 2) {
                frase = frase + "<h1>" + objeto_json.geral[2].titulo + "</h1>";

                frase = frase + "<p>" + objeto_json.geral[2].descricao + "</p>";

            } else {

                frase = frase + "<h1>" + objeto_json.geral[3].titulo + "</h1>";

                frase = frase + "<p>" + objeto_json.geral[3].descricao + "</p>";
            }


            $("#caixa").html(frase);

        },

    });
}

