<?php 
error_reporting(0);
include_once 'enviar.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avatar</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-4 offset-md-4 form-div">
                <form action="avatar.php" method="post" enctype="multipart/form-data">

            <h3 class="text-center">Create Profile</h3>

            <?php if(!empty($msg)): ?>
                <div class="alert <?php echo $css_class; ?>">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>

                <div class="form-group text-center">
                    <img src="image/placeholder.jpg" onclick="triggerClick()" id="profileDisplay"/>
                    <label for="profileImage">Profile Image</label>
                    <input type="file" name="profileImage" id="profileImage" onchange="displayImage(this)" class="form-control" style="display: none;">
                </div>

                <div class="form-group">
                    <label for="nome">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="nome">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" name="save-user" class="btn btn-primary btn-block">Save User</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="scripts.js"></script>

</body>
</html>