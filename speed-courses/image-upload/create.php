<?php
/** @var mysqli $db */

//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Require database in this file & image helpers
    require_once "includes/database.php";
    require_once "includes/image-helpers.php";

    //Postback with the data showed to the user, first retrieve data from 'Super global'
    $name = mysqli_escape_string($db, $_POST['name']);
    $artist = mysqli_escape_string($db, $_POST['artist']);
    $genre = mysqli_escape_string($db, $_POST['genre']);
    $year = mysqli_escape_string($db, $_POST['year']);
    $tracks = mysqli_escape_string($db, $_POST['tracks']);

    //Require the form validation handling
    require_once "includes/form-validation.php";

    //Special check for add form only
    if ($_FILES['image']['error'] === 4) {
        $errors['image'] = 'Image cannot be empty';
    }

    if (empty($errors)) {
        //Store image & retrieve name for database saving
        $image = addImageFile($_FILES['image']);

        //Save the record to the database
        $query = "INSERT INTO albums (name, artist, genre, year, tracks, image)
                  VALUES ('$name', '$artist', '$genre', $year, $tracks, '$image')";
        $result = mysqli_query($db, $query);

        if ($result) {
            header('Location: index.php');
            exit;
        } else {
            $errors['db'] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }

        //Close connection
        mysqli_close($db);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Create</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>
<body>

<div class="container px-4">
    <section class="columns is-centered">
        <div class="column is-10">
            <h2 class="title mt-4">Create new album</h2>

            <!-- enctype="multipart/form-data" no characters will be converted -->
            <form class="column is-6" action="" method="post" enctype="multipart/form-data">
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="name">Name</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input <?= isset($errors['name']) ? 'is-danger' : '' ?>" id="name" type="text" name="name" value="<?= isset($name) ? htmlentities($name) : '' ?>"/>
                            </div>
                            <p class="help is-danger">
                                <?= $errors['name'] ?? '' ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="artist">Artist</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input <?= isset($errors['artist']) ? 'is-danger' : '' ?>" id="artist" type="text" name="artist" value="<?= isset($artist) ? htmlentities($artist) : '' ?>"/>
                            </div>
                            <p class="help is-danger">
                                <?= $errors['artist'] ?? '' ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="genre">Genre</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input <?= isset($errors['genre']) ? 'is-danger' : '' ?>" id="genre" type="text" name="genre"
                                       value="<?= isset($genre) ? htmlentities($genre) : '' ?>"/>
                            </div>
                            <p class="help is-danger">
                                <?= $errors['genre'] ?? '' ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="year">Year</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input <?= isset($errors['year']) ? 'is-danger' : '' ?>" id="year" type="text" name="year"
                                       value="<?= isset($year) ? htmlentities($year) : '' ?>"/>
                            </div>
                            <p class="help is-danger">
                                <?= $errors['year'] ?? '' ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="tracks">Tracks</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input <?= isset($errors['tracks']) ? 'is-danger' : '' ?>" id="tracks" type="text" name="tracks"
                                       value="<?= isset($tracks) ? htmlentities($tracks) : '' ?>"/>
                            </div>
                            <p class="help is-danger">
                                <?= $errors['tracks'] ?? '' ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="file has-name">
                    <label class="file-label">
                        <input class="file-input <?= isset($errors['image']) ? 'is-danger' : '' ?>" id="image" type="file" name="image"
                               value="<?= isset($image) ? htmlentities($image) : '' ?>"/>
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label"> Choose a file… </span>
                        </span>
                    </label>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <button class="button is-link is-fullwidth" type="submit" name="submit">Save</button>
                    </div>
                </div>
            </form>

            <a class="button mt-4" href="index.php">&laquo; Go back to the list</a>
        </div>
    </section>

    <div>
        <a href="index.php">Go back to the list</a>
    </div>
</div>

</body>
</html>
