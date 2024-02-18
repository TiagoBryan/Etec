<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Cadastro</title>
        <style>
        
            body{
                background-color:#f3f3f3;
               
            }
            .arrumar{
                 overflow-x: hidden;
            }
            .exibir_dados_container{
                width: 50%;  
            }
            .alinhamento{
                display: flex;
                justify-content: center;
                text-align: center;
            }
            
        </style>
    </head>
    <body>
        <main id="teste.classe">
            <div class="container arrumar" style="background-color: white; padding: 0;">
                <div class="row arrumar">
                    <div class="col">
                    <header>
            
                        <nav class="navbar bg-primary navbar-expand-lg " >
                            <div class="container-fluid">
                            <a class="navbar-brand" style="color: white;" href="#">Sistema Web</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: white;">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" style="color: white; opacity: 0.5;" >Consultar</a>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </nav>
                     
                    </header>
                    <br>
                    <div class="alinhamento">
                    
                        <div class="exibir_dados_container">
                        <p class="fs-5 fw-semibold" style="color: black;  margin-bottom: 10px; text-align: start;">Consultar - Contatos Agendados</p> 
                        <div class="table-responsive ">
                        <table class="table align-middle">
                            <thead class="bg-primary">
                            <tr>
                                <th  scope="col">Nome</th>
                                <th  scope="col">Telefone</th>
                                <th  scope="col">Origem</th>
                                <th  scope="col">Contato</th>
                                <th  scope="col">Observação</th>
                                <th scope="col">Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                           
                            <tr>
                                <td>
                                    <?php
                                        require_once("pessoa.class.php");
                                        $pessoa = new Pessoa();
                                        $pessoa->setNome($_POST['nome']);
                                        echo  $pessoa->getNome();
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        require_once("pessoa.class.php");
                                        $pessoa = new Pessoa();
                                        $pessoa->setTelefone($_POST['telefone']);
                                        echo $pessoa->getTelefone();
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        require_once("pessoa.class.php");
                                        $pessoa = new Pessoa();
                                        $pessoa->setOrigem($_POST['origem']);
                                        echo $pessoa->getOrigem();
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        $pessoa->setData($_POST['date']);
                                        echo $pessoa->getData();
                                    ?>
                                </td>
                                <td><?php
                                        require_once("pessoa.class.php");
                                        $pessoa = new Pessoa();
                                        $pessoa->setObservacao($_POST['obs']);
                                        echo $pessoa->getObservacao();
                                    ?></td>
                                <td>
                                    0000
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
                

                            
                        <br>       
            </div>
            
        </main>
        
        
    </body>
