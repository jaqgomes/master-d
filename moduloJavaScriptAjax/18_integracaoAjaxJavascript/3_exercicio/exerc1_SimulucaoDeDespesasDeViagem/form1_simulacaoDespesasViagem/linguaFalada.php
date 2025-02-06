<?php
$hotel = $_GET['linguaFalada'];

if ($hotel == "hotelSaoLourenco") {

    echo "Inglês";
} elseif ($hotel == "lezeriaParqueHotel") {

    echo "Português";
} elseif ($hotel == "alojamentoDasFontes") {

    echo "Madarim";
} elseif ($hotel == "casaDaEiraTurismo") {

    echo "Frances";
} else {
    echo "Espanhol";
}
?>
