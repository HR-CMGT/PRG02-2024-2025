<?php
// Database connection details
$host       = '127.0.0.1';
$username   = 'root';
$password   = '';
$database   = 'music_collection';

// Make a connection to the database
$db = mysqli_connect($host, $username, $password, $database)
or die('Error: '.mysqli_connect_error());

// Query to get all albums
$query = "SELECT * FROM albums";
// Execute the query and store the result (table in $result)
$result = mysqli_query($db, $query)
    or die('Error '.mysqli_error($db).' with query '.$query);

// Create an empty array to store all albums
$albums = [];
// Loop through all albums in the table and store each row in the variable $row
while($row = mysqli_fetch_assoc($result))
{
    // Add the row to the $albums array
    $albums[] = $row;
}

mysqli_close($db);
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
                    <td colspan="6">&copy; My Music Collection</td>
                </tr>
                </tfoot>
                <tbody>
                <!-- Loop through all albums in the collection -->
                <?php foreach($albums as $index => $album) { ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $album['artist'] ?></td>
                        <td><?= $album['name'] ?></td>
                        <td><?= $album['genre'] ?></td>
                        <td><?= $album['year'] ?></td>
                        <td><?= $album['tracks'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
