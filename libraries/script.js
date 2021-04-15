var text_search = document.getElementById('text_search')
var search = document.getElementById('search')
var matchList = document.getElementById('matchList')
// $('#text_search').addEventListenner(function () {
//     console.log(text_search)
// })
// function isEmpty(str) {
//     return (!str || str.length === 0);
// }

// addEventListener('input', function (evt) { // a revoir pour le input, pas bien compris 
$('#text_search').keyup(function () {
    console.log(text_search.value)
    // if (!(text_search == "")) {
    // console.log(text_search.length)
    $.ajax({
        url: 'pages_back/element.php',
        dateType: 'json',
        type: 'GET',
        data: 'text_search=' + $(this).val() // this -> $('#text_search')
        // })
    }).done(function (data) {
        var str = ""
        var data = JSON.parse(data)
        for (var i = 0; i < data.length; i++) {

            str = str + '<a style="cursor:pointer;">' + data[i][0]['mot'] + '</a><br />'

            console.log(data[i][0]['mot'])
        }
        document.getElementById('matchList').innerHTML = str

        console.log(data)

        // attraper les résultat et les mettre sous l'input
    })

    // }
});
$('#matchList').on('click', 'a', function (e) {
    // dont allow the <a> to perform its default functionality
    console.log('mabite')
    e.preventDefault();
    // get content of <a> tag
    console.log($(this).text());
    document.getElementById('text_search').value = $(this).text();
})

$('#search').click(function () {
    // window.location.replace("pages_back/recherche.php")
    $.ajax({
        url: 'pages_back/element.php',
        dataType: 'json',
        type: 'GET',
        data: 'text_search=' + $('#text_search').val()
    }).done(function (data) {
        var str = ""
        console.log(data)
        // var data = JSON.parse(data)
        for (var i = 0; i < data.length; i++) {

            str = str + '<p>' + data[i][0]['mot'] + '</p><br />'

            console.log(data[i][0]['mot'])
        }
        console.log(str)
        document.getElementById('result').value = str
        console.log(document.getElementById('result').value)
    })
    
}); 