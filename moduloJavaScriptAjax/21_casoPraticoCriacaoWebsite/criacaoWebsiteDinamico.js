function welcomeMsg() {
    setTimeout(() => {
        alert("Sejam Bem-Vindos ao meu Website!");
      }, 5000);
}

function carregaRSS() {

    var url = 'https://pt.euronews.com/rss?level=program&amp;name=noticias-europeias';
    $.ajax({
        url: "https://api.rss2json.com/v1/api.json?rss_url=" + url,
        type: 'GET',

        success: function (data) {
            objeto_json = eval(data);

            var frase = "";
            for (i = 0; i < objeto_json.items.length; i++) {
                frase += "<b>Título:</b>" + objeto_json.items[i].title + "<br/>";
                frase += " <b>Descrição:</b>" + objeto_json.items[i].description + "<br/>";
                frase += "<a href='" + objeto_json.items[i].link + "'>Acesse a noticia completa aqui</a><br/>";
                frase += "<br/>"
            }
            $("#caixa").html(frase);
        },
        error: function (xhr, status) {
            alert('Ocorreu um erro.');
        }
    });

    this.welcomeMsg();
}