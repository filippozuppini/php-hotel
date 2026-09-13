<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>php hotel</title>
</head>


<body>

<h1>Esercizio Php Hotel</h1>

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



        // foreach ($hotels as $hotel) {
        //     echo "<b>Nome:</b> $hotel[name] <br> ";
        //     echo "<b>Descirzione:</b> $hotel[description] <br> ";


        //     echo '<b>Parcheggio privato:</b>' . ($hotel['parking'] === true ? " Si" : " No"). ' <br> ';


        //     echo "<b>Voto:</b> $hotel[vote] stelle <br> ";
        //     echo "<b>Distanza dal centro:</b> $hotel[distance_to_center] km <br> ";

        //     echo "<br>" ;
        // }



    ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Descirzione</th>
              <th scope="col">Parcheggio privato</th>
              <th scope="col">Voto</th>
              <th scope="col">Distanza dal centro</th>
            </tr>
          </thead>
          <tbody>


          <?php 
            foreach ($hotels as $hotel) {
            echo "<tr>
                    <td>$hotel[name]</td>

                    <td>$hotel[description]</td>

                    <td> ". ( $hotel['parking'] === true ? " Si" : " No") . " </td>

                    <td>$hotel[vote]</td>

                    <td>$hotel[distance_to_center] Km</td>
                </tr>";


            }
          
          ?>
            
          </tbody>
        </table>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>