<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script defer src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Gênero</th>
      <th scope="col">Lançamento</th>
      <th scope="col">Nota</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>God of War</td>
      <td>Ação</td>
      <td>2022</td>
      <td>9.5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>The Last Of Us II</td>
      <td>Ação, Apocalipse</td>
      <td>2023</td>
      <td>9.8</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Horizon Zero Dawn</td>
      <td>Ação, Aventura</td>
      <td>2021</td>
      <td>9.2</td>
    </tr>
  </tbody>
</table>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Cadastrar
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cadastrar Game</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="modalGameName">Nome do Game</label>
            <input type="text" class="form-control" id="nome"><br>

            <label for="modalGameGenero">Gênero</label>
            <input type="text" class="form-control" id="genero"><br>

            <label for="modalGameAno">Ano de lançamento</label>
            <input type="text" class="form-control" id="ano"><br>

            <label for="modalGameAvaliacao">Nota</label>
            <input type="text" class="form-control" id="nota">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="CadastrarGame()">Salvar</button>
      </div>
    </div>
  </div>
</div>



</div>
    
</body>

 <script src="crud.js"></script>
</html>