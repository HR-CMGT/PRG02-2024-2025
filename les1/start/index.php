<?php
//Multidimensional array with the music collection data
$musicAlbums =
[
    // fill the collection with albums (also arrays)
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Collection</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>
<body>

    <header class="hero is-info">
        <div class="hero-body">
            <p class="title">Music collection</p>
            <p class="subtitle">Overview of my top albums</p>
        </div>
    </header>

    <main class="container">
        <section class="section">
            <table class="table mx-auto">
                <thead>
                <tr>
                    <th>Position</th>
                    <th>Artist</th>
                    <th>Album</th>
                    <th>Genre</th>
                    <th>Year</th>
                    <th>Tracks</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="6">&copy; My Collection</td>
                </tr>
                </tfoot>
                <tbody>
                <!--        Loop through all albums in the collection-->

                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
