<?php
require_once("globals.php");
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PopCorn</title>
    <link rel="short icon" href="<?= $BASE_URL ?>/img/favicon.png">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css" integrity="sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
</head>

<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL ?>" class="navbar-brand">
                <img src="<?= $BASE_URL ?>/img/logo.png" alt="Popcorn" id="logo">
                <span id="popcorn-title">PopCorn</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filme" aria-label="Search">
                <button type="submit" class="btn my-2 my-sm-0">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="main-container" class="container-fluid">
        <h1>Corpo do site</h1>
    </div>
    <footer id="footer">
<div class="social-container">
    <ul>
        <li>
            <a href="#" class="fab fa-facebook-square"></a>
        </li>
        <li>
            <a href="#" class="fab fa-instagram"></a>
        </li>
        <li>
            <a href="#" class="fab fa-youtube"></a>
        </li>
    </ul>
</div>
<div id="footer-links-container">
    <ul>
        <li><a href="#">Adicionar Filme</a></li>
        <li><a href="#">Adicionar Crítica</a></li>
        <li><a href="#">Login</a></li>
    </ul>
</div>
<p>&copy; 2023 </p>
    </footer>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.js" integrity="sha512-L6XANV6sOsx9N9c787eDN1pjB2Pzautd3xDgn4cMKuoleHSuCJi5pCDGPCtwE3Bd4A1Olnr0k0aQXbczYzg+wg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>