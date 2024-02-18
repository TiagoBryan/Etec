<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Estudos!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="assets/css/home.css" rel="stylesheet">
    <link href="assets/css/comp.css" rel="stylesheet">
</head>
<body >
    <div class="container p-0">
    <header class="cabecalho">
        <ul >
        <li> <a href="index.php"> <img width="90px" src="img/logo.png" alt=""> </a> </li>
        </ul>

        <ul class="org-items">
        
        <li> <a href="pag/ficha-tecnica.php">Ficha Técnica</a> </li>
        <li> <a href="pag/cal-auto-avalia.php">Auto Avaliação</a> </li>
        <li> <a href="pag/aprendizado.php">Práticas de Aprendizado</a></li>
        </ul>
       
    </header>
    </div>
    <div class="container " style="background-color: #DEDEDE">
    
        <div class="row" >
            <div class="col">
            <nav id="controle-nav" class="navbar  fixed-top" style="background-color: #523D3D;">
            <div class="container">
                <a  href="index.php"> <img width="90px" src="img/logo.png" alt=""> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="margin: 0px 20px 0px 0px">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pag/ficha-tecnica.php">Ficha Técnica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pag/cal-auto-avalia.php">Auto Avaliação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pag/aprendizado.php">Praticas de Aprendizado</a>
                    </li>
                
                    </ul>
                    
                </div>
                </div>
            </div>
            </nav>
            </div>
        </div>
        
    <br>
    <br>
    <nav >
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card text-center card-tela-home">
                    <br>
                    <h1>Seja bem vindo!</h1>
                    <br>
                    <p>Aqui em nosso site você encontrará ferramentas úteis para ajudar no seu densenvolvimento pessoal, alem de poder com muita praticidade elaborar uma ficha detalhada sobre você, basta escolher em nosso cabeçalho uma das opções e aproveitar.</p>
                    <br>
                    <div class="div-com-linha"></div>
                    <br>
                    <h1>Sobre a importância do estudo:</h1>
                    <br>
                    <p>O estudo desempenha um papel fundamental no desenvolvimento pessoal e coletivo, sendo um alicerce essencial para o progresso individual e societal. A importância do estudo abrange diversas áreas e impacta a vida das pessoas de maneiras significativas.</p>
                    <br>
                    <div class="div-com-linha"></div>
                    <br>
                    <h1>Desenvolvedores</h1>
                    <br>
                    <div class="row">
                        <div class="col d-flex justify-content-center" > 
                            <div class="d-flex flex-column align-items-center"> 
                                <div class="imagem-desen"  ><img src="img/tiago.png"  alt=""> </div>
                                <div class="nome-desen">Tiago Bryan Ramos de Oliveira</div>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center"><div class="d-flex flex-column align-items-center"> <div class="imagem-desen"><img src="img/joao.jpeg"  alt=""> </div> <div class="nome-desen">João Pedro Silva de Oliveira</div></div></div>
                    </div>
                </div>
            </div>
        </div>
        
    </nav>
    <br>
    <br>
    </div>
    
    <div class="container p-0">
    <footer>
        <div class="row">
            <div class="col-12 col-sm-6  posi-plat">
                <img width="220px" src="img/platao.png" alt="">
            </div>
            <div class="col-12 col-sm-6 posi-txt-plat" >
                <div class="org-fi" style=" height: 100%"> 
                <p class="frase-pensP">“A ignorância, o maior dos males e raiz de todos os outros males.”</p>
                <p class="frase-pensS" >Platão.</p>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>