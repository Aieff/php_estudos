<?php 
$validacoes = [];

if(count($_POST) > 0) {

    if($_POST['name'] === "") {
        $validacoes[] = "Preencha o nome de usuário";
    }

    if($_POST['email'] === "") {
        $validacoes[] = "Preencha o seu E-mail";
    }

    if($_POST['password'] === "") {
        $validacoes[] = "Preencha a sua senha";
    }

    if($_POST['csenha'] === "") {
        $validacoes[] = "Preencha a confirmação de senha";
    }

    if($_POST['password'] != $_POST['csenha']) {
        $validacoes[] = "Sua senhas são diferentes";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if (count($validacoes)) : ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li><?=$validacao ?></li>
                <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="index.php" method="post">
    
    <div>
        Nome: <input type="text" name="nome">
    </div>

    <div>
        E-mail: <input type="text" name="email">
    </div>

    <div>
        Senha: <input type="password" name="password">
    </div>

    <div>
        Confirma senha: <input type="password" name="csenha">
    </div>

    <div>
        <input type="submit" value="Enviar">
    </div>

    </form>

</body>
</html>