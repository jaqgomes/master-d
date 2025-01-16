$(document).ready(function () {

    $('#calendar').fullCalendar({

        header: {
            left: 'prev,nexttoday',
            center: 'title',
            right: 'month, basicWeek, basicDay'
        },

        defaultDate: '2021-01-12',
        navLinks: true,
        editable: true,
        eventLimit: true,

        events: [{
                title: 'Jantar com os sogros',
                start: ' 2021-01-01'
            },

            {
                title: 'Escapadinha numa casa rural',
                start: '2021-01-07',
                end: '2021-01-10'
            },

            {
                title: 'Conferência',
                start: '2021-01-11',
                end: '2021-01-13'

            },

            {
                title: 'Jantar com os amigos',
                start: '2021-01-12T12:00:00'
            },

            {
                title: 'Ver vídeo(clicar para ver)',
                url: 'https://www.youtube.com/',
                start: '2021-03-28'
            }
        ]
    });
});