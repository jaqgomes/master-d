$(document).ready(function () {
    $("#input1").blur(function () {
        alert('saiu do texto 1');
    });


    $("#input2").change(function () {
        alert('alterou a caixa 2');
    });

    $("#caixa").hover(function () {
        $(this).css("background-color", "red");

    }, function () {
        $(this).css("background-color", "white");

    });

    $("#input3").keyup(function (event) {
        console.log(event.which);
        alert('na caixa 3, pressionou: ' + String.fromCharCode(event.which));
    });

    $("#caixa").on("click", function () {
        alert("clicou na caixa");

    });
});