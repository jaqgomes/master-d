<?php
$hotel = $_GET['hotel'];

if ($hotel == "hotelSaoLourenco") {

    echo "10";

} elseif ($hotel == "lezeriaParqueHotel") {

    echo "20";

} elseif ($hotel == "alojamentoDasFontes") {

    echo "30";

} elseif ($hotel == "casaDaEiraTurismo") {

    echo "40";

} else {

    echo "50";

}
?>