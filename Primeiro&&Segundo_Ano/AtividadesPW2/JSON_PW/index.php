<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Oficina</title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/funcoes.js"></script>
    </head>

    <body>
		<div class="form">
            <form id="pesquisa" action="" method="post">
                <label for="marca">Procurar Marca:</label>
                <input type="text" id="marca" name="marca"><br>

                <label for="nome">Procurar Nome:</label>
                <input type="text" id="nome" name="nome"><br>

                <input type="submit" value="Filtrar">
            </form>
        </diV>

		<table id="tabela" border="1">
    		<thead>
				<tr>
					<th scope="col">Marca</th>
					<th scope="col">Carro</th>
					<th scope="col">Camber Dianteiro Mínimo</th>
					<th scope="col">Camber Dianteiro Máximo</th>
					<th scope="col">Caster Dianteiro Mínimo</th>
					<th scope="col">Caster Dianteiro Máximo</th>
					<th scope="col">Convergência Dianteira Mínimo</th>
					<th scope="col">Convergência Dianteira Máximo</th>
					<th scope="col">Camber Traseiro Mínimo</th>
					<th scope="col">Camber Traseiro Máximo</th>
					<th scope="col">Convergência Dianteira Mínimo</th>
					<th scope="col">Convergência Dianteira Máximo</th>				
				</tr>
			</thead>
        	<tbody id="TableData">
        	
        	</tbody>
        </table>
    </body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strtoupper($_POST['nome']);
    $marca = strtoupper($_POST['marca']);
}

echo "<script>$('#TableData').empty();</script>";
$json = file_get_contents('js/automoveis.json');
$data = json_decode($json, true);



foreach ($data['automoveis'] as $automovel) {
    if ((empty($nome) || stripos($automovel['CARRO'], $nome) !== false) &&
        (empty($marca) || stripos($automovel['MARCA'], $marca) !== false)) {
        
      

        echo "<script>$('#TableData').append('<tr>');</script>";

        foreach ($automovel as $prop => $value) {
            echo "<script>$('#TableData').append('<td scope=\"col\">$value</td>');</script>";
        }

        echo "<script>$('#TableData').append('</tr>');</script>";
    }
}


?>
