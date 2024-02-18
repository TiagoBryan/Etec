<?php


$email = $_POST['email'];
$senha = $_POST['senha'];
$url = "logar.php?email=" . urlencode($email) . "&senha=" . urlencode($senha);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
    <title>Home</title>
    <style>
        .cadastro_efetuado{
            width: 440px;
           
                margin: 100px auto;
        }
    </style>
   
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo_votar.png" width="50" height="45" class="ms-2 d-inline-block align-center" alt="">
        Central de Votação
      </a>
    </nav>
    </header>
    <nav>
        <div class="container">
            <div class="row">
            <div class="cadastro_efetuado">
            <p class="fs-4 text-center">Cadastro efetuado com sucesso! 😄😄</p>
            <a href="<?php echo $url; ?>">Continuar</a>
        </div>
            </div>
        </div>
        
    </nav>
    
</body>
</html>