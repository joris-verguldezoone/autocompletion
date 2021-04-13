$('#button').click(function () {
    
    $.ajax({
        url: 'pages_back/element.php',
        dataType: 'json',
        type: 'GET'


    }).done(function (data) {
        console.log(data)

    })
})
     