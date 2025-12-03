<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    $errors = [];
    if ($name === '') {
        $errors['name'] = "De naam is verplicht.";
    }
    if ($age < 20 || $age > 40) {
        $errors['age'] = "De leeftijd moet tussen de 20 en 40 zijn.";
    }

    if (empty($errors)) {
        // Form is valid, so proceed to the next step
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <title>Validation per field</title>
</head>
<body>
<main>
    <section class="container p-5">
        <form action="" method="post">
            <div class="field">
                <label class="label" for="name">Name</label>
                <input class="input" type="text" name="name" id="name" placeholder="Voer naam in..."
                       value="<?= $name ?? '' ?>">

                <?php if (isset($errors['name'])) { ?>
                    <span class="help is-danger">
                        <?= $errors['name'] ?>
                    </span>
                <?php } ?>

            </div>

            <div class="field">
                <label class="label" for="age">Age</label>
                <input class="input" type="number" name="age" id="age" placeholder="Voer leeftijd in (tussen 20 en 40)..." value="<?= $age ?? '' ?>">

                <?php if (isset($errors['age'])) { ?>
                    <span class="help is-danger">
                        <?= $errors['age'] ?>
                    </span>
                <?php } ?>
            </div>

            <button class="button" type="submit" name="submit">Verzenden</button>
        </form>
    </section>
</main>
</body>
</html>