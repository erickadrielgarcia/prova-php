<?php 
    include "../connection.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `users`(`name`, `email`) VALUES ('$nome','$email')";

    if(mysqli_query($connection, $sql)){
        $ultimo_id = mysqli_insert_id($connection);
        header("Location: usuario_editar.php?id=$ultimo_id");
        exit();
    } else {
        mensagem("Erro ao cadastrar $nome", "danger");
    }
?>