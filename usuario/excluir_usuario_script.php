<?php
    include "../connection.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM users WHERE id = $id";

        if(mysqli_query($connection, $sql)) {
            header("Location: usuario_lista.php");
            exit();
        } else {
            echo "Erro ao excluir o usuário.";
        }
    } else {
        echo "ID do usuário não especificado.";
    }
?>
