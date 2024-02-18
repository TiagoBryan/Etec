<?php
$arquivo = 'votos.txt';
$conteudo = file_get_contents($arquivo);
$votos = json_decode($conteudo, true);
if (!is_array($votos)) {
  $votos = [];
}
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
    <br>
    <br>
    <nav>
        <div class="container" style="background-color: #DFD9D9;" >
            <div class="row">
                <h2 class="text-center mt-4">Quem é melhor?</h2>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col text-center">
                    <div>
                    <img class="img-fluid" width="300px" height="400px" src="tesla.jpeg" alt="">
                    </div>
                    <br>
                    <form method="post" action="processa_votos.php">
                    <input type="hidden" name="pessoa" value="1">
                    <input type="submit" value="Votar" class="btn btn-info btn-lg">
                    
                    </form>
                </div>
                
                <div class="col text-center">
                    <div>
                    <img class="img-fluid"  width="300px" height="450px"src="einstein.jpg" alt="">
                    </div>
                    <br>
                    <form method="post" action="processa_votos.php">
                    <input type="hidden" name="pessoa" value="2">
                    <input type="submit" value="Votar" class="btn btn-info btn-lg">
                    </form>
                </div>
                
            </div>
            <br>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div id="placar">
               <h3 class="text-center text-danger">Resultado da Votação! <?php echo isset($votos[1]) ? $votos[1] : 0 ?> X <?php echo isset($votos[2]) ? $votos[2] : 0 ?></h3> 
               </div>
            </div>
        </div>
    </nav>
    
</body>
</html>