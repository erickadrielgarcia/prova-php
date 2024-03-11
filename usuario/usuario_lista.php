<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="shortcut icon" type="image/x-icon" href="../ico/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
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
                    <h2>USUÁRIO LISTA</h2>
                    <div class="card p-3 bg-white">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Operação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include "../connection.php";

                                    $sql = "SELECT * FROM users";
                                    
                                    $result = mysqli_query($connection, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>{$row['name']}</td>";
                                        echo "<td>{$row['email']}</td>";
                                        echo "<td><a href='usuario_editar.php?id={$row['id']}'><button class='btn btn-primary'>Editar</button></a> <a href='excluir_usuario_script.php?id={$row['id']}' onclick='return confirm(\"Tem certeza que deseja excluir este usuário?\")'><button class='btn btn-danger'>Excluir</button></a></td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>

