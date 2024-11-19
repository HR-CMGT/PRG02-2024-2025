<!doctype html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesopdrachten les 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">
            Overzicht van de lesopdrachten van les 3
        </p>
    </div>
</section>

<!--Opdracht 3 en 4-->
<section class="section">
    <h1 class="title">POST Request</h1>
    <h2 class="subtitle">

    </h2>
    <div class="content">
        <p>
            <strong>Opdracht 1: Informatie doorsturen via een formulier.</strong>
        </p>

        <blockquote>
            <p>
                Pas <a href="opdr1-post-pagina1.html" target="_blank">pagina 1</a> aan zodat je
                ingevulde voornaam getoond wordt op
                <a href="opdr1-post-pagina2.php" target="_blank">pagina 2</a>.
            </p>
        </blockquote>
        <p>
            <strong>Opdracht 2: Informatie uit een formulier afhandelen in dezelfde pagina.</strong>
        </p>
        <p>
            In deze opdracht vult een bezoeker een formulier in, maar deze data wordt afgehandeld in dezelfde
            pagina. Dit noemen we een Postback.
            Er is dus geen pagina 2 die de data verwerkt. Je zult de beslissing of de data verwerkt moet worden
            dus op dezelfde pagina moeten nemen
            als waar het formulier te zien is.
        </p>
        <blockquote>
            Schrijf (in tweetallen) de pseudocode uit voor deze opdracht.
        </blockquote>

        <p>Nadat je het ontwerp gemaakt hebt, bepaal je per stap de techniek die je daarbij nodig hebt. Werk de
            techniek stap voor stap uit en
            gebruik <code>print_r()</code> om informatie te loggen. Zo kan je zien of je de stap goed uitgewerkt
            hebt.</p>
        <blockquote>
            <p>
                Zorg ervoor dat de data van het formulier verzonden wordt naar <a
                        href="opdr2-post-postback.php" target="_blank">dezelfde pagina</a>.
                Je kunt deze pagina dus op 2 manieren bezoeken
            </p>
            <ul>
                <li>(GET) Het formulier is dan nog leeg en er is nog niet op "submit" geklikt</li>
                <li>(POST) Het formulier is verzonden (door klik op "submit"). De $_POST array bevat alle
                    data.
                </li>
            </ul>
            <p>
                De functie <a href="https://www.php.net/manual/en/function.isset" target="_blank">isset()</a> kun je gebruiken
                om te controleren of het
                formulier verzonden is op de volgende manier:
            </p>
            <p>
                <code>
                    if(isset($_POST['submit'])) { <br>
                    // Post data uitlezen <br>
                    }
                </code>
            </p>
        </blockquote>
    </div>
</section>

<!--Create-->
<section class="section has-background-primary-light">
    <h1 class="title">Opdracht 3: Createpagina</h1>
    <h2 class="subtitle">
        Het toevoegen van een nieuw muziekalbum
    </h2>
    <div class="content">
        <p>
            <em>
                Voeg een "Create" link toe, boven de tabel op de indexpagina. Na het aanklikken van de link
                wordt de bijbehorende <code>create.php</code> geladen met een formulier waarvan de velden overeenkomen
                met de gegevens van een album. Voor create kun je gebruik maken van de voorbeeldpagina uit de
                <code>start</code>map.
                <br>
                Wanneer een bezoeker het formulier heeft ingevuld en op Save klikt, wordt de informatie naar de pagina
                store.php gestuurd. Deze pagina zal je nog moeten aanmaken. Op deze pagina wordt de informatie
                uit het formulier uitgelezen en vervolgens toegevoegd aan de database.
            </em>
        </p>
        <p>
            <strong>Create (ontwerp tweetallen)</strong>
        </p>

        <blockquote>
            <p>Werk in tweetallen en noteer:</p>
            <ol>
                <li>Welke informatie / data heb je nodig als input voor deze opdracht?</li>
                <li>Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen
                    technische termen gebruiken het gaat om de functionaliteit.
                </li>
                <li>Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.</li>
            </ol>
        </blockquote>
    </div>
</section>

<section class="section">
    <h1 class="title">Opdracht 4: SQL - INSERT query</h1>
    <h2 class="subtitle">
        Het toevoegen van een nieuw album aan de database (in PHPMyAdmin)
    </h2>
    <div class="content">
        <blockquote>
            Bekijk nu de <strong>video</strong> over <a href="https://brightspace.hr.nl/d2l/le/lessons/138307/topics/543140" target="_blank">
                technisch ontwerp, insert en delete
            </a> op Brightspace
        </blockquote>

        <p>
            Open <a href="http://phpmyadmin.test/" target="_blank">PhpMyAdmin</a> en klik op de database <a
                    href="http://phpmyadmin.test/index.php?route=/database/sql&db=music_collection"
                    target="_blank">music_collection</a> en vervolgens op de tabel <a
                    href="http://phpmyadmin.test/index.php?route=/table/sql&db=music_collection&table=albums"
                    target="_blank">albums</a>.
            Klik vervolgens op de tab 'SQL'.
        </p>
        <blockquote>
            Noteer voor het volgende album de INSERT query.

            <ul>
                <li>album: <span class="is-italic">The Dark Side Of The Moon</span></li>
                <li>artist: <span class="is-italic">Pink Floyd</span></li>
                <li>genre: <span class="is-italic">Progressive Rock</span></li>
                <li>year: <span class="is-italic">1973</span></li>
                <li>tracks: <span class="is-italic">9</span></li>
            </ul>
        </blockquote>

        Klik nu op de tab 'Insert' / 'Invoegen'.
        <blockquote>
            Voeg hier een album naar keuze toe d.m.v. het formulier (voer de <strong>id</strong> niet in).
            <br>
            Zie je een groene balk met de tekst: '1 row inserted.' / '1 rij toegevoegd.', dan is het gelukt.
            Hieronder staat een query. Vergelijk
            deze query met jouw query.
        </blockquote>
    </div>
</section>
<section class="section has-background-primary-light">
    <h1 class="title">Opdracht 5: Createpagina uitwerken</h1>
    <h2 class="subtitle">
        Het toevoegen van een nieuw muziekalbum
    </h2>
    <div class="content">
        <p>
            <strong>Create (uitwerking individueel)</strong>
        </p>
        <blockquote>
            Werk de <a href="../start" target="_blank"><strong>opdracht</strong></a> uit in je persoonlijke map in de Development
            folder.
            De startcode staat in de map <code>start</code>.
              <br>
              <strong>Let op:</strong> gebruik de <code>index.php</code> die je hebt gemaakt in de vorige les.
        </blockquote>
    </div>
</section>

<!--Aanvullende opdrachten-->
<section class="section">
    <h1 class="title">Verder werken</h1>
    <div class="content">
        <p>
            <strong>POST en GET met Postback op dezelfde pagina.</strong>
        </p>
        <blockquote>
            Werk <a href="opdr4-post-en-get-postback.php" target="_blank"><strong>opdracht 4</strong></a> uit.
        </blockquote>
        <p>
            <strong>Createpagina met Postback</strong>
        </p>
        <blockquote>
            Je kunt alvast vooruit werken door de createpagina te maken met een Postback. De informatie van het
            formulier wordt in dat geval naar de <code>create.php</code> pagina teruggestuurd en verwerkt.
        </blockquote>
    </div>
</section>
</body>
</html>