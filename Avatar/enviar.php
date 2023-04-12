<?php 
include 'conexao.php';

$msg = "";
$css_class = "";

if (isset($_POST['save-user'])) {
    echo "<pre>", print_r($_FILES['profileImage']['name']), "</pre>";
  
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $profileImageName = time() . '_' . $_FILES['profileImage']['name'];

    $target = 'image/' . $profileImageName;

    if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)) {
        $sql = "INSERT INTO usuarios (profile_image, email, senha) VALUE ('$profileImageName', '$email', '$senha')";
        if (mysqli_query($conexao, $sql)) {
            $msg = "Image uploaded to Database";
            $css_class = "alert-success";
        } else {
            $msg = "Failed to upload to upload Database";
            $css_class = "alert-danger";
        }

    }  
}
