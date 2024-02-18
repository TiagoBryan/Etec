<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulção cookies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
     $nomeUsuario ="???";
     $disable = "";
     $disable2 = "";
  
    if(isset($_COOKIE['usuario'])){
        if(empty($_COOKIE['usuario'])){
            $nomeUsuario = "???";
        }else{
        $nomeUsuario = $_COOKIE['usuario'];}
        $disable = "";
        $disable2 = "disabled";

    }
    if (!isset($_COOKIE['usuario'])) {
        $nomeUsuario = "O cookie 'usuario' foi excluído com sucesso!";
        $disable = "disabled";
        $disable2 = "";
    }
    
    ?>
<div class="container" >

    <div class="content">      

      <div id="Area">
        <form method="post" action="cookies.php"> 
          <h1>Manipulção de Cookies</h1> 
          
          <p> 
            <label for="nome_cookies" >Nome para armazenar no cookie</label>
            <input id="nome_cookies" name="nome_cookies" required="required" type="text" placeholder="<?=$nomeUsuario?>" <?=$disable2?>/>
          </p>
          
          <p> 
            <label for="alt_cookies" >Alterar nome no cookie</label>
            <input id="alt_cookies" name="alt_cookies" required="required" type="text"  placeholder="<?=$nomeUsuario?>" <?=$disable?>/> 
          </p>
          
  
          <p> 
            <input class="salv" type="submit" value="Salvar"/> 
          </p>

        </form>
        <form method="post" action="cookies.php"> 
                <button><input type="submit" name="excluir" value="Excluir cookies"/> </button>
                </form>
                <p class="link">
                Olá, <?=$nomeUsuario?></p>
      </div>
    </div>
  </div> 

    
</body>
</html>