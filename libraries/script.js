$('#button').click(function () {
console.log('test')

    $.ajax({
        url: 'pages_back/element.php',
        dataType: 'json',
        type: 'GET'


    }).done(function (data) {
        console.log("test")
        // $("#tBody").append('<td>' + data.value[property] + '</td>')

        // data.forEach(value => {
        //     console.log(value);
        //     $("#tBody").append('<tr>')
        //     for (const property in value) {
        //         // console.log(`${property}: ${value[property]}`);
        //         $("#tBody").append('<td>' + value[property] + '</td>')
        //     }
        //     $("#tBody").append('</tr>')

        // })





        // console.log(data);
    })
})

