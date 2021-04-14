var text_search = document.getElementById('text_search')
var search = document.getElementById('search')

// $('#text_search').addEventListenner(function () {
//     console.log(text_search)
// })

addEventListener('input', function (evt) { // a revoir pour le input, pas bien compris 
    console.log(text_search.value)
    $.ajax({
        url: 'pages_back/element.php',
        dateType: 'json',
        type: 'GET'
    }).done(function (data)){
        // attraper les résultat et les mettre sous l'input
    }

});

$('#search').click(function () {

    $.ajax({
        url: 'pages_back/element.php',
        dataType: 'json',
        type: 'GET'


    }).done(function (data) {
        console.log(data)

    })
})
