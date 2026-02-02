<?php

session_start();

if (!isset($_SESSION['carrinho'])) {

	$_SESSION['carrinho'] = array();
}

if (isset($_GET['comprar'])) {

	$_SESSION['carrinho'][] = $_GET['comprar'];

	header('location: ' . $_SERVER['PHP_SELF']);

	exit();
}

$itens = array(
	'Dicionário Português',
	'Livro de Receitas',
	'Livro para Colorir',
	'Mapa das Estradas de Portugal'
);

$precos = array(9.99, 14.99, 10, 24.99);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Jaqueline Lima" />
	<meta name="description"
		content="exercicio de criacao de carrinho de compras, incluindo processo de login, recorrendo a PHP" />

	<link href="estilos.css" rel="stylesheet">
	<title>Catálogo de Livros</title>

</head>

<body>

	<div class="caixa0">

		<span id="logo">

			<img src="logo.png">

		</span>
	</div>

	<div class="caixa1">

		<h2>CATÁLOGO</h2>

		<p>O carrinho tem

			<?php

			echo count($_SESSION['carrinho']); ?>

			itens.

		</p>

		<p>
			<a href="carrinho.php" class="botao">

				Ver carrinho
			</a>
		</p>

		<table class="catalogo">
			<thead>
				<tr>
					<th>Produto</th>
					<th>Preço</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>

				<?php
				for ($i = 0; $i < count($itens); $i++) {

					echo '<tr>';

					echo '<td>' . $itens[$i] . '</td>';

					echo '<td align = "right">' . number_format($precos[$i], 2) . ' €</td>';

					echo '<td><a href="' . $_SERVER['PHP_SELF'] . ' ?comprar=' . $i . '" class="botao">Comprar</a></td>';

					echo '</tr>';


				}
				?>

			</tbody>

		</table>
	</div>

</body>