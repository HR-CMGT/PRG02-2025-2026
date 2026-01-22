<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Stappenplan voor jezelf om dit werkend te krijgen:
 * - Ga in je terminal naar deze map en draai `composer install` (composer is een tool om pakketjes van het internet te downloaden zoals PHPMAiler)
 * - Maak in deze map een `settings.php` aan met daarin het volgende (pas de gegevens aan voor jezelf):
 * const MAIL_SMTP_HOST = 'smtp.gmail.com';
 * const MAIL_SMTP_USERNAME = 'mail@gmail.com';
 * const MAIL_SMTP_PASSWORD = '';
 * const MAIL_FROM_ADDRESS = 'mail@gmail.com';
 * const MAIL_FROM_NAME = 'Antwan van der Mooren';
 *
 * Hoe kom ik aan deze gegevens?!
 * - Simpelste optie: Gebruik gmail met een app password: https://myaccount.google.com/apppasswords
 * - Iets complexer maar professioneler: Gebruik een tool zoals Mailgun. (logs, koppelen eigen domein, etc) - Max 1000 mails per maand = gratis
 */

require 'settings.php';
require 'vendor/autoload.php'; //Als je vendor map (gedownloade bestanden van o.a. PHPMailer) ergens anders staat moet je dit aanpassen

$mail = new PHPMailer(true);

try {
    // SMTP instellingen
    $mail->isSMTP();
    $mail->Host = MAIL_SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = MAIL_SMTP_USERNAME;
    $mail->Password = MAIL_SMTP_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Afzender & ontvanger
    $mail->setFrom(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
    $mail->addAddress('moora@hr.nl');

    // Inhoud
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->Subject = 'Testmail via Gmail SMTP';
    $mail->Body = '<h1>Het werkt 🎉</h1><p>Mail via Externe (bv: Gmail, Mailgun, Sendgrid) SMTP server</p>';

    $mail->send();
    echo 'Mail verzonden!';
} catch (Exception $e) {
    echo "Fout: {$mail->ErrorInfo}";
}
