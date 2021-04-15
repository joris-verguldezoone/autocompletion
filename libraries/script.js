var text_search = document.getElementById('text_search')
var search = document.getElementById('search')
var matchList = document.getElementById('matchList')
// $('#text_search').addEventListenner(function () {
//     console.log(text_search)
// })

// addEventListener('input', function (evt) { // a revoir pour le input, pas bien compris 
$('#text_search').keyup(function(){
        // console.log(text_search.value)
        $.ajax({
            url: 'pages_back/element.php',
            dateType: 'json',
            type: 'POST',
            data:'text_search='+$(this).val() // this -> $('#text_search')
        // })
        }).done(function (data){
            var str = ""
            var data = JSON.parse(data)
            for (var i = 0; i < data.length; i++){
               
                str = str + data[i][0]['mot'] + "<br />"
                
                console.log(data[i][0]['mot'])
            }           
            document.getElementById('matchList').innerHTML = str

            console.log(data)
        
        // attraper les résultat et les mettre sous l'input
    })

});

$('#search').click(function () {

    $.ajax({
        url: 'pages_back/element.php',
        dataType: 'json',
        type: 'POST'


    }).done(function (data) {
        console.log(data)

    })
})
