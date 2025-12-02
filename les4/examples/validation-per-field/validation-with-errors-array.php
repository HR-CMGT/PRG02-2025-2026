<?php
/** @var $db */
require_once "includes/database.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $artist = $_POST['artist'];

    $errors = [];
    if ($name === '') {
        $errors['name'] = "Vul de naam van het album in.";
    }
    if ($artist === '') {
        $errors['artist'] = "Vul na naam van de artiest in";
    }

    if (empty($errors)) {
        //INSERT in DB
        $query = "INSERT INTO album (name, artist, genre, year, tracks)
                    VALUES('$name', '$artist', '', 0, 0)";
        $result = mysqli_query($db, $query);

        if ($result) {
            $success = "Hij is toegevoegd aan de DB";
        } else {
            $errors['db'] = mysqli_error($db);
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voeg docent toe</title>
</head>
<body>
<h1>Voeg docent toe</h1>
<?php
if (isset($errors['db'])) {
    echo 'Database error: ' . $errors['db'];
} elseif (isset($success)) {
    echo $success;
}
?>
<form action="" method="post">
    <div>
        <label for="name">Albumnaam</label>
        <input type="text" name="name" id="name"/>
        <?php
        if (isset($errors['name'])) {
            echo $errors['name'];
        }
        ?>
    </div>
    <div>
        <label for="artist">Artiest</label>
        <input type="text" name="artist" id="artist"/>
        <?php
        if (isset($errors['artist'])) {
            echo $errors['artist'];
        }
        ?>
    </div>
    <div>
        <input type="submit" name="submit" value="Opslaan"/>
    </div>
</form>
</body>
</html>
