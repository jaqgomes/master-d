google.charts.load('current', {'packages':['corechart'], 'languague': 'pt'});

google.charts.setOnLoadCallback(desenharGrafico);

function desenharGrafico() {
    var data = new google.visualization.DataTable();

    data.addColumn('string', 'Profissao');

    data.addColumn('number', 'N de horas');

    data.addRows ([
        ['Cozinheiro', 56],
        ['Professor', 42],
        ['Programador', 48]
    ]);

    var opcoes = {
        'title': 'Horário de trabalho',
        'width': 400,
        'height': 300
    };

    var chart = new google.visualization.PieChart(document.getElementById('caixa'));

    chart.draw(data, opcoes);
}