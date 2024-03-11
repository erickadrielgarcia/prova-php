<?php
    include "../connection.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM colors WHERE id = $id";

        if(mysqli_query($connection, $sql)) {
            header("Location: cores_lista.php");
            exit();
        } else {
            echo "Erro ao excluir o cores.";
        }
    } else {
        echo "ID da cor não especificado.";
    }
?>
