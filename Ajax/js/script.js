$('#form1').submit(function(e) {
    e.preventDefault();

    var u_name = $('#name').val();
    var u_comment = $('#comment').val();
 
    $.ajax ({
        url: 'inserir.php',
        methor: 'POST',
        data: {name: u_name, comment: u_comment},
        dataType: 'json'
    }).done(function(result) {
        $('#name').val('');
        $('#comment').val('');
        console.log(result);
        listarComentarios();
    });
});

function listarComentarios() {

    $.ajax ({
        url: 'listar.php',
        methor: 'GET',
        dataType: 'json'
    }).done(function(result) {
        console.log(result);

        for (var i = 0; i < result.length; i++) {
            $('.box_comment').prepend(
            '<div class="box_comment><h4>' + result[i].name + '</h4><p>' + result[i].comment + '</p></div>'
            );
        }
       
    });

}

listarComentarios();