var text_search = document.getElementById('text_search')
var search = document.getElementById('search')
var matchList = document.getElementById('matchList')
// addEventListener('input', function (evt) { // a revoir pour le input, pas bien compris 
$('#text_search').keyup(function () {
    console.log(text_search.value)
    // if (!(text_search == "")) {
    // console.log(text_search.length)

    $.ajax({
        url: 'encodage.php',
        dateType: 'json',
        type: 'GET',
        data: 'text_search=' + $(this).val() // this -> $('#text_search')
        // })
    }).done(function (data) {
        var str = ""
        var data = JSON.parse(data)
        for (var i = 0; i < data.length; i++) {

            str = str + '<a style="cursor:pointer;">' + data[i][0]['mot'] + '</a><br />'

            console.log(data[i][0]['img'])
        }
        document.getElementById('matchList').innerHTML = str
    })
});
$('#matchList').on('click', 'a', function (e) {
    // dont allow the <a> to perform its default functionality
    e.preventDefault();
    // get content of <a> tag
    console.log($(this).text());

    document.getElementById('text_search').value = $(this).text();

    $.ajax({
        url: 'encodage.php',
        dateType: 'json',
        type: 'GET',
        data: 'text_search=' + $('#text_search').val() // this -> $('#text_search')
        // })
    }).done(function (data) {
        var str_result = ""
        // console.log(data)
        var data = JSON.parse(data)
        for (var i = 0; i < data.length; i++) {

            str_result = str_result + '<div class="mise_en_forme_result_recherche"><a class="mise_en_forme_result_recherche" href="element.php?id=' + data[i][0]["id"] + '"><p>' + data[i][0]['mot'] + '</p><img class="img_size" src="' + data[i][0]['img'] + '">' + '</a></div><br />'

            // console.log(data[i][0]['mot'])
        }
        // console.log(data)
        document.getElementById('result').value = str_result
        console.log(document.getElementById('result').value)
    })
});

/* search header ptin de duplication */
var text_search_header = document.getElementById('text_search_header')
var search_header = document.getElementById('search_header')
var matchList_header = document.getElementById('matchList_header')

$('#text_search_header').keyup(function () {
    console.log(text_search_header.value)
    $.ajax({
        url: 'encodage.php',
        dateType: 'json',
        type: 'GET',
        data: 'text_search=' + $(this).val() // this -> $('#text_search')
        // })
    }).done(function (data) {
        var str = "";
        data = JSON.parse(data)

        for (var i = 0; i < data.length; i++) {

            str = str + '<a style="cursor:pointer;">' + data[i][0]['mot'] + '</a><br />'

            console.log(data[i][0]['mot'])

        }
        // console.log(data)
        document.getElementById('matchList_header').innerHTML = str
    })
});
$('#matchList_header').on('click', 'a', function (e) {
    console.log('mabite')
    e.preventDefault();
    console.log($(this).text());

    document.getElementById('text_search_header').value = $(this).text();

    $.ajax({
        url: 'encodage.php',
        dateType: 'json',
        type: 'GET',
        data: 'text_search=' + $('#text_search_header').val()
    }).done(function (data) {
        var str_result = ""
        var data = JSON.parse(data)
        for (var i = 0; i < data.length; i++) {

            str_result = str_result + '<div class="mise_en_forme_result_recherche"><a class="mise_en_forme_result_recherche" href="element.php?id=' + data[i][0]["id"] + '"><p>' + data[i][0]['mot'] + '</p><img class="img_size" src="' + data[i][0]['img'] + '">' + '</a></div><br />'

            // console.log(data[i][0]['mot'])
        }
        // console.log(data)
        document.getElementById('result_header').value = str_result
        console.log(document.getElementById('result_header').value)
    })
});
