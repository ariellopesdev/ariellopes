<?php include('config.php'); ?>
<html>

<head>
    <title>Portifólio</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <meta name="description" content="Portifólio">
    <meta name="author" content="Ariel Lopes">
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
</head>

<body>
    <header>
        <div class="center">
            <div class="logo left">
                <img id="logo1" src="imagens/logo1.png">
                <h1>Bem-vindo!</h1>
            </div>
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Especialidades</a></li>
                    <li><a href="">Experiências</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <!--botao-menu-mobile-->
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Especialidades</a></li>
                    <li><a href="">Experiências</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <!--mobile-right-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>
    <section class="introducao">
        <div class="center">
            <div class="fotoPerfil left">
                <img class="right" src="imagens/perfil.jpg">
            </div>
            <div class="textoPerfil right">
                <h1>Olá, me chamo Ariel</h1>
                <h3>Junior Full Stack</br>Html5, CSS3, Bootstrap5, Javascript</br>C, C# e PHP</h3>
            </div><!--textoPerfil-->
            <div class="clear"></div>
        </div>
    </section>
    <!--introducao-->
    <section class="sobre">
        <div class="center">
            <h1>Sobre</h1>
            <h2 class="left"><img src="imagens/perfil2.jpg"></h2>
            <p class="right">Tenho 28 anos e comecei como desenvolvedor Full Stack com Html e Css, e continuo me desenvolvendo em linguagens puras. Aplicando cada vez mais os frameworks e demais conhecimentos. Em busca de meu primeiro emprego na área.</p>
        </div>
        <!--center-->
    </section>
    <!--sobre-->
    <section class="experiencias">
        <div class="center">
            <h1>Experiências</h1>
            <div class="w33 left box-experiencias">
                <h1>Animated_Login</h1>
                <video width="320" height="240" autoplay>
                    <source src="movie.mp4" type="video/mp4">
                </video>
            </div><!--w33 left box-experiencias-->
            <div class="w33 left box-experiencias">
                <h1>Social Icon Effect</h1>
                <video width="320" height="240" autoplay>
                    <source src="movie.mp4" type="video/mp4">
                </video>
            </div><!--w33 left box-experiencias-->
            <div class="w33 left box-experiencias">
                <h1>Animated_Navbar</h1>
                <video width="320" height="240" autoplay>
                    <source src="movie.mp4" type="video/mp4">
                </video>
            </div><!--w33 left box-experiencias-->
            <div class="w33 left box-experiencias">
                <h1>Social Media - Tuitter</h1>
                <video width="320" height="240" autoplay>
                    <source src="movie.mp4" type="video/mp4">
                </video>
            </div><!--w33 left box-experiencias-->
            <div class="w33 left box-experiencias">
                <h1>Universe Travel</h1>
                <video width="320" height="240" autoplay>
                    <source src="movie.mp4" type="video/mp4">
                </video>
            </div><!--w33 left box-experiencias-->
            <div class="w33 left box-experiencias">
                <h1>Portifólio - Projeto</h1>
                <video width="320" height="240" autoplay>
                    <source src="movie.mp4" type="video/mp4">
                </video>
            </div><!--w33 left box-experiencias-->
            <div class="clear"></div>
        </div><!--center-->
    </section>
    <!--experiencias-->
    <section class="especialidades">
        <div class="center">
            <h1>Especialidades</h1>
            <div class="w33 left box-especialidades">
                <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h4>CSS3</h4>
                <label for="range">Nível de conhecimento (entre 1 e 5):</label>
                <input type="range" id="nivel" name="volume" min="1" max="5">
            </div>
            <!--w33 left box-especialidades-->
            <div class="w33 left box-especialidades">
                <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h4>HTML5</h4>
                <label for="range">Nível de conhecimento (entre 1 e 5):</label>
                <input type="range" id="nivel" name="volume" min="1" max="5">
            </div>
            <!--w33 left box-especialidades-->
            <div class="w33 left box-especialidades">
                <h3><img src="imagens/bootstrap.png"> </h3>
                <h4>Bootstrap</h4>
                <label for="range">Nível de conhecimento (entre 1 e 5):</label>
                <input type="range" id="nivel" name="volume" min="1" max="5">
            </div>
            <!--w33 left box-especialidades-->
            <div class="w33 left box-especialidades">
                <h3><img src="imagens/javascript.png"> </h3>
                <h4>Javascript</h4>
                <label for="range">Nível de conhecimento (entre 1 e 5):</label>
                <input type="range" id="nivel" name="volume" min="1" max="5">
            </div>
            <!--w33 left box-especialidades-->
            <div class="w33 left box-especialidades">
                <h3><img src="imagens/c.png"> </h3>
                <h4>C</h4>
                <label for="range">Nível de conhecimento (entre 1 e 5):</label>
                <input type="range" id="nivel" name="volume" min="1" max="5">
            </div>
            <!--w33 left box-especialidades-->
            <div class="w33 left box-especialidades">
                <h3><img src="imagens/c#.jpeg"> </h3>
                <h4>C#</h4>
                <label for="range">Nível de conhecimento (entre 1 e 5):</label>
                <input type="range" id="nivel" name="volume" min="1" max="5">
            </div>
            <!--w33 left box-especialidades-->
            <div class="w33 left box-especialidades">
                <h3><img src="imagens/php.png"> </h3>
                <h4>PHP</h4>
                <label for="range">Nível de conhecimento (entre 1 e 5):</label>
                <input type="range" id="nivel" name="volume" min="1" max="5">
            </div>
            <!--w33 left box-especialidades-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </section>
    <!--especialidades-->
    <section class="contato">
        <div class="center">
            <div class="dados">
                <h1>Contato</h1>
                <p>Telefone: (041) 99139-3836</p>
                <p>E-mail: ariel_lopescwb2017@hotmail.com</p>
                <p>Endereço: Rua Francisco Torres, 545, Centro, Curitiba, PR</p>
            </div>
            <!--dados-->
            <div class="linkedin">
                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
            <!--linkedin-->
        </div>
        <!--center-->
    </section>
    <!--contato-->
    <script src="<?php echo INCLUDE_PATH; ?>JS/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>JS/scripts.js"></script>
</body>

</html>