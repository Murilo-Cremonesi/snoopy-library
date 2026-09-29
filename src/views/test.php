<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Snoopy Library</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="static/css/vars.css">
    <link rel="stylesheet" href="static/css/style.css">
    <link href="css/courier-new-maisfontes.d2f2.zip" rel="stylesheet">
</head>
<body class="m-0 p-0">
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(237, 21, 36); border-color: rgb(211,211,211)">
      <div class="container-fluid">
        <img src="static/img/reading snoopy.jpg" alt="Snoopy Library" width="100">
        <a class="navbar-brand" href="#">Snoopy Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="sidebar">
            <nav class="sidebar__navigation">
                <ul>
                    <li>
                        <a href="index.php">
                            <i class="fa fa-home"></i>
                            <span>Início</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin/salvos.php">
                            <i class="fa fa-bookmark"></i>
                            <span>Salvos</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin/perfil.php">
                            <i class="fa fa-user"></i>
                            <span>Perfil</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="post">
                <div class="post_content">
                    <button class="new_post" id="open-modal">
                        <span>Novo Post</span>
                    </button>
                </div>
            </div>
            <hr>
            <div class="perfil <?php echo (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== TRUE) ? 'com-footer' : ''; ?>">
                <?php if ((isset($_SESSION["logado"]))&&($_SESSION["logado"]=== TRUE)) {
                    echo "<span>".$_SESSION["nome"]."</span>";
                    echo "<img src='".$_SESSION["foto"]."' style='border-radius: 50%; border: 4px solid white; object-fit: cover;' alt='foto de perfil' width='45' height='45'>";
                }
                else {
                    echo "<span>Nome</span>";
                    echo "<img src='img/no_login.png' style='border-radius: 50%; border: 4px solid white; object-fit: cover;' alt='foto de perfil' width='45' height='45'>";
                }
                ?>
            </div>
            <hr>
            <span class="button_sair">
                <a href="admin/logout.php">Sair</a>
            </span>
        </div>
        <div class="main-content"></div>
</body>
</html>