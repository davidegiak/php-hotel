<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],


];

$parking = $_GET["park"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h2>Migliori hotels del mondooo</h2>
    <div class="myContainer">
        <?php
        if ($parking == 'tutti') {
            foreach ($hotels as $hotel) {
                echo "<ul>";
                echo "<li>" . "<h3>" . $hotel['name'] . "</h3>" . "</li>";
                echo "<li>" . 'descrizione:' . $hotel['description'] . "</li>";
                echo "<li>" . 'N° Parcheggi:' . $hotel['parking'] . "</li>";
                echo "<li>" . 'Voto:' . $hotel['vote'] . "</li>";
                echo "<li>" . 'Distanza dal centro:' . $hotel['distance_to_center'] . "</li>";
                echo "</ul>";
            }
        } elseif ($parking == 'assente') {
            foreach ($hotels as $hotel) {
                if ($hotel['parking'] <= 0) {
                    echo "<ul>";
                    echo "<li>" . "<h3>" . $hotel['name'] . "</h3>" . "</li>";
                    echo "<li>" . 'descrizione:' . $hotel['description'] . "</li>";
                    echo "<li>" . 'N° Parcheggi:' . $hotel['parking'] . "</li>";
                    echo "<li>" . 'Voto:' . $hotel['vote'] . "</li>";
                    echo "<li>" . 'Distanza dal centro:' . $hotel['distance_to_center'] . "</li>";
                    echo "</ul>";
                }
            }
        } elseif ($parking == 'presente') {
            foreach ($hotels as $hotel) {
                if ($hotel['parking'] > 0) {
                    echo "<ul>";
                    echo "<li>" . "<h3>" . $hotel['name'] . "</h3>" . "</li>";
                    echo "<li>" . 'descrizione:' . $hotel['description'] . "</li>";
                    echo "<li>" . 'N° Parcheggi:' . $hotel['parking'] . "</li>";
                    echo "<li>" . 'Voto:' . $hotel['vote'] . "</li>";
                    echo "<li>" . 'Distanza dal centro:' . $hotel['distance_to_center'] . "</li>";
                    echo "</ul>";
                }
            }
        }
        ?>
    </div>

</body>

</html>