<?php 
    include "../connection.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name = '$nome', email = '$email' WHERE id = $id";
    
    if(mysqli_query($connection, $sql)){
        header("Location: usuario_lista.php");
        exit();
    } else {
        echo "Erro ao atualizar o usuário.";
    }
?>
