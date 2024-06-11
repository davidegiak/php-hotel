<?php
$parking = $_GET['parking'];

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
    <p>
    <?php echo $parking; ?>
    </p>
    <!-- <h2>Migliori hotels del mondooo</h2>
    <div class="myContainer">
        <?php
            foreach ($hotels as $hotel) {
                echo "<ul>";
                echo "<li>" . "<h3>" . $hotel['name'] . "</h3>" . "</li>";
                echo "<li>" . $hotel['description'] . "</li>";
                echo "<li>" . $hotel['parking'] . "</li>";
                echo "<li>" . $hotel['vote'] . "</li>";
                echo "<li>" . $hotel['distance_to_center'] . "</li>";
                echo "</ul>";
            }
        ?>
    </div> -->

</body>

</html>