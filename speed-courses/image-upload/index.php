<?php
/** @var mysqli $db */

//Require DB settings with connection variable
require_once "includes/database.php";

//Get the result set from the database with a SQL query
$query = "SELECT * FROM albums";
$result = mysqli_query($db, $query);

//Loop through the result to create a custom array
$musicAlbums = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Close connection
mysqli_close($db);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
</head>
<body>

<main class="container">
    <h1 class="title mt-4">Music Collection</h1>
    <a class="button is-link" href="create.php">Add new album</a>
    <?php if(count($musicAlbums) === 0) { ?>
        <section class="section">
            <p>There are no music albums created yet.</p>
            <p>Use the button above to create your first album.</p>
        </section>
    <?php } else { ?>
        <section class="section grid is-col-min-10">
            <?php foreach ($musicAlbums as $musicAlbum) { ?>
                <div class="card cell">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img
                                    src="images/<?= $musicAlbum['image'] ?>"
                                    alt="Placeholder image"
                            />
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">
                                    <?= $musicAlbum['name'] ?>
                                </p>
                                <p class="subtitle is-6">
                                    <?= $musicAlbum['artist'] ?>
                                </p>
                            </div>
                        </div>

                        <div class="content">
                            <p>
                                Gerne: <strong><?= $musicAlbum['genre'] ?></strong>
                                <br/>
                                Tracks: <strong><?= $musicAlbum['tracks'] ?></strong>
                                <br />
                                Released in: <strong><?= $musicAlbum['year'] ?></strong>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    <?php } ?>
</main>
</body>
</html>
