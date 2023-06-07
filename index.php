<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<body>
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
    ?>
    <h1 class="d-flex justify-content-center">
        HOTEL MIGLIORI
    </h1>
    <table class="table table-striped table-dark mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">Nome</th>
                <th scope="col" class="text-center">Descrizione</th>
                <th scope="col" class="text-center">Parcheggio</th>
                <th scope="col" class="text-center">Voto</th>
                <th scope="col" class="text-center">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">
                    <?php foreach ($hotels as $hotel) {
                        echo $hotel['name'] . '<br><br>';
                    }
                    ?>
                </td>
                <td class="text-center">
                    <?php foreach ($hotels as $hotel) {
                        echo $hotel['description'] . '<br><br>';
                    }
                    ?>
                </td>
                <td class="text-center">
                    <?php foreach ($hotels as $hotel) {
                        echo ($hotel['parking'] ? 'Sì' : 'No') . '<br><br>';
                    }
                    ?>
                </td>
                <td class="text-center">
                    <?php foreach ($hotels as $hotel) {
                        echo $hotel['vote'] . '<br><br>';
                    }
                    ?>
                </td>
                <td class="text-center">
                    <?php foreach ($hotels as $hotel) {
                        echo $hotel['distance_to_center'] . ' km<br><br>';
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>





    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>


</html>