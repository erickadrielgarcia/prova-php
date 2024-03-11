<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="shortcut icon" type="image/x-icon" href="./ico/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary " data-bs-theme="dark">
            <div class="container-fluid">                
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuário
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./usuario/usuario.php">Cadastro</a></li>
                            <li><a class="dropdown-item" href="./usuario/usuario_lista.php">Lista</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cores
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./cores/cores.php">Cadastro</a></li>
                            <li><a class="dropdown-item" href="./cores/cores_lista.php">Lista</a></li>
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
                    <h1>Bem-vindo ao sistema!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <h3>Dica!</h3>
                    <p>Ao editar um usuário, você pode adicionar várias cores associadas a esse usuário. Isso permite que você personalize a experiência do usuário atribuindo cores específicas a ele.</p>
                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>