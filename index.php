<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php hotel</title>
</head>
<body>

<h1>Ex Hotel</h1>

    <?php

        $hotels = [
            [
                'name' => 'Hotel Milano',
                'description' => 'Hotel moderno vicino al centro',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 1.2
            ],
            [
                'name' => 'Hotel Roma',
                'description' => 'Hotel elegante e confortevole',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 0.8
            ],
            [
                'name' => 'Hotel Venezia',
                'description' => 'Hotel economico e accogliente',
                'parking' => true,
                'vote' => 3,
                'distance_to_center' => 2.4
            ],
            [
                'name' => 'Hotel Firenze',
                'description' => 'Hotel raffinato nel cuore della città',
                'parking' => false,
                'vote' => 4,
                'distance_to_center' => 1.5
            ],
            [
                'name' => 'Hotel Torino',
                'description' => 'Struttura moderna con camere spaziose',
                'parking' => true,
                'vote' => 5,
                'distance_to_center' => 2.1
            ],
            [
                'name' => 'Hotel Bologna',
                'description' => 'Hotel semplice e conveniente',
                'parking' => false,
                'vote' => 3,
                'distance_to_center' => 3.2
            ],
            [
                'name' => 'Hotel Napoli',
                'description' => 'Hotel accogliente con vista panoramica',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 1.9
            ],
            [
                'name' => 'Hotel Verona',
                'description' => 'Hotel tranquillo a pochi passi dal centro',
                'parking' => true,
                'vote' => 3,
                'distance_to_center' => 0.7
            ],
            [
                'name' => 'Hotel Genova',
                'description' => 'Hotel moderno vicino alla stazione',
                'parking' => false,
                'vote' => 2,
                'distance_to_center' => 2.8
            ],
            [
                'name' => 'Hotel Palermo',
                'description' => 'Hotel luminoso con ampie camere',
                'parking' => true,
                'vote' => 5,
                'distance_to_center' => 1.3
            ],
        ];



        foreach ($hotels as $hotel) {
            echo "Nome: $hotel[name] <br> ";
        }

    ?>


    
</body>
</html>