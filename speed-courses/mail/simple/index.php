<?php
$test = mail('moora@hr.nl', 'Test speedcourse', 'Dit werkt op de studentserver!');
var_dump($test);
//Lokaal krijg je ook "true" maar het werkt niet. (TRUE !== "mail is verzonden")
//Je mist veel opties die je met phpmailer wel kunt uitvoeren
