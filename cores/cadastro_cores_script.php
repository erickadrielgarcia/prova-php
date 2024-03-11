<?php 
    include "../connection.php";

    $nome = $_POST['nome'];

    $sql = "INSERT INTO `colors`(`name`) VALUES ('$nome')";

    if(mysqli_query($connection, $sql)){
        $ultimo_id = mysqli_insert_id($connection);
        header("Location: cores_editar.php?id=$ultimo_id");
        exit();
    } else {
        mensagem("Erro ao cadastrar $nome", "danger");
    }
?>