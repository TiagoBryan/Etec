<?php
$resultado ="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupere a opção escolhida
        $competencia = $_POST["opcoes"];
        $esforco = $_POST["opcoesE"];
        $trabalho = $_POST["opcoesT"];
        $interesse = $_POST["opcoesI"];
        $Atitude = $_POST["opcoesA"];
    
        // Execute a ação com base na opção escolhida
        switch ($competencia) {
            case "opcao1":
                $Com = 10;
                break;
            case "opcao2":
                $Com = 9;
                break;
            case "opcao3":
                $Com = 8;
                break;
            case "opcao4":
                $Com = 7;
                break;
            case "opcao5":
                $Com = 6;
                break;
            case "opcao6":
                $Com = 5;
                break;
            case "opcao7":
                $Com = 4;
                break;
            case "opcao8":
                $Com = 3;
                break;
            case "opcao9":
                $Com = 2;
                break;
            case "opcao10":
                $Com = 1;
                break;
            case "opcao11":
                $Com = 0;
                break;
            // Adicione mais casos conforme necessário
            default:
                echo "Opção inválida";
        }

        // Execute a ação com base na opção escolhida
        switch ($esforco) {
            case "opcao1":
                $Esf = 10;
                break;
            case "opcao2":
                $Esf = 9;
                break;
            case "opcao3":
                $Esf = 8;
                break;
            case "opcao4":
                $Esf = 7;
                break;
            case "opcao5":
                $Esf = 6;
                break;
            case "opcao6":
                $Esf = 5;
                break;
            case "opcao7":
                $Esf = 4;
                break;
            case "opcao8":
                $Esf = 3;
                break;
            case "opcao9":
                $Esf = 2;
                break;
            case "opcao10":
                $Esf = 1;
                break;
            case "opcao11":
                $Esf = 0;
                break;
            // Adicione mais casos conforme necessário
            default:
                echo "Opção inválida";
        }

        switch ($trabalho) {
            case "opcao1":
                $trab = 10;
                break;
            case "opcao2":
                $trab = 9;
                break;
            case "opcao3":
                $trab = 8;
                break;
            case "opcao4":
                $trab = 7;
                break;
            case "opcao5":
                $trab = 6;
                break;
            case "opcao6":
                $trab = 5;
                break;
            case "opcao7":
                $trab = 4;
                break;
            case "opcao8":
                $trab = 3;
                break;
            case "opcao9":
                $trab = 2;
                break;
            case "opcao10":
                $trab = 1;
                break;
            case "opcao11":
                $trab = 0;
                break;
            // Adicione mais casos conforme necessário
            default:
                echo "Opção inválida";
        }
        switch ($interesse) {
            case "opcao1":
                $inte = 10;
                break;
            case "opcao2":
                $inte = 9;
                break;
            case "opcao3":
                $inte = 8;
                break;
            case "opcao4":
                $inte = 7;
                break;
            case "opcao5":
                $inte = 6;
                break;
            case "opcao6":
                $inte = 5;
                break;
            case "opcao7":
                $inte = 4;
                break;
            case "opcao8":
                $inte = 3;
                break;
            case "opcao9":
                $inte = 2;
                break;
            case "opcao10":
                $inte = 1;
                break;
            case "opcao11":
                $inte = 0;
                break;
            // Adicione mais casos conforme necessário
            default:
                echo "Opção inválida";
        }
        switch ($Atitude) {
            case "opcao1":
                $ati = 10;
                break;
            case "opcao2":
                $ati = 9;
                break;
            case "opcao3":
                $ati = 8;
                break;
            case "opcao4":
                $ati = 7;
                break;
            case "opcao5":
                $ati = 6;
                break;
            case "opcao6":
                $ati = 5;
                break;
            case "opcao7":
                $ati = 4;
                break;
            case "opcao8":
                $ati = 3;
                break;
            case "opcao9":
                $ati = 2;
                break;
            case "opcao10":
                $ati = 1;
                break;
            case "opcao11":
                $ati = 0;
                break;
            // Adicione mais casos conforme necessário
            default:
                echo "Opção inválida";
        }

        $result = ($ati+$inte+$trab+$Esf+$Com)/5;
         $result = round($result);
        switch ($result) {
            case 10:
                $resultado = "MB+";
                break;
            case 9:
                $resultado = "MB";
                break;
            case 8:
                $resultado = "MB-";
                break;
            case 7:
                $resultado = "B+";
                break;
            case 6:
                $resultado = "B";
                break;
            case 5:
                $resultado = "B-";
                break;
            case 4:
                $resultado = "R+";
                break;
            case 3:
                $resultado = "R";
                break;
            case 2:
                $resultado = "R-";
                break;
            case 1:
                $resultado = "I";
                break;
            case 0:
                $resultado = "I-";
                break;
            // Adicione mais casos conforme necessário
            default:
                $resultado = "I-";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Avaliação</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@400;700&display=swap">
   
    <link rel="stylesheet" href="../assets/css/avaliacao.css">
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
                <br class="espaco">
                <br class="espaco">
                <br class="espaco">
                <br class="espaco">

                <br class="espaco">
                
                <h1 class="titulo-avalia">Tabela de valores e definições:</h1>
                <br>
                <br>
            </div>
        </div>
        <div class="row" style="padding: 5px">
            <div class="col-12 col-sm-6 text-center" >
               <div class="row padding-aa" >
                    <div class="col" style="border: 1px solid black; padding: 15px; background-color: white; border-radius: 10px 0px 0px 10px ">
                    <div style="">
                        <p> <strong> Nota </strong></p>
                        <hr>
                        <p>MB+</p>
                        <hr>
                        <p>MB</p>
                        <hr>
                        <p>MB-</p>
                        <hr>
                        <p>B+</p>
                        <hr>
                        <p>B</p>
                        <hr>
                        <p>B-</p>
                        <hr>
                        <p>R+</p>
                        <hr>
                        <p>R</p>
                        <hr>
                        <p>R-</p>
                        <hr>
                        <p>I</p>
                        <hr>
                        <p>I-</p>
                        </div>
                    </div>
                    <div class="col" style="border: 1px solid black; padding: 15px; background-color: white; border-radius: 0px 10px 10px 0px ">
                    <p> <strong>Valor </strong></p>
                        <hr>
                        <p>10</p>
                        <hr>
                        <p>9</p>
                        <hr>
                        <p>8</p>
                        <hr>
                        <p>7</p>
                        <hr>
                        <p>6</p>
                        <hr>
                        <p>5</p>
                        <hr>
                        <p>4</p>
                        <hr>
                        <p>3</p>
                        <hr>
                        <p>2</p>
                        <hr>
                        <p>1</p>
                        <hr>
                        <p>0</p>
                    </div>
               </div>
           
            </div>
            
            <div class="col-12 col-sm-6 " style="padding: 0px 60px">
                <div class="d-flex flex-column " style="height: 100%; justify-content: space-around">
                <div><h1 class="titulo-avalia">Competência: O executar as tarefas</h1>    <div class="div-com-linha"></div></div>
                <div><h1 class="titulo-avalia">Esforço: Se faz algo, tem algum esforço</h1>    <div class="div-com-linha"></div></div>
                <div><h1 class="titulo-avalia">Trabalho: Faz ou não, algo na sala</h1>    <div class="div-com-linha"></div></div>
                <div><h1 class="titulo-avalia">Interesse: O quanto de interesse tem/demonstra ter</h1>    <div class="div-com-linha"></div></div>
                <div><h1 class="titulo-avalia">Atitude: Como se porta na sala</h1></div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="row">
            <div class="col text-center">
            <h1 class="titulo-avalia">Tabela de valores e definições:</h1>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            <div class="d-flex justify-content-center"> 
            <div class="card-form-calc">
                <form action="" method="post">
                    <div class="d-flex flex-column" style="height: 280px; justify-content: space-between; ">
                    <div class="d-flex ">
                    <label for="">Competência:</label>
                    <select id="opcoes" name="opcoes">
                    <option value="opcao1">MB+</option>
                    <option value="opcao2">MB</option>
                    <option value="opcao3">MB-</option>
                    <option value="opcao4">B+</option>
                    <option value="opcao5">B</option>
                    <option value="opcao6">B-</option>
                    <option value="opcao7">R+</option>
                    <option value="opcao8">R</option>
                    <option value="opcao9">R-</option>
                    <option value="opcao10">I</option>
                    <option value="opcao11">I-</option>
                    
                    </select>
                    </div>
                    <div class="d-flex ">
                    <label for="">Esforço:</label>
                    <select id="opcoesE" name="opcoesE">
                    <option value="opcao1">MB+</option>
                    <option value="opcao2">MB</option>
                    <option value="opcao3">MB-</option>
                    <option value="opcao4">B+</option>
                    <option value="opcao5">B</option>
                    <option value="opcao6">B-</option>
                    <option value="opcao7">R+</option>
                    <option value="opcao8">R</option>
                    <option value="opcao9">R-</option>
                    <option value="opcao10">I</option>
                    <option value="opcao11">I-</option>
                    
                    </select>
                    </div>
                    <div class="d-flex ">
                    <label for="">Trabalho:</label>
                    <select id="opcoesT" name="opcoesT">
                    <option value="opcao1">MB+</option>
                    <option value="opcao2">MB</option>
                    <option value="opcao3">MB-</option>
                    <option value="opcao4">B+</option>
                    <option value="opcao5">B</option>
                    <option value="opcao6">B-</option>
                    <option value="opcao7">R+</option>
                    <option value="opcao8">R</option>
                    <option value="opcao9">R-</option>
                    <option value="opcao10">I</option>
                    <option value="opcao11">I-</option>
                    
                    </select>
                    </div>
                    <div class="d-flex ">
                    <label for="">Interesse:</label>
                    <select id="opcoesI" name="opcoesI">
                    <option value="opcao1">MB+</option>
                    <option value="opcao2">MB</option>
                    <option value="opcao3">MB-</option>
                    <option value="opcao4">B+</option>
                    <option value="opcao5">B</option>
                    <option value="opcao6">B-</option>
                    <option value="opcao7">R+</option>
                    <option value="opcao8">R</option>
                    <option value="opcao9">R-</option>
                    <option value="opcao10">I</option>
                    <option value="opcao11">I-</option>
                    
                    </select>
                    </div>
                    <div class="d-flex ">
                    <label for="">Atitude:</label>
                    <select id="opcoesA" name="opcoesA">
                    <option value="opcao1">MB+</option>
                    <option value="opcao2">MB</option>
                    <option value="opcao3">MB-</option>
                    <option value="opcao4">B+</option>
                    <option value="opcao5">B</option>
                    <option value="opcao6">B-</option>
                    <option value="opcao7">R+</option>
                    <option value="opcao8">R</option>
                    <option value="opcao9">R-</option>
                    <option value="opcao10">I</option>
                    <option value="opcao11">I-</option>
                    
                    </select>
                    </div>
                    </div>
                
            </div>
            </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col text-center">
                <strong>Fórmula:</strong>
            <math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
                <mfrac>
                <mrow>
                    <mo>(</mo>
                    <mi>C</mi>
                    <mo>+</mo>
                    <mi>E</mi>
                    <mo>+</mo>
                    <mi>T</mi>
                    <mo>+</mo>
                    <mi>I</mi>
                    <mo>+</mo>
                    <mi>A</mi>
                    <mo>)</mo>
                </mrow>
                <mrow>
                    <mn>5</mn>
                </mrow>
                </mfrac>
            </math>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <br>
                <br>
                <strong>Resultado: <?= $resultado ?></strong>
                
                <br>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <br>
                <br>
                <button type="submit" class="calcular-ava">Calcular</button>
                </form>
                <br>
                <br>
            </div>
        </div>
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
