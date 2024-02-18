<?php
if(isset($_GET['email']) && isset($_GET['senha'])){
    $email = $_GET['email'];
    $senha = $_GET['senha'];     
}

$url = "confirmar.php?email=" . urlencode($email) . "&senha=" . urlencode($senha);
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
        .card-login{
            width: 400px;
            
            margin: 0 auto;
            padding: 30px 10px 10px 10px;
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
                <div class="card-login">
                    <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="<?php echo $url; ?>" method="post">
                <div class="form-group mb-3">
                  <input name="emailUser" type="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group mb-3">
                  <input name="senhaUser" type="password" class="form-control" placeholder="Senha" required>
                </div>
                
                <button style="width: 100%;" class="btn btn-info p-2 fs-5 text-white" type="submit">Entrar</button>
                
                
              </form>
            </div>
          </div>
                </div>
            </div>
        </div>
    </nav>
    
</body>
</html>