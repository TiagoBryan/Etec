<?php 

// Verifica se o arquivo foi enviado sem erros
if (isset($_FILES['picture__input']) && $_FILES['picture__input']['error'] == 0) {
    // Caminho do arquivo temporário
    $tempFilePath = $_FILES['picture__input']['tmp_name'];

    // Nome do arquivo original
    $originalFileName = $_FILES['picture__input']['name'];

    // Move o arquivo para o diretório desejado
    $destinationPath = "../img/" . $originalFileName;
    move_uploaded_file($tempFilePath, $destinationPath);

    echo "Upload bem-sucedido. O arquivo foi salvo em: " . $destinationPath;
} else {
    echo "Erro ao fazer o upload do arquivo.";
}
 $checkar = ""; $checkar2 = ""; $checkar3 = ""; $checkar4 = ""; $checkar5 = "";  $checkar6 = "checked";
    $nome = $_POST['nome'];
    $nasc = $_POST['datan'];
    $locn = $_POST['locn'];
    $idade = $_POST['idade'];
    $Npai = $_POST['Pai'];
    $Nmae = $_POST['mae'];
    $NNPais = $_POST['npais'];
    $Opai = $_POST['O-Pai'];
    $Omae = $_POST['O-mae'];
    $NOpais = $_POST['nopais'];
    $sUni = $_POST['sUni'];
    $irmao = $_POST['Nimr'];
    $tFut = $_POST['tFut']; 
    $NtFut = $_POST['NtFut'];
    $Hobby = $_POST['Hobby'];
    $tReli = $_POST['tReli']; 
    $NtReli = $_POST['NtReli'];
    $escolas = $_POST['escolas'];
    $bairro  = $_POST['bairro'];
    $cursoFacul  = $_POST['cursoFacul'];
    $uniGost  = $_POST['uniGost'];
    $uniCont  = $_POST['uniCont'];
    $defPossu  = $_POST['defPossu'];
    $VirPossu  = $_POST['VirPossu'];
    $UmaPal  = $_POST['UmaPal'];
    $link = $_POST['link'];

    if(isset($NtFut)){
        $checkar = "checked";
        echo $checkar;
    }
    if(isset($NNPais)){
        $checkar2 = "checked";
        echo $checkar;
    } 
    if(isset($NOpais)){
        $checkar3 = "checked";
        echo $checkar;
    } 
    if(isset($NtReli)){
        $checkar4 = "checked";
        echo $checkar;
    } 
    if(isset($sUni)){
        $checkar5 = "checked";
        $checkar6 = "";
        echo $checkar;
    } 

?>

<div class="d-flex justify-content-center" id="capturar-impressao">
            <div class="area-form" >
                <br>
                <br>
                <div class="teste">
                <div class="area-tite-fi"><h2 class="tite-fi">Ficha Técnica</h2></div></div>
                
            <form id="form_FichaTecnica" action="impri.php" method="post">
            <div id="conteudo_impressao">
                <br>
                <div class="teste">
                <label class="picture" for="picture__input" tabIndex="0">
                <span class="picture__image">
                    <?php
                    
                    echo '<img src="' . $destinationPath . '" alt="Imagem">';
                    ?>
                </span>
                </label>
                <input type="file" name="picture__input" id="picture__input">
                </div>
                <br>
                <div class="div-com-linha"></div>
                <br>
                <div class="teste2">
                <label for="nome">Nome completo:</label>
                <input type="text" id="nome" name="nome" value="<?= $nome?>" required>
                </div>
                <br>
                <div class="teste2">
                <label for="datan">Data de nascimento:</label>
                <input type="date" id="datan" name="datan" value="<?= $nasc?>" required>
                </div>
                <br>
                <div class="teste2">
                <label for="locn">Local de nascimento:</label>
                <input type="text" id="locn" name="locn" value="<?= $locn?>" required>
                </div>
                <br>
                <div class="teste2">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" value="<?= $idade?>" required>
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
                            <input class="formatacao" type="text" id="Pai" name="Pai" value="<?= $Npai?>" required>
                        </div>
                        <br>
                        <div class="teste2">
                            
                            <label for="mae">Mãe:</label>
                            <input class="formatacao" type="text" id="mae" name="mae" value="<?= $Nmae?>" required>
                        </div>
                        
                    </div>
                    <div class="col" >
                        <div class="d-flex justify-content-center align-items-center teste4" >
                        <input class="radio-form" type="radio" name="npais" value="NNPais" <?= $checkar2 ?>>
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
                            <input class="formatacao" type="text" id="O-Pai" value="<?= $Opai?>" name="O-Pai" required>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between">
                            
                            <label for="O-mae">Mãe:</label>
                            <input class="formatacao" type="text" id="O-mae" value="<?= $Omae?>" name="O-mae" required>
                        </div>
                        
                    </div>
                    <div class="col" >
                        <div class="d-flex justify-content-center align-items-center teste4" >
                        <input class="radio-form" type="radio"  name="nopais" <?= $checkar3 ?>>
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
                            <input class="radio-form" type="radio" name="sUni" <?= $checkar5 ?>>
                            <label> Sim.
                            </label>
                            </div>
                            </div>
                    </div>
                    <div class="col" >
                            <div class="d-flex justify-content-center align-items-center teste5" >
                            <input class="radio-form" type="radio" name="sUni" <?= $checkar6 ?>>
                            <label> Não.
                            </label>
                            </div>
                    </div>
                </div>
                <br>
                
                <div class="text-center">
                <label for="Nimr">Quantidade de irmãos(ãs):</label>
                <input class="irm" type="number" id="Nimr" name="Nimr" value="<?= $irmao?>" required>
                </div>
                <br>
                <div class="div-com-linha"></div>
                <br>
                <label >Time de Futebol:</label>
                <br>
                <div class="d-flex justify-content-between" >
                    <input type="text" id="tFut" name="tFut" value="<?= $tFut?>" required>
                    <div class="d-flex justify-content-center teste6"  >
                        <input class="radio-form" type="radio" name="NtFut"  <?= $checkar ?>>
                        <label >Não tenho.
                        </label>
                    </div>
                </div>
                <br>
                <label for="Hobby">Hobby(s)</label>
                <br>
                <textarea id="mensagem" name="Hobby" rows="4" cols="50" value="<?= $Hobby?>">
                <?= $Hobby?>
                </textarea>
                <br>
                <br>
                <label >Religião:</label>
                <br>
                <div class="d-flex justify-content-between" >
                    <input type="text" id="tReli" name="tReli" value="<?=$tReli?>" required>
                    <div class="d-flex justify-content-center teste6" >
                        <input class="radio-form" type="radio" name="NtReli" <?= $checkar4 ?>>
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
                <textarea id="mensagem" name="escolas" rows="4" cols="50" value="<?= $escolas?>">
                <?= $escolas?>
                </textarea>
                </div>
                <br>
                <div class="div-com-linha"></div>
                <br>
                <label for="bairro">Bairro em que mora:</label>
                <br>
                <input class="final-form-cont" type="text" id="bairro" name="bairro" value="<?= $bairro?>" required>
                <br>
                <label for="cursoFacul">Curso que pretende fazer na faculdade:</label>
                <br>
                <input class="final-form-cont" type="text" id="cursoFacul" name="cursoFacul" value="<?= $cursoFacul?>" required>
                <br>
                <label for="uniGost">Universidade que gostaria de estudar:</label>
                <br>
                <input class="final-form-cont" type="text" id="uniGost" name="uniGost" value="<?= $uniGost?>" required>
                <br>
                <label for="uniCont">Universidade que caso não entre na que quer ficaria contente em estudar:</label>
                <br>
                <input class="final-form-cont" type="text" id="uniCont" name="uniCont" value="<?= $uniCont?>" required>
                <br>
                <label for="defPossu">Um defeito que você julga possuir:</label>
                <br>
                <input class="final-form-cont" type="text" id="defPossu" name="defPossu" value="<?= $defPossu?>" required>
                <br>
                <label for="VirPossu">Uma virtude que você julga possuir:</label>
                <br>
                <input class="final-form-cont" type="text" id="VirPossu" name="VirPossu" value="<?= $VirPossu?>" required>
                <br>
                <label for="UmaPal">Como acha que as pessoas ao seu redor te definem em uma palavra:</label>
                <br>
                <input class="final-form-cont" type="text" id="UmaPal" name="UmaPal" value="<?= $UmaPal?>" required>
                <br>
                <label class="final-form-cont" for="link">Resultado do seu teste BIG 5:</label>
                <br>
                <input class="final-form-cont" type="url" id="link" name="link" placeholder="https://example.com" value="<?= $link?>" required>
                    <br>
                    <br>
                  
                </form>
            </div>
            </div>   


            <script>

                const conteudo = document.getElementById("capturar-impressao").innerHTML;
    

                let estilo = "<style>";
                estilo += "#picture__input{display:none}.teste2{display: flex;justify-content: space-between;}.teste{display: flex;justify-content: center;}.picture{width:150px;height:150px;aspect-ratio:16/9;background:#ddd;display:flex;align-items:center;justify-content:center;color:#aaa;border:2px solid currentcolor;cursor:pointer;font-family:sans-serif;transition:color 300ms ease-in-out,background 300ms ease-in-out;outline:none;overflow:hidden;border-radius:100%;font-size:15px}.picture:hover{color:#777;background:#ccc}.picture:active{border-color:turquoise;color:turquoise;background:#eee}.picture:focus{color:#777;background:#ccc;box-shadow:0 0 10px rgba(0,0,0,0.3)}.picture__img{width:150px;height:150px;border-radius:100%}h1{font-size:20px;color:#9A6B6B;font-weight:600}.area-form{background-color:#AB8B8B;border-radius:25px;width:70%;padding:0 100px}.area-tite-fi{background-color:#FDEEE7;width:35%;text-align:center;padding:15px;border-radius:10px}.tite-fi{font-size:35px;color:#4B3B33;font-family:'Darker Grotesque',sans-serif}.div-com-linha::after{content:'';display:block;border-bottom:6px solid #655656;margin-top:10px}";
                estilo += ".label{color:#FDEEE7;font-size:25px;font-family:'Darker Grotesque',sans-serif}.input{background-color:#D9D9D9;border-radius:10px;width:52%;height:35px;border:none}.input.formatacao{width:85%}.radio-form{width:25px}.irm{width:20%}.textarea{background-color:#D9D9D9;width: 52%;border-radius:10px;border:none}.final-form-cont{width:100%}.forma-text-fx{color:#9A6B6B;font-size:20px;font-weight:bold}";
                estilo += "</style>";

                const win = window.open('','', 'height=9000, width=1000');

                win.document.write('<html><head>');
                win.document.write('<title>Ficha Técnica</title>');
                win.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">');
                win.document.write('<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@400;700&display=swap">');
                win.document.write(estilo);
                win.document.write('</head>');
                win.document.write('<body>');
                win.document.write('<div class="teste">');
                win.document.write(conteudo);
                win.document.write('</div></body><html>');
               

                setTimeout(function() {
                    win.print();
                    win.close();
                    window.location.href = 'ficha-tecnica.php';
                }, 2000);
                   
                   
                   
                    
             
                
           
            </script>