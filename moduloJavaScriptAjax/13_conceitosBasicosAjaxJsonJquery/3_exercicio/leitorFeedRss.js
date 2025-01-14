function carregar() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            mostrar(this);
        }
    };

    xhttp.open("GET", "leitorFeedRss.xml", true);
    xhttp.send();

    function mostrar(xml) {
        var item, i, objHttp, frase;

        objHttp = xml.responseXML;
        frase = "";

        item = objHttp.getElementsByTagName('item');
        title = objHttp.getElementsByTagName('title');
        description = objHttp.getElementsByTagName('description');
        link = objHttp.getElementsByTagName('link');
        guid = objHttp.getElementsByTagName('guid');
        pubDate = objHttp.getElementsByTagName('pubDate');
        media = objHttp.getElementsByTagName('media');

        for (i = 0; i < item.length; i++) {
           
            frase += "Title: <b>" + title[i].childNodes[0].nodeValue + "</b><br/>";
            
            frase += "Description: <b>" + description[i].childNodes[0].nodeValue + "</b><br/>";

            frase += "Link: <b>" + link[i].childNodes[0].nodeValue + "</b><br/>";

            frase += "Guid: <b>" + guid[i].childNodes[0].nodeValue + "</b><br/>";

            frase += "pubDate: <b>" + pubDate[i].childNodes[0].nodeValue + "</b><br/>";

            //frase += "media: <b>" + item[i].childNodes[0].nodeValue + "</b><br/>";

            frase += "<br/>"

        }

        document.getElementById("caixa").innerHTML = frase;

    }
}

function carregar2() {
    var url = 'https://www.zdnet.com/news/rss.xml';
    $.ajax({
        url:"https://api.rss2json.com/v1/api.json?rss_url=" + url,
        type: 'GET',

        success: function (data) {
            objeto_json = eval(data);
            // ler o conteúdo
            var frase = "";
            for (i = 0; i < objeto_json.items.length; i++) {
                frase += "Título: <b>" + objeto_json.items[i].title + "</b><br/>";
                frase += "Descição: <b>" + objeto_json.items[i].description + "</b><br/>";
                frase += "Link: <a href='" + objeto_json.items[i].link + "'>Acesse a noticia completa aqui</a><br/>";
                frase += "<br/>"
            }
            $("#caixa").html(frase);
        },
        error: function (xhr, status) {
            alert('Ocorreu um erro.');
        }
    });
}

