<?php
$firstName = '';
$error = '';
if(isset($_POST['submit'])) {
    $firstName = $_POST['first_name'];

    if($firstName === '') {
        $error = 'The first name cannot be empty';
    }
    if($error === '') {
        $query = "INSERT INTO albums (name)
                    VALUES ('$firstName')";
        echo $query;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create page</h1>
    <?= $firstName ?>
    <form action="" method="post">
        First name
        <input type="text" name="first_name"/>
        <?= $error ?>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>

