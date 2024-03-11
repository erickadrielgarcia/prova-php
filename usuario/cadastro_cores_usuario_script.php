<?php
    
    $user_id = $_GET["id"];
    
    include "../connection.php";
    
    $cores_selecionadas = array_map('intval', $_POST["cores"]);
    
    $sql_delete = "DELETE FROM user_colors WHERE user_id = $user_id";
    mysqli_query($connection, $sql_delete);
    
    foreach ($cores_selecionadas as $cor_id) {
        $sql_insert = "INSERT INTO user_colors (user_id, color_id) VALUES ($user_id, $cor_id)";
        mysqli_query($connection, $sql_insert);
    }
    
    mysqli_close($connection);
    
    header("Location: usuario_editar_cor.php?id=$user_id");
    exit();
?>
