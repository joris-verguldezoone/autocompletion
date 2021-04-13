$('#button').click(function () {
    
    $.ajax({
        url: 'pages_back/element.php',
        dataType: 'json',
        type: 'GET'


    }).done(function (data) {
        console.log(data)
        // $("#tBody").append('<td>' + data.value[property] + '</td>')

        // data.forEach(value => {
        //     console.log(value);
        //     $("#tBody").append('<tr>')
        //     for (const property in value) {
        //         // console.log(`${property}: ${value[property]}`);
        //         $("#tBody").append('<td>
        

    })
})
        // console.log(data2)
 // var data2 = JSON.parse(data)