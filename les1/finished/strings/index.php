<?php
// complete the following statements
$lastName = "Pikaar";

// URI to use in the link
$url = 'https://forebears.io/nl/surnames/';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings | Programmeren 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <h1 class="title">My last name</h1>
        <p><?= $lastName ?></p>
        <p>
            <!--Add the variables $myName and $url to the link-->
            <a href="<?= $url.$lastName ?>">Link to <?= $url.$lastName ?></a>
        </p>
    </section>

    <footer class="footer mt-4">
        <a href="../index.html">Terug naar het overzicht van de lesopdrachten</a>
    </footer>

</body>
</html>
