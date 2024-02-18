<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome_dig = $_POST["nome_cookies"];
    $nome_Alt = $_POST["alt_cookies"];
    $excluir = $_POST["excluir"];

    if ($nome_dig && !$excluir) {
        // Define um cookie com o nome 'usuario' e o valor digitado
        setcookie('usuario', $nome_dig, time() + 3600, '/');
        header("Location: index.php");
    } elseif ($nome_Alt && !$excluir) {
        // Altera o valor do cookie para o digitado
        setcookie('usuario', $nome_Alt, time() + 3600, '/');
        header("Location: index.php");
    } elseif ($excluir) {
        // Exclui o cookie 'usuario'
        setcookie('usuario', '', time() - 3600, '/');
        header("Location: index.php");
    }
 
} else {
    header("Location: index.php");
    exit();
}


?>
