$(document).ready(function () {

    $("#ocultarCaixa").click(function (e) {
        $("#caixa1").fadeOut(function () {
            $(this).delay(1000);
            $(this).fadeIn();
        });
    });

    $("#ocultarTudo").click(function (e) {
        $("#lista").fadeOut();
    });

    $("#mostrarTudo").click(function (e) {
        $("#lista").fadeIn();
    });

    $("#ocultarMostrar").click(function (e) {
        if ($("#lista").css('display') === 'none') {
            $("#lista").fadeIn();
        } else {
            $("#lista").fadeOut();
        }

    });

    $("#selOpacidade").change(function (e) {
        var opacidadeEsc = e.target.options[e.target.selectedIndex].value;
        $("h2").fadeTo(500, opacidadeEsc);
    });


    $("#percentagem").change(function () {
        $("#percento").val($(this).val());
    });

    $("#mudar").click(function (e) {
        var opacidade = $("#percento").val();
        var elemento = "#" + $("#selElemento option:selected").html();
        $(elemento).fadeTo(500, opacidade);
    });

    $("#resetFade").click(function (e) {
        location.reload();
    });



})