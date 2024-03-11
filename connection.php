<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "prova-php";

    
    if($connection = mysqli_connect($server, $user, $password, $db)) {
        // echo "Conectado";
    } else {
        echo "Erro ao conectar";
    }

    function mensagem($texto, $tipo) {
        echo "<div class='alert alert-$tipo mt-5' role='alert'>
            $texto
        </div>";
    }

?>