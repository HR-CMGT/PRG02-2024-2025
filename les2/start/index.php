<?php

//Multidimensional array with the music collection data
$musicAlbums = [
    [
        'artist' => 'Adele',
        'album' => '30',
        'genre' => 'Pop',
        'year' => '2021',
        'tracks' => '12'
    ],
    [
        'artist' => 'Muse',
        'album' => 'Live At Rome Olympic Stadium',
        'genre' => 'Rock',
        'year' => '2013',
        'tracks' => '13'
    ],
    [
        'artist' => 'Dream Theater',
        'album' => 'Systematic Chaos',
        'genre' => 'Progressive Rock',
        'year' => '2007',
        'tracks' => '8'
    ],
    [
        'artist' => 'Hardwell',
        'album' => 'United We Are',
        'genre' => 'House',
        'year' => '2015',
        'tracks' => '14'
    ],
    [
        'artist' => 'Robbie Williams',
        'album' => 'Greatest Hits',
        'genre' => 'Pop',
        'year' => '2010',
        'tracks' => '57'
    ],
    [
        'artist' => 'Limp Bizkit',
        'album' => 'Gold Cobra',
        'genre' => 'Rock / Rap',
        'year' => '2011',
        'tracks' => '16'
    ],
    [
        'artist' => 'Angels & Airwaves',
        'album' => 'Love Part 1',
        'genre' => 'Rock',
        'year' => '2011',
        'tracks' => '11'
    ],
    [
        'artist' => 'Ed Sheeran',
        'album' => '=',
        'genre' => 'Pop',
        'year' => '2021',
        'tracks' => '14'
    ],
    [
        'artist' => 'Kygo',
        'album' => 'Cut Your Teeth',
        'genre' => 'Chillstep',
        'year' => '2014',
        'tracks' => '3'
    ],
    [
        'artist' => '30 Seconds To Mars',
        'album' => 'This Is War',
        'genre' => 'Rock',
        'year' => '2009',
        'tracks' => '15'
    ]
];
?>
<!doctype html>
<html lang="en" data-theme="light">
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