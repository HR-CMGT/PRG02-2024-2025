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
            Beantwoord voor deze opdracht eerst de drie vragen uit de werkmethode.
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
    <h1 class="title">Opdracht 3 Createpagina</h1>
    <h2 class="subtitle">
        Het toevoegen van een nieuw muziekalbum
    </h2>
    <div class="content">
        <p>
            <em>
                Voeg een "Create" link toe, boven de tabel op de indexpagina. Na het aanklikken van de link
                wordt de bijbehorende <code>create.php</code> geladen met een formulier waarvan de velden overeenkomen
                met de gegevens van een album.
                <br>
                Voor create kun je gebruik maken van de voorbeeldpagina uit de <code>start</code>map.
                Stuur de data van het formulier terug naar dezelfde pagina (Postback) en controleer of alle
                velden zijn ingevuld. Laat een notificatie zien als alle velden correct zijn ingevuld.
                <br>
                Vind je dit lastig dan mag je ook een aparte pagina <code>(store.php)</code> maken die de
                ingevuld data laat zien.
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

        <h2>
            Bekijk nu de video over <a href="https://brightspace.hr.nl/d2l/le/lessons/138307/topics/543140">
                technisch ontwerp, insert en delete
            </a> op Brightspace
        </h2>

        <p>
            <strong>Create (uitwerking individueel)</strong>
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
    <div class="content">
        <p>
            <strong>POST en GET met Postback op dezelfde pagina.</strong>
        </p>
        <blockquote>
            Werk <a href="opdr4-post-en-get-postback.php" target="_blank"><strong>opdracht 4</strong></a> uit.
        </blockquote>
        <p>
            <strong>Validatie uitbreiden</strong>
        </p>
        <blockquote>
            <ul>
                <li>Maak een uitbreiding op de validatie. Zorg ervoor dat er niet alleen een controle plaatsvindt of het
                    inputelement leeg is, maar bijvoorbeeld ook of het een getal, emailadres of een postcode is.</li>
                <li>Maak per check een aparte foutmelding en laat alleen de eerst foutmelding per inputlement zien.</li>
                <li>Zet de formvalidatie in een apart bestand en laadt deze in de createpagina.</li>
            </ul>
        </blockquote>
    </div>
</section>
</body>
</html>