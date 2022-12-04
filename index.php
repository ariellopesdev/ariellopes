<?php include('config.php'); ?>
<html>

<head>
    <title>Portfólio</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <meta name="description" content="Portfólio">
    <meta name="author" content="Ariel Lopes">
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
</head>

<body>
    <base base="<?php echo INCLUDE_PATH; ?>" />
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    ?>
    <header>
        <div class="center">
            <nav class="desktop right">
                <a href="<?php echo INCLUDE_PATH; ?>">Home</a>
                <a realtime="sobre" href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a>
                <a realtime="especialidades" href="<?php echo INCLUDE_PATH; ?>especialidades">Especialidades</a>
                <a realtime="projetos" href="<?php echo INCLUDE_PATH; ?>projetos">Projetos</a>
                <a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a>
                <div class="animation start-home"></div>
            </nav>
            <!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <!--botao-menu-mobile-->
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a realtime="sobre" href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a realtime="especialidades" href="<?php echo INCLUDE_PATH; ?>especialidades">Especialidades</a></li>
                    <li><a realtime="projetos" href="<?php echo INCLUDE_PATH; ?>projetos">Projetos</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <!--mobile-right-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>
    <div class="container-principal">
        <?php
            if (file_exists('pages/' . $url . '.php')) {
                include('pages/' . $url . '.php');
            }
        ?>
        <?php
            $url = isset($_GET['url']) ? $_GET['url'] : 'sobre';
            $url = isset($_GET['url']) ? $_GET['url'] : 'projetos';
            $url = isset($_GET['url']) ? $_GET['url'] : 'especialidades';
            $url = isset($_GET['url']) ? $_GET['url'] : 'contato';
        ?>
    </div>
    <!--container-principal-->
    <footer <?php if (isset($pagina404) && $pagina404 == true) echo 'class="fixed"' ?>>
        <div class="center">
            <ul>
                <li><a href="https://www.linkedin.com/in/ariel-lopes-71000821b/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
                <li><a href="tel:+5541991393836"><i class="fa-brands fa-whatsapp"></i></a></li>
            </ul>
            <p>Todos os direitos reservados <i class="fa fa-copyright" aria-hidden="true"></i></p>
        </div>
        <!--center-->
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>JS/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>JS/scripts.js"></script>
    <?php
    if ($url == 'home' || $url == '')
    ?>
</body>

</html>