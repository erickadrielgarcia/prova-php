<?php 
    include "../connection.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];

    $sql = "UPDATE colors SET name = '$nome' WHERE id = $id";
    
    if(mysqli_query($connection, $sql)){
        header("Location: cores_lista.php");
        exit();
    } else {
        echo "Erro ao atualizar o usuário.";
    }
?>
