<?php
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $origem = $_POST['origem'];
    $data = $_POST['data'];
    $obs = $_POST['obs'];

    print "Nome: <strong> $nome </strong> </br>";
    print "Telefone: <strong> $telefone </strong> </br>";
    print "Origem: <strong> $origem </strong> </br>";
    print "Data: <strong> $data </strong> </br>";
    print "Observação: <strong> $obs </strong> </br>";


?>