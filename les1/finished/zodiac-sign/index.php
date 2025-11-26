<?php
//Fill in your own birthday
$birthday = "0724";

$constellations = [
    [
        "startDate" => "0121",
        "endDate"   => "0218",
        "name"      => "Waterman"
    ],
    [
        "startDate" => "0219",
        "endDate"   => "0320",
        "name"      => "Vissen"
    ],
    [
        "startDate" => "0321",
        "endDate"   => "0420",
        "name"      => "Ram"
    ],
    [
        "startDate" => "0421",
        "endDate"   => "0521",
        "name"      => "Stier"
    ],
    [
        "startDate" => "0522",
        "endDate"   => "0621",
        "name"      => "Tweeling"
    ],
    [
        "startDate" => "0622",
        "endDate"   => "0723",
        "name"      => "Kreeft"
    ],
    [
        "startDate" => "0724",
        "endDate"   => "0823",
        "name"      => "Leeuw"
    ],
    [
        "startDate" => "0824",
        "endDate"   => "0923",
        "name"      => "Maagd"
    ],
    [
        "startDate" => "0924",
        "endDate"   => "1023",
        "name"      => "Weegschaal"
    ],
    [
        "startDate" => "1024",
        "endDate"   => "1122",
        "name"      => "Schorpioen"
    ],
    [
        "startDate" => "1123",
        "endDate"   => "1222",
        "name"      => "Boogschutter"
    ]
//    ,
//    [
//        "startDate" => "1223",
//        "endDate" => "0120",
//        "name" => "Steenbok"
//    ]
];

/**
 * Retrieve constellation for given birthday
 *
 * @param $birthday
 * @param $constellations
 * @return string
 */
function getConstellationForBirthday($birthday, $constellations)
{
    //Default constellation is Steenbok all other will be checked in foreach
    $result = 'Steenbok';

    foreach ($constellations as $constellation) {
        if ($birthday >= $constellation['startDate'] && $birthday <= $constellation['endDate']) {
            $result = $constellation['name'];
        }
    }

    return $result;
}

//Call the function to retrieve your own constellation
$myConstellation = getConstellationForBirthday($birthday, $constellations);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiac Sign | Programmeren 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <h1 class="title">Sterrenbeeld</h1>
        <p>
            Mijn sterrenbeeld is: <?= $myConstellation; ?>
        </p>
    </section>

    <footer class="footer mt-4">
        <a href="../index.html">Terug naar het overzicht van de lesopdrachten</a>
    </footer>

</body>
</html>
