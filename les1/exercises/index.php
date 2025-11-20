<?php
$decimal = 10;
?>

<!doctype html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Lesopdrachten les 1</title>
</head>
<body>
<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">
            Overzicht van de lesopdrachten van les 1
        </p>
    </div>
</section>
<!--Opdracht 1-->
<section class="section">
    <h1 class="title">Words Table (20 minuten)</h1>
    <h2 class="subtitle">
        Bij deze eerste opdracht is het de bedoeling om een tabel (met twee kolommen) te maken. In de eerste
        kolom komt een getal te staan (1-7) en in de tweede kolom staat het woord uitgeschreven in tekst
    </h2>
    <div class="content">
        <img src="words-table/words-table.png" alt="words table" style="width: 40%"/>
        <blockquote>
            <p>
                Werk de <a href="words-table/index.php" target="_blank"><strong>opdracht</strong></a> uit in je
                persoonlijke map in
                de lesopdrachten folder
            </p>
            <p>
                Bron: <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/table"
                         target="_blank">Table</a> volgens de officiele documentatie
            </p>
        </blockquote>
        <blockquote class="has-background-primary">
            <h2>AI Hulpvragen</h2>
            <ol>
                <li>Hoe bouw je een table op in HTML?</li>
            </ol>
        </blockquote>
    </div>
</section>

<!--Opdracht 2-->
<section class="section">
    <h1 class="title">Greetings</h1>
    <h2 class="subtitle">
        Maak een pagina die de bezoeker welkom heet en op basis van de tijd goedemorgen, -middag, avond of nacht
        zegt.
    </h2>
    <div class="content">
        <p>
            <strong>Greetings (ontwerp in tweetallen)</strong>
        </p>

        <blockquote>
            <p>Werk in tweetallen en noteer:</p>
            <ol>
                <li>Welke informatie / data heb je nodig als input voor deze opdracht?</li>
                <li>Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen
                    technische termen gebruiken het gaat om de functionaliteit.
                </li>
                <li>Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.</li>
            </ol>
        </blockquote>

        <p>
            <strong>Greetings (uitwerking individueel)</strong>
        </p>
        <blockquote>
            Werk de <a href="greetings/index.php" target="_blank"><strong>opdracht</strong></a> uit in je persoonlijke
            map in de
            lesopdrachten folder. Tip: gebruik de info van PHP.Net over de date() functie.
        </blockquote>
    </div>
</section>

<!--Opdracht 3-->
<section class="section has-background-primary-light">
    <h1 class="title">Indexpagina: een overzicht van alle albums</h1>
    <h2 class="subtitle">
        Maak een webpagina waarop een overzicht van muziekalbums te zien is en plaats deze in een tabel.
    </h2>
    <div class="content">
        <p>
            <em>
                De informatie komt uit een (associatieve) array, die je zelf hardcoded gevuld hebt met minimaal
                10 albums. Hierin zit de volgende informatie:
                <ul>
                    <li>Naam artiest</li>
                    <li>Naam album</li>
                    <li>Jaar van uitkomen</li>
                </ul>
            </em>
        </p>
        <p>
            <strong>Index (ontwerp in tweetallen)</strong>
        </p>

        <blockquote>
            <p>Werk in tweetallen en noteer:</p>
            <ol>
                <li>Welke informatie / data heb je nodig als input voor deze opdracht?</li>
                <li>Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen
                    technische termen gebruiken het gaat om de functionaliteit.
                </li>
                <li>Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.</li>
            </ol>
        </blockquote>

        <p>
            <strong>Index (uitwerking individueel)</strong>
        </p>
        <blockquote>
            <p>
                Werk de <a href="../start/index.php" target="_blank"><strong>opdracht</strong></a> uit in je
                persoonlijke map in de
                lesopdrachten folder
            </p>
            <ul>
                <li>Bron: <a href="https://www.php.net/manual/en/language.types.array.php" target="_blank">Arrays</a> in
                    PHP.
                </li>
                <li>Bron: <a href="https://www.php.net/manual/en/control-structures.foreach.php target=" _blank"">Foreach</a>
                    in PHP.
                </li>
            </ul>
        </blockquote>
        <blockquote class="has-background-primary">
            <h2>AI Hulpvragen</h2>
            <ol>
                <li>Hoe werkt een associative array in PHP?</li>
                <li>Als ik de volgende eigenschappen van een muziekalbum heb: naam artiest, naam album, jaar van
                    uitgave, aantal tracks, genre. Hoe moet de structuur er dan uitzien in een associative array? En kun
                    je
                    een voorbeeld geven met meerdere albums?
                </li>
                <li>Leg me op een eenvoudige manier uit hoe een foreach-loop in PHP werkt.</li>
            </ol>
        </blockquote>
    </div>
</section>

<!--Aanvullende opdrachten-->
<section class="section">
    <h1 class="title">Aanvullende opdrachten</h1>
    <h2 class="subtitle">
        Maak de onderstaande opdrachten om met verschillende onderwerpen te oefenen
    </h2>
    <div class="content">
        <p>
            <strong>Samenvoegen van string</strong>
        </p>
        <blockquote>
            Werk de <a href="strings/index.php" target="_blank"><strong>opdracht</strong></a> uit in de folder
            <code>exercises/strings</code>
        </blockquote>
        <p>
            <strong>Date time</strong>
        </p>
        <blockquote>
            <p>
                Werk de <a href="date-time/index.php" target="_blank"><strong>opdracht</strong></a> uit in de folder
                <code>exercises/date-time</code>
            </p>
            <p>
                Schrijf de **huidige** datum/tijd op het scherm in verschillende notaties:
            </p>
            <ul>
                <li>Het is vandaag 1 november 2023” (Met de datum van vandaag)</li>
                <li>Het is vandaag 1/11/2023” (Met de datum van vandaag)</li>
                <li>Het is nu 2 uur en 30 minuten” (of: “het is nu 6 uur en 1 minuut”)</li>
            </ul>
        </blockquote>
        <p>
            <strong>Zodiac Sign</strong>
        </p>
        <blockquote>
            <p>Werk de <a href="zodiac-sign/index.php" target="_blank"><strong>opdracht</strong></a> uit in de folder
                <code>exercises/zodiac-sign</code>
            </p>

            <p>Maak een webpagina die laat zien welk sterrenbeeld je hebt op basis van je verjaardag. Je
                verjaardag mag je hardcoded verwerken</p>
        </blockquote>
    </div>
</section>
</body>
</html>