$(document).ready(function () {
    $(function () {
        $("#dataInicio").datepicker({
            changeMonth: true,
            changeYear: true
        });

        $("#dataFim").datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
});

function selecionarHotel(hotel) {
    var objHttp = null;

    if (window.XMLHttpRequest) {

        objHttp = new XMLHttpRequest();

    } else if (window.ActiveXObject) {

        objHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    objHttp.open("GET", "linguaFalada.php?linguaFalada=" + hotel, true);
    objHttp.onreadystatechange = function () {

        if (objHttp.readyState == 4) {
            document.getElementById('linguaFalada').value = objHttp.responseText;
        }
    }

    objHttp.send(null);
}


valorDiaria = 0;

function calcularEstadia(hotel) {
    getValorDiaria(hotel)

    var dataInicio = new Date(document.getElementById('dataInicio').value);

    var dataFim = new Date(document.getElementById('dataFim').value);

    var timeDiff = Math.abs(dataFim.getTime() - dataInicio.getTime());
    var totalDias = Math.ceil(timeDiff / (1000 * 3600 * 24));

    var despesa = totalDias * valorDiaria;

    document.getElementById('total').value = despesa;
    document.getElementById('linguaFalada').value = despesa;

    // document.getElementById('total').value = despesa;
    $("#total").val(despesa);
    // document.getElementById('total').setAttribute("value", despesa);

};

function getValorDiaria(hotel) {

    var objHttp = null;

    if (window.XMLHttpRequest) {

        objHttp = new XMLHttpRequest();

    } else if (window.ActiveXObject) {

        objHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    objHttp.open("GET", "despesas.php?hotel=" + hotel, false);
    objHttp.onreadystatechange = function () {

        if (objHttp.readyState == 4) {
            valorDiaria = objHttp.responseText;
        }
    }

    objHttp.send(null);
}