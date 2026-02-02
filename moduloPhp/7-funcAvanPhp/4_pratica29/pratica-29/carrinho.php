<?php

session_start();

$itens = array(
  'Dicionário Português',
  'Livro de Receitas',
  'Livro para Colorir',
  'Mapa das Estradas de Portugal'
);



if (!isset($_SESSION['carrinho'])) {

  $_SESSION['carrinho'] = array();
}

if (isset($_GET['vazio'])) {

  unset($_SESSION['carrinho']);

  header('location: ' . $_SERVER['PHP_SELF'] . '?' . SID);

  exit();
}

$precos = array(9.99, 14.99, 10, 24.99);
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Jaqueline Lima" />

  <meta name="description"
    content="exercicio de criacao de carrinho de compras, incluindo processo de login, recorrendo a PHP" />

  <title>Carrinho</title>

  <link href="estilos.css" rel="stylesheet">
</head>

<body>

  <div class="caixa1">

    <h2>CARRINHO</h2>

    <p>O carrinho tem <?php echo count($_SESSION['carrinho']); ?> itens.</p>

    <table>

      <thead>

        <tr>

          <th>Produto</th>

          <th align="right">Preço</th>

        </tr>

      </thead>

      <tbody>

        <?php

        $total = 0;

        if (!empty($_SESSION['carrinho'])) {
          foreach ($_SESSION['carrinho'] as $idProduto) {
            echo '<tr>';
            echo '<td>' . $itens[$idProduto] . '</td>';
            echo '<td align="right">' . number_format($precos[$idProduto], 2) . ' €</td>';
            echo '</tr>';

            $total += $precos[$idProduto];
          }
        } else {

          echo '<tr><td colspan="2">O carrinho está vazio.</td></tr>';
        }

        ?>

      </tbody>

      <tfoot>
        <tr>
          <th>Total:</th>

          <th align="right">

            <?php echo number_format($total, 2); ?>

            €

          </th>

        </tr>
      </tfoot>

    </table>

    <p>
      <a href="catalogo.php">Continuar a comprar</a>

    </p>

  </div>


</body>

</html>