<?php
if (isset($_POST['pessoa'])) {
  $pessoa = $_POST['pessoa'];
  $arquivo = 'votos.txt';
  $conteudo = file_get_contents($arquivo);
  $votos = json_decode($conteudo, true);
  if (!is_array($votos)) {
    $votos = [];
  }
  if (isset($votos[$pessoa])) {
    $votos[$pessoa]++;
  } else {
    $votos[$pessoa] = 1;
  }
  $conteudo = json_encode($votos);
  file_put_contents($arquivo, $conteudo);
}
header('Location: votacao.php');
?>