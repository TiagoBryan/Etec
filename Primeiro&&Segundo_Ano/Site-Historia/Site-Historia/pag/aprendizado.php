<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flashcards</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@400;700&display=swap">
    <script defer src="../assets/js/flashcards.js"></script>
    <link rel="stylesheet" href="../assets/css/aprendizado.css">
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
        <br class="espaco-invisivel">
        <br class="espaco-invisivel">
        <br class="espaco-invisivel">
        <button class="criar-baralho" onclick="criarBaralho()">Criar Baralho</button>
      </div>
  </div>
  <br><br>
  <div class="row">
      <div class="col ">
        <div class="d-flex justify-content-center">
         
        <div class="area-arma-card">
          <br>
          <br>
            <div class="post-it" id="post-it">
                <div class="separacao_post-it"><h1>Pergunta:</h1>
                  <div style="width: 90%; height: 100%">
                    <textarea class="receber_dados_post-it" name="" id="area-pergunta" cols="30" rows="5"></textarea>
                  </div>
                </div>
                <div class="div-com-linha"></div>
                <div class="separacao_post-it"><h1>Resposta:</h1>
                  <div style="width: 90%; height: 100%">
                      <textarea class="receber_dados_post-it" name="" id="area-resposta" cols="30" rows="5"></textarea>
                    </div>
                </div>
                
            </div>
            <br>
            <div><button class="criar-baralho" id="btnAdicionarCarta" onclick="exibirBaralhosParaAdicionarCarta()">Adicionar Carta</button></div>
            <br>
            <button class="criar-baralho" onclick="limparDados()">Limpar Baralhos</button>
            <br>
            <button class="criar-baralhoDois" id="mostr_respost">Mostrar Resposta/prosseguir</button>
          
            <br>
        </div>
        
        </div>
        <br>
        <br>
      </div>
  </div>
  <div class="row">
    <div class="col text-center"><h2 class="explicacao-flash">Como funciona esse método de estudos?</h2></div>
  </div>
  <div class="row">
    <div class="col text-center"><div class="d-flex justify-content-center"><p class="explicacao-flash">O método de estudo com flashcards é uma técnica de aprendizado ativo que envolve a criação de pequenos cartões, conhecidos como flashcards, nos quais você escreve uma pergunta ou conceito de um lado e a resposta ou informações relevantes do outro lado. Esses flashcards são então usados de maneira repetida e estrategicamente para promover a retenção a longo prazo.</p></div>
    <h2 class="explicacao-flash">Como praticar?</h2>
    <div class="d-flex justify-content-center"><p class="explicacao-flash">Caso não tenha nenhum baralho clique em criar baralho, depois digite uma pergunta e a resposta, ou um conceito, no card da tela e clique em adicionar carta, escolha os baralhos pelo índice, adicione quantas cartas quiser e depois clique em praticar, a pergunta será exibida, e caso queira a resposta cliquem em mostrar resposta, e para ir prosseguindo é só clicar no mesmo botão.</p> </div>
    <p class="redire-link-flash">Saiba mais <a href="https://youtu.be/ks0lH-4H0sA?si=4ekyogFCm12G4b1F" target="_blank">Aqui!</a></p>
    </div>
  </div>
  <br><br>
  <div class="row">
      <div class="col">
        <div class="d-flex justify-content-center">
          
      <ul id="baralhos"></ul>

      <button class="criar-baralho" onclick="praticar()">Praticar</button>
      </div>
      </div>
  </div>
  <!-- Modal -->
<div id="myModal">
  <span class="close" onclick="fecharModal()">&times;</span>
  <h2>Escolha um Baralho para Praticar:</h2>
  <ul id="baralhosList"></ul>
</div>

<!-- Fundo escuro ao redor do modal -->
<div class="modal-background" onclick="fecharModal()"></div>


 <!-- Modal -->
<div id="myModal">
  <span class="close" onclick="fecharModal()">&times;</span>
  <h2>Prática de Baralho</h2>
  <p id="perguntaResposta"></p>
  <button onclick="mostrarProximaCarta()">Próxima Carta</button>
</div>

<!-- Fundo escuro ao redor do modal -->
<div class="modal-background" onclick="fecharModal()"></div>
  <br><br>
</div>





<div class="container p-0" >
    <footer>
        <div class="row">
            <div class="col-12 col-sm-6  posi-plat">
                <img width="130px" src="../img/socrates.png" alt="">
            </div>
            <div class="col-12 col-sm-6 posi-txt-plat" >
                <div class="org-fi" style=" height: 100%"> 
                <p class="frase-pensP">“A única verdadeira sabedoria é saber que você não sabe nada.”</p>
                <p class="frase-pensS" >Sócrates.</p>
                </div>
            </div>
        </div>
    </footer>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>
