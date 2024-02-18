<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criador de ficha técnica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@400;700&display=swap">
    <script defer src="../assets/js/ficha.js"></script>
    <link rel="stylesheet" href="../assets/css/ficha.css">
    <link href="../assets/css/comp.css" rel="stylesheet">
</head>
<body>
<?php
    require_once('../componentes/header.php');
  ?>
    <div class="container " style="background-color: #DEDEDE">
    
    <div class="row" >
        <div class="col">
        <nav id="controle-nav" class="navbar  fixed-top" style="background-color: #523D3D;">
        <div class="container">
            <a  href="index.php"> <img width="90px" src="../img/logo.png" alt=""> </a>
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
                    <a class="nav-link " aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="ficha-tecnica.php">Ficha Técnica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="cal-auto-avalia.php">Auto Avaliação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="aprendizado.php">Praticas de Aprendizado</a>
                </li>
            
                </ul>
                
            </div>
            </div>
        </div>
        </nav>
        </div>
    </div>
    </div>

  <div class="container" style="background-color: #DEDEDE">
    
    <div class="row">
        <div class="col text-center">
            <br>
            <br>
            <h1>Crie agora sua ficha técnica</h1>
            <br>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col ">
            <div class="d-flex justify-content-center" id="capturar-impressao">
            <div class="area-form" >
                <br>
                <br>
                <div class="teste">
                <div class="area-tite-fi"><h2 class="tite-fi">Ficha Técnica</h2></div></div>
                
            <form id="form_FichaTecnica" action="impri.php" method="post" enctype="multipart/form-data">
            <div id="conteudo_impressao">
                <br>
                <div class="teste">
                <label class="picture" for="picture__input" tabIndex="0">
                <span class="picture__image"></span>
                </label>
                <input type="file" name="picture__input" id="picture__input">
                </div>
                <br>
                <div class="div-com-linha"></div>
                <br>
                <div class="teste2">
                <label for="nome">Nome completo:</label>
                <input type="text" id="nome" name="nome"  required>
                </div>
                <br>
                <div class="teste2">
                <label for="datan">Data de nascimento:</label>
                <input type="date" id="datan" name="datan" required>
                </div>
                <br>
                <div class="teste2">
                <label for="locn">Local de nascimento:</label>
                <input type="text" id="locn" name="locn" required>
                </div>
                <br>
                <div class="teste2">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" required>
                </div>
                <br>
                <div class="div-com-linha"></div>
                <br>
                <label >Nome dos Pais:</label>
                <br>
                <br>
                <div class="row">
                    <div class="col-8">
                        <div class="teste2">
                            <label for="Pai">Pai: </label>
                            <input class="formatacao" type="text" id="Pai" name="Pai" required>
                        </div>
                        <br>
                        <div class="teste2">
                            
                            <label for="mae">Mãe:</label>
                            <input class="formatacao" type="text" id="mae" name="mae" required>
                        </div>
                        
                    </div>
                    <div class="col" >
                        <div class="d-flex justify-content-center align-items-center teste4" >
                        <input class="radio-form" type="radio" name="npais" id="nomeDosPais" onchange="aoSelecionarInput(event)" onclick="checkRadioButton(this)">
                        <label > Não Sei.
                        </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="div-com-linha"></div>
                <br>
                <label >Origem dos Pais:</label>
                <br>
                <br>
                <div class="row">
                    <div class="col-8">
                        <div class="d-flex justify-content-between">
                            <label for="O-Pai">Pai: </label>
                            <input class="formatacao" type="text" id="O-Pai" name="O-Pai" required>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between">
                            
                            <label for="O-mae">Mãe:</label>
                            <input class="formatacao" type="text" id="O-mae" name="O-mae" required>
                        </div>
                        
                    </div>
                    <div class="col" >
                        <div class="d-flex justify-content-center align-items-center teste4" >
                        <input class="radio-form" type="radio" name="nopais" id="orgigemDosPais" onchange="aoSelecionarInputDois(event)" onclick="checkRadioButton(this)">
                        <label > Não Sei.
                        </label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="div-com-linha"></div>
                <br>
                <label >Filho Único:</label>
                <br>
                <div class="row">
                    <div class="col " >
                            <div class="d-flex justify-content-end"> 
                            <div class="d-flex justify-content-center align-items-center teste5" >
                            <input class="radio-form" type="radio" name="sUni" id="sFi" onclick="checkRadioButtonDois(this)">
                            <label> Sim.
                            </label>
                            </div>
                            </div>
                    </div>
                    <div class="col" >
                            <div class="d-flex justify-content-center align-items-center teste5" >
                            <input class="radio-form" type="radio" name="sUni" onclick="checkRadioButtonDois(this)">
                            <label> Não.
                            </label>
                            </div>
                    </div>
                </div>
                <br>
                
                <div class="text-center">
                <label for="Nimr">Quantidade de irmãos(ãs):</label>
                <input class="irm" type="number" id="Nimr" name="Nimr" required>
                </div>
                <br>
                <div class="div-com-linha"></div>
                <br>
                <label >Time de Futebol:</label>
                <br>
                <div class="d-flex justify-content-between" >
                    <input type="text"  name="tFut" id="digt-fu" required>
                    <div class="d-flex justify-content-center teste6"  >
                        <input class="radio-form" type="radio" name="NtFut" id="time-futsin" onchange="aoSelecionarInputTres(event)" onclick="checkRadioButton(this)">
                        <label >Não tenho.
                        </label>
                    </div>
                </div>
                <br>
                <label for="Hobby">Hobby(s)</label>
                <br>
                <textarea id="mensagem" name="Hobby" rows="4" cols="50">
                    Conteúdo inicial da área de texto.
                </textarea>
                <br>
                <br>
                <label >Religião:</label>
                <br>
                <div class="d-flex justify-content-between" >
                    <input type="text"  name="tReli" id="dig-reli" required>
                    <div class="d-flex justify-content-center teste6" >
                        <input class="radio-form" type="radio" name="NtReli" id="religiao" onchange="aoSelecionarInputQuatro(event)" onclick="checkRadioButton(this)">
                        <label >Não tenho.
                        </label>
                    </div>
                </div>
                <br>
                <div class="div-com-linha"></div>
               
                <br>
                <div class="text-center">
                <label for="escola">Escola(s) que estou no Fundamental II e tipo(pública ou particular):</label>
                <br>
                <br>
                <textarea id="mensagem" name="escolas" rows="4" cols="50">
                    Conteúdo inicial da área de texto.
                </textarea>
                </div>
                <br>
                <div class="div-com-linha"></div>
                <br>
                <label for="bairro">Bairro em que mora:</label>
                <br>
                <input class="final-form-cont" type="text" id="bairro" name="bairro" required>
                <br>
                <label for="cursoFacul">Curso que pretende fazer na faculdade:</label>
                <br>
                <input class="final-form-cont" type="text" id="cursoFacul" name="cursoFacul" required>
                <br>
                <label for="uniGost">Universidade que gostaria de estudar:</label>
                <br>
                <input class="final-form-cont" type="text" id="uniGost" name="uniGost" required>
                <br>
                <label for="uniCont">Universidade que caso não entre na que quer ficaria contente em estudar:</label>
                <br>
                <input class="final-form-cont" type="text" id="uniCont" name="uniCont" required>
                <br>
                <label for="defPossu">Um defeito que você julga possuir:</label>
                <br>
                <input class="final-form-cont" type="text" id="defPossu" name="defPossu" required>
                <br>
                <label for="VirPossu">Uma virtude que você julga possuir:</label>
                <br>
                <input class="final-form-cont" type="text" id="VirPossu" name="VirPossu" required>
                <br>
                <label for="UmaPal">Como acha que as pessoas ao seu redor te definem em uma palavra:</label>
                <br>
                <input class="final-form-cont" type="text" id="UmaPal" name="UmaPal" required>
                <br>
                <label class="final-form-cont" for="link">Resultado do seu teste BIG 5:</label>
                <br>
                <input class="final-form-cont" type="url" id="link" name="link" placeholder="https://example.com" required>
                    <br>
                    <br>
                    <br>
                    
                
            </div>
            </div>   
        </div>
        <br>
      
        <div class="d-flex justify-content-center forma-text-fx"><p>Faça o teste do Big 5 por <a href="https://bigfive-test.com/pt" target="_blank">aqui</a>.</p></div>
        <div class="d-flex justify-content-center forma-text-fx"><button id="btn-imp" type="submit">Gerar PDF</button></div>
        </form>
        <br>
        <br>
    </div>
  </div>

       
       
  <div class="container p-0">
    <footer>
        <div class="row">
            <div class="col-12 col-sm-6  posi-plat">
                <img width="220px" src="../img/confucio.png" alt="">
            </div>
            <div class="col-12 col-sm-6 posi-txt-plat" >
                <div class="org-fi" style=" height: 100%"> 
                <p class="frase-pensP">“O estudo sem reflexão é uma perda de tempo; a reflexão sem estudo é perigosa.”</p>
                <p class="frase-pensS" >Confúcio.</p>
                </div>
            </div>
        </div>
    </footer>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    </body>
</html>