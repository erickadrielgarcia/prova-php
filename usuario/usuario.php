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
                    <h2>USUÁRIO CADASTRO</h2>
                    <div class="card p-3 bg-white">
                        <form action="cadastro_usuario_script.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                                <label for="floatingInput">Nome</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" placeholder="nome@exemplo.com" name="email" required>
                                <label for="floatingPassword">Email</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>