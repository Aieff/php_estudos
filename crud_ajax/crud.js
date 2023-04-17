$(document).ready(function () {
    listarGames();
});

var modal = new bootstrap.Modal(document.getElementById('staticBackdrop'));

function CadastrarGame() {

   // Recebe os dados vindos do form
   var dados = {
    acao: "cadastrarGame",
    nome: $("#nome").val(),
    genero: $("#genero").val(),
    ano: $("#ano").val(),
    nota: $("#nota").val()
};
 
$.ajax({
    method: "POST",
    url: "../ajax/games.php",
    dataType: 'json',
    data: dados,
    success: function (data) {
        console.log(data);
        if (data.error == true) {
            alert(data.msg);
            modal.hide();
            } 
        },
    });
}