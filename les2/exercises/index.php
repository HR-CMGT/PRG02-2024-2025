<!doctype html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Lesopdrachten les 2</title>
</head>
<body>
<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">
            Overzicht van de lesopdrachten van les 2
        </p>
    </div>
</section>

<section class="section">
    <h1 class="title">Database</h1>
    <h2 class="subtitle">
        Het importeren van een database en het ophalen van informatie
    </h2>
    <div class="content">
        <p>
            <strong>Opdracht 1: Database importeren</strong>
        </p>
        <p>
            In deze opdracht ga je oefenen met het ophalen van data uit de database. Hiervoor heb je eerst een
            database
            nodig. Er is al een database aangemaakt en deze is geëxporteerd in de vorm van een <code>.sql</code>
            bestand met de
            naam: <a href="../../les2/exercises/music_collection.sql" download>music_collection.sql</a> (in de map les2/exercises)
        </p>
        <blockquote>
            <ul>
                <li>Download <a href="../../les2/exercises/music_collection.sql" download>music_collection.sql</a></li>
                <li>Ga naar <a href="http://phpmyadmin.test" target="_blank">PhpMyAdmin</a></li>
                <li>Klik op 'Import' / 'Importeren'</li>
                <li>Klik op 'Choose file' / 'Bestand kiezen' en selecteer de zojuist gedownloade
                    music_collection.sql
                </li>
                <li>Klik vervolgens helemaal onderaan de pagina op de knop 'Import' / 'Starten'</li>
            </ul>
        </blockquote>
        <p>
            Aan de linkerkant zie je dat er nu een database is toegevoegd met de naam
            <code>music_collection</code>.
            Door op de plusjes ervoor te klikken kun je de tabellen zien. De inhoud van de tabellen kun je zien
            door op
            de tabelnaam te klikken.
        </p>
        <p>
            <strong>Opdracht 2: Data selecteren met het SELECT statement</strong>
        </p>
        <p>
            Wanneer je informatie wilt ophalen uit de database zul je dit moeten doen d.m.v. een vraag.
            De database die wij gebruiken, werkt met de taal SQL. Via SQL ga je specifieke vragen stellen aan de database.
            De vraag die je stelt noemen we een query en dan specifiek een
            <a href="https://www.w3schools.com/sql/sql_select.asp" target="_blank">SELECT Statement</a>.
        </p>
        <p class="is-italic">
            Open de music_collection database
            door op het 'plusje' voor de naam te klikken en klik vervolgens op de naam 'albums'. Klik nu bovenin
            op
            het tabblad 'SQL'. Hier kun je SQL-queries invoeren en zien welk resultaat de database als antwoord
            geeft.
            <strong>Let op! Het resultaat van een SELECT Statement is altijd een tabel, ook als deze leeg
                is</strong>.
        </p>
        <blockquote>
            Formuleer voor onderstaande zinnen de juiste SELECT Statements en voer deze uit op de database.
            <ul>
                <li>Toon alle albums. (Aantal 19)</li>
                <li>Toon alle albums met genre ‘Rock’. (Aantal: 7)</li>
                <li>Toon alle albums die meer dan 10 tracks bevatten. (Aantal: 17)</li>
                <li>Toon alle albums die meer dan 10 tracks bevatten en NA 2014 zijn uitgebracht. (Aantal: 9)
                </li>
                <li>
                    Toon alle albums waarvan de artiest begint met een ‘H’. (Aantal: 3). Gebruik hierbij het
                    <a href="https://www.w3schools.com/sql/sql_like.asp" target="_blank">
                        <code class="is-underlined">LIKE</code></a> keyword
                </li>
                <li>Toon de eerste 5 albums op alfabetische volgorde van de artiest. Gebruik hierbij de
                    <a href="https://www.w3schools.com/sql/sql_orderby.asp" target="_blank">
                        <code class="is-underlined">ORDER BY</code></a> en <a
                            href="https://www.w3schools.com/mysql/mysql_limit.asp" target="_blank"><code
                                class="is-underlined">LIMIT</code></a></li>
            </ul>
        </blockquote>
    </div>
</section>

