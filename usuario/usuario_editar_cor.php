<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cores do Usuário</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script>
        function validateForm() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var isChecked = false;
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });
            if (!isChecked) {
                alert("Por favor, selecione pelo menos uma cor.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark">
            <div class="container-fluid">                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuário
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="usuario.php">Cadastro</a></li>
                            <li><a class="dropdown-item" href="usuario_lista.php">Lista</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cores
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../cores/cores.php">Cadastro</a></li>
                            <li><a class="dropdown-item" href="../cores/cores_lista.php">Lista</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <h2>EDITAR CORES DO USUÁRIO</h2>
                    <?php
                        include "../connection.php";

                        $user_id = $_GET['id'];

                        if(isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($connection, $_GET['id']);

                            $sql = "SELECT * FROM users WHERE id = '$id'";

                            $result = mysqli_query($connection, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                $user = mysqli_fetch_assoc($result);
                            } else {
                                header("Location: erro.php");
                                exit();
                            }
                        }
                    ?>
                    <div class="card p-3 bg=white">
                        <ul class="nav nav-tabs mb-2">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="usuario_editar.php?id=<?php echo isset($user['id']) ? $user['id'] : ''; ?>">Usuário</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="usuario_editar_cor.php?id=<?php echo isset($user['id']) ? $user['id'] : ''; ?>">Cor</a>
                            </li>
                        </ul>
                        <form action="cadastro_cores_usuario_script.php?id=<?php echo $_GET['id']; ?>" method="POST" onsubmit="return validateForm()">
                            <?php

                                $query = "SELECT * FROM colors";
                                $result = mysqli_query($connection, $query);
                
                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        // Verifica se a cor está associada ao usuário
                                        $query_check_association = "SELECT * FROM user_colors WHERE user_id = $user_id AND color_id = {$row['id']}";
                                        $result_check_association = mysqli_query($connection, $query_check_association);
                                        $is_checked = mysqli_num_rows($result_check_association) > 0 ? 'checked' : '';
                                        
                                        echo '<div class="form-check">';
                                        echo '<input class="form-check-input" type="checkbox" name="cores[]" value="' . $row['id'] . '" ' . $is_checked . '>';
                                        echo '<label class="form-check-label">' . $row['name'] . '</label>';
                                        echo '</div>';
                                    }
                                } else {
                                    echo "Nenhuma cor encontrada.";
                                }
                
                                mysqli_close($connection);
                            ?>
                            <br>
                            <button type="submit" class="btn btn-primary">Salvar Cores</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
