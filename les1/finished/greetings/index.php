<?php
//Get the number for the current hour (24 clock)
$hours = date('G');

// The default value for the period. If it's not evening, the value will be overwritten.
$period = 'navond';
//Decide the text depending on current time.
// 00, 01, 02, 03, 04, 05
if ($hours < 6) {
    $period = 'nacht';
}
// 06, 07, 08, 09, 10 ,11
elseif ($hours < 12)  {
    $period = 'morgen';
}
elseif ($hours < 18) {
    $period = 'middag';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings | Programmeren 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <h1 class="title">Greetings</h1>
        <h2 class="subtitle">Begroeting op basis van het moment van de dag</h2>
        <p>
            <?= 'Goede' . $period; ?>
        </p>
    </section>

    <footer class="footer mt-4">
        <a href="../index.html">Terug naar het overzicht van de lesopdrachten</a>
    </footer>

</body>
</html>