<section class="section has-background-primary-light">
    <h1 class="title">Opdracht 3: Indexpagina</h1>
    <h2 class="subtitle">
        De indexpagina waarbij de informatie uit de <strong>database</strong> komt
    </h2>
    <div class="content">
        <blockquote>
            Gebruik de indexpagina uit de vorige les, maar koppel deze nu aan de
            <a href="https://www.khanacademy.org/computing/computer-programming/sql/sql-basics/pt/querying-the-table"
            target="_blank">database</a>. Dit vervangt de multidimensionale array. Gebruik hiervoor de database uit
            opdracht hierboven. Haal de albumdata op uit de database en toon deze in (de bestaande) tabel.
        </blockquote>
        <p class="is-italic">
            <p>Tip 1</p>
            <p>
                <em>
                    In het bestand <code>les2/examples/database/database-query-flow.php</code> staat de volledige code
                    beschreven (voorzien van comments) hoe je de data van álle albums uit de database haalt.
                </em>
            </p>
            <p>Tip 2</p>
            <p>
                <em>
                    In de map <code>les2/start/includes</code> staat het bestand <code>connection.php</code>. Dit is
                    ook het
                    bovenste deel van de code uit <code>database-query-flow.php</code>, dus let op dat je het niet
                    dubbel doet.
                    Deze kan je importeren met de PHP-functie <code>require_once</code>. Hierna is er verbinding gemaakt
                    met de database.
                    Dit kun je ook gebruiken bij de volgende opdracht (details.php) om verbinding te maken met de
                    database.
                </em>
            </p>
        </p>
    </div>
</section>

<!--Opdracht 1 en 2-->
<section class="section">
    <h1 class="title">GET Request</h1>
    <h2 class="subtitle">

    </h2>
    <div class="content">
        <p>
            <strong>Opdracht 4: Informatie doorsturen via een link.</strong>
        </p>

        <blockquote>
            <p>In <a href="opdr4-get-pagina1.html" target="_blank">pagina 1</a> staat een link die informatie moet doorgeven
                naar
                <a href="opdr4-get-pagina2.php" target="_blank">pagina 2</a>. Maak pagina1 kloppend zodat op pagina2 de tekst
                "Geweldig, het is
                gelukt om de tag 'techniek' door te sturen." komt te staan.</p>
        </blockquote>
        <p>
            <strong>Opdracht 5: Blue Pill or Red Pill?</strong>
        </p>
        <blockquote>
            Op <a href="opdr5-get-pagina1.html" target="_blank">pagina 1</a> kun je klikken op de Blue Pill of de
            Red Pill. Maak zowel <a href="opdr5-get-pagina1.html" target="_blank">pagina 1</a> als
            <a href="opdr5-get-pagina2.php" target="_blank">pagina2</a> kloppend, zodat pagina2 de naam van de
            aangeklikte Pill laat zien.
        </blockquote>
    </div>
</section>

<!--Details-->
<section class="section has-background-primary-light">
    <h1 class="title">Opdracht 6: Detailpagina</h1>
    <h2 class="subtitle">
        De details van een muziekalbum
    </h2>
    <div class="content">
        <p>
            <em>
                Maak een webpagina met de detailinformatie van één muziekalbum (details.php).
                Voeg achter elk album op de <strong>indexpagina</strong> een detaillink toe. Deze verwijst naar
                <code>details.php</code>, deze staat al klaar in de map <a href="../start/details.php" target="_blank">start</a>.
                Alle albums verwijzen naar dezelfde details.php, maar tonen toch alleen de details van het album
                waarop geklikt is
                (op de indexpagina)
            </em>
        </p>
        <p>
            <strong>Details (ontwerp tweetallen)</strong>
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

        <p>
            <strong>Details (uitwerking individueel)</strong>
        </p>
        <blockquote>
            Werk de <a href="../start" target="_blank"><strong>opdracht</strong></a> uit in je persoonlijke map in de htdocs
            folder.
            De startcode staat in de map <code>start</code>.
        </blockquote>
    </div>
</section>

<!--Aanvullende opdrachten-->
<section class="section">
    <h1 class="title">Verder werken</h1>
    <h2 class="subtitle">
        Klaar met bovenstaande opdrachten? Ga met (één van) de volgende zaken verder:
    </h2>
    <div class="content">
        <p>
            <strong>Images</strong>
        </p>
        <blockquote>
            Voeg aan de indexpagina en/of aan de detailpagina een afbeelding toe van het album. Hou er rekening mee
            dat afbeeldingen niet als BLOB in de database komen, maar dat je de link naar de afbeelding als tekst opslaat.
        </blockquote>
        <p>
            <strong>Pagination</strong>
        </p>
        <blockquote>
            De eindgebruiker wil nu maar maximaal 5 muziekalbums tegelijk op de index pagina zien. Maak gebruik
            van
            <a href="https://bulma.io/documentation/components/pagination/" target="_blank">paginatie</a> om
            maar 5
            albums per keer te bekijken.
        </blockquote>
        <p>
            <strong>Database voor eindopdracht</strong>
        </p>
        <blockquote>
            Ga alvast nadenken hoe je database voor je eindopdracht eruit moet komen te zien. Noteer de
            onderdelen die je wilt opslaan of bijhouden en waar dat stukje informatie bij hoort.
        </blockquote>
    </div>
</section>
</body>
</html>