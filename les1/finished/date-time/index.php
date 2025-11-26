<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Time | Programmeren 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>
<body>
    <header class="section">
        <h1 class="title">Opdracht Datum en tijd</h1>
    </header>

    <section class="section">
        <p>Format: “het is vandaag 1 november 2023”</p>
        <p>
            <!--Get the current date from the PHP function Date-->
            <?= 'Het is vandaag ' . date('d F Y'); ?>
        </p>
    </section>

    <section class="section">
        <p>Format: “het is vandaag 1/11/2023”</p>
        <p>
            <?= 'Het is vandaag ' . date('j/n/Y'); ?>
        </p>
    </section>

    <section class="section">
        <p>Format: “het is nu 2 uur en 30 minuten” (of: “het is nu 6 uur en 1 minuut”)</p>
        <p>
            <?php
            echo 'Het is nu '.date('G').' uur en '.date('i');
            if (date('i') == 1) {
                echo ' minuut.';
            }
            else {
                echo ' minuten.';
            }
            ?>
        </p>
    </section>

    <footer class="footer mt-4">
        <a href="../index.html">Terug naar het overzicht van de lesopdrachten</a>
    </footer>

</body>
</html>