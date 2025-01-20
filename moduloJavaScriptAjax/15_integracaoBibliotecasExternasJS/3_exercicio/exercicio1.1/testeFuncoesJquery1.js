/*
Use ready() to make a function available after the document is loaded
$(document).ready(function () {
    //code goes here
})
*/

$(document).ready(function () {
    $("#ocultar").click(function () {

        $("#caixa").hide();
    });

    $("#mostrar").click(function () {

        $("#caixa").show();
    });

    $("#desvanecer").click(function () {

        $("#caixa").fadeOut();
    });

    $("#aparecer").click(function () {

        $("#caixa").fadeIn();
    });

    $("#negrito").click(function () {

        $("#caixa").css("font-weight", "bold");
    });

    $("#remover-negrito").click(function () {

        $("#caixa").css("font-weight", "");
    });

    $("#encolher").click(function () {

        $("#caixa").addClass("encolhido");
    });

    $("#tamanho-inicial").click(function () {

        $("#caixa").removeClass("encolhido");

    });

    $("#inserir").click(function () {
        var adTexto = $("#texto").val();
        $("#caixa").html(adTexto);
    })

    $("#concatenar").click(function () {
        var adTexto = $("#texto").val();
        $("#caixa").append('<p>' + adTexto + '<p/>');
    })

})