<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Jaqueline Lima" />
  <meta name="description" content="exercicio para criar uma pagina web, com intuito descobrir preco por hora" />

  <title>Exercicio Variaveis de Operadores</title>
</head>

<body>
  <h2>Fórmulario</h2>
  <form action="exercVariaveisOperadores.php" method="post">
    <p>
      <label for="name">Nome:</label>
      <input id="name" name="name" type="text" />
    </p>

    <p>
      <label for="age">Idade:</label>
      <input id="age" name="age" type="number" />
    </p>

    <p>
      <label for="phone">Telemóvel:</label>
      <input id="phone" name="phone" type="phone">
    </p>

    <p>
      <label for="hoursWeek">Horas semanas:</label>
      <input id="hoursWeek" name="hoursWeek" type="hoursWeek">
    </p>

    <p>
      <label for="daysWeek">Dias da semanas:</label>
      <input id="daysWeek" name="daysWeek" type="daysWeek">
    </p>

    <p>
      <label for="priceHour">Preço por hora:</label>
      <input id="priceHour" name="priceHour" type="priceHour">
    </p>

    <input type="submit" name="submit" value="enviar" />

  </form>

  <?php
  $var_name = $_POST['name'];
  echo "Nome: " . $var_name . "<br/>";

  $var_age = $_POST['age'];
  echo "Idade: " . $var_age . "<br/>";

  $var_phone = $_POST['phone'];
  echo "Telemóvel: " . $var_phone . "<br/>";

  $var_hoursWeek = $_POST['hoursWeek'];
  echo "Horas semanais: " . $var_hoursWeek . "<br/>";

  $var_daysWeek = $_POST['daysWeek'];
  echo "Dias da semana: " . $var_daysWeek . "<br/>";

  $var_priceHour = $_POST['priceHour'];
  echo "Preço por hora: " . $var_priceHour . "<br/>";


  //Pagamento Semanal
  $pagamentoSemanal = ($var_daysWeek * $var_hoursWeek) * $var_priceHour;
  echo "Pagamento semanal :" . $pagamentoSemanal . "<br/>";
  ?>
</body>

</html>