function carregar() {
    $.ajax({
        url: 'Ficheirotexto.txt',
        type: 'GET',
        success: function (data) {
            $('#caixa').html(data);
        },

        error: function (xhr, status) {
            alert('Desculpe, houve um problema');
        }

    });
}