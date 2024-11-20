<!doctype html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Lesopdrachten les 4</title>
</head>
<body>
<section class="hero is-primary">
    <div class="hero-body">
        <p class="title">
            Overzicht van de lesopdrachten van les 4
        </p>
    </div>
</section>
<section class="section">
    <h1 class="title">Opdracht 1: Validatie</h1>
    <h2 class="subtitle">
        Server-side controle op velden uit een formulier
    </h2>
    <div class="content">
        <p class="mb-4">
            In deze opdracht ga je ervoor zorgen dat verzonden informatie in een formulier valide is. De enige
            veilige plek om dit te controleren is op de server. In dit geval zal je dat dus met PHP moeten doen.
        </p>
        <p>
            Technieken die je hierbij nodig hebt zijn:
        </p>
        <ul>
            <li>
                Postback, meer info is te vinden in het
                <a href="https://brightspace.hr.nl/d2l/le/lessons/138307/topics/542739" target="_blank">filmpje
                    over Post en Postback</a>.
            </li>
            <li>
                Validatie, <a href="../examples/validation" target="_blank">voorbeeld</a> van deze les
                in <code>les4/examples/validation</code>
            </li>
        </ul>
        <blockquote>
            In het bestand <a href="opdr1-validation.php" target="_blank">opdr1-validation.php</a> zie je een formulier. Zorg
            ervoor dat het formulier in PHP wordt gecontroleerd (dus niet met
            het attribuut <code>required</code> in de HTML). Wanneer het veld leeg gelaten wordt, moet er een
            foutmelding
            in de HTML getoond worden.
        </blockquote>
    </div>
</section>

<section class="section has-background-primary-light">
    <h1 class="title">Opdracht 2: Createpagina met Postback</h1>
    <div class="content">
        <p class="mb-4">
            Je hebt nu alle ingrediënten om de createpagina te kunnen maken met Postback. In dit geval wordt de code
            niet naar store.php gestuurd, maar wordt de informatie naar de <code>create.php</code> pagina gestuurd.
            Op deze pagina vindt dus ook de <code>validatie</code> plaats en als de gegevens valide zijn, wordt de informatie
            ook toegevoegd aan de database middels het <code>INSERT-statement</code>.


            Gebruik bij de uitwerking de
            pseudocode
            uit de vorige opdracht. Werk je code stap voor stap uit (dus per regel comment) en test elke stap of
            deze werkt.
            Ga dan pas verder met de volgende regel.
        </p>
        <h3>
            Eisen aan de createpagina:
        </h3>
        <ul>
            <li>Alle velden zijn verplichte velden. Voeg server-side validatie toe</li>
            <li>Zijn niet alle velden ingevuld, toon dan een foutmelding</li>
            <li>Bij een foutmelding moeten de velden die goed waren, teruggeschreven worden in het
                formulier
            </li>
            <li>
                Na het succesvol toevoegen aan de database moet de gebruiker doorgestuurd worden naar de
                indexpagina.
            </li>
        </ul>
        <blockquote>
            <p>Werk alleen of samen de volgende vragen uit:</p>
            <ol>
                <li>Welke informatie / data heb je nodig als input voor deze opdracht?</li>
                <li>Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen
                    technische termen gebruiken het gaat om de functionaliteit.
                </li>
                <li>Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.</li>
            </ol>
        </blockquote>
        <h2>Tips bij de uitwerking</h2>
        <ul>
            <li>Loop je tegen een error aan, kijk dan of het <a
                        href="https://brightspace.hr.nl/d2l/le/lessons/138307/topics/542727" target="_blank">Debugstroomdiagram</a> je
                kunt helpen.</li>
            <li>Voor het doorsturen naar de indexpagina kan je gebruik maken van de PHP-functie <a
                        href="https://www.php.net/manual/en/function.header.php"
                        target="_blank">header()</a></li>
        </ul>
    </div>
</section>

<!--ERD-->
<section class="section">
    <h1 class="title">Opdracht 3: Entity Relationship Diagram</h1>
    <h2 class="subtitle">
        Hulpmiddel bij het ontwerpen van de database
    </h2>
    <div class="content">
        <p class="mb-4">
            Gegeven is het volgende:
            <br>
            <span class="is-italic">
                De case betreft een webshop waarbij gebruikers producten kunnen bestellen. Elke order bevat 1 of meerdere producten.
                Ook staat bij elke order opgeslagen hoe vaak elk product besteld is en de volgorde waarin de producten besteld zijn.

                Bovenaan de order staat de naam en het banknummer van de klant en onderaan het totaalbedrag van alle
                bestelde producten bij elkaar.
            </span>
        </p>
        <blockquote>
            Maak het ERD voor bovenstaande case (bijvoorbeeld met <a href="https://drawsql.app/"
                                                             target="_blank">DrawSQL</a>).
            Let goed op dat de informatie in de juiste tabel wordt opgeslagen
            en op de notatie van de relaties.
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
            <strong>Validatie per veld</strong>
        </p>
        <blockquote>
            Maak een uitbreiding op de validatie.
            <ul>
                <li>De bezoeker wil de foutmeldingen van de validatie niet samen boven het formulier hebben, maar elke
                    losse foutmelding netjes onder het betreffende veld zien.</li>
                <li>Zorg ervoor dat er niet alleen een controle plaatsvindt of het
                    inputelement leeg is, maar bijvoorbeeld ook of het een getal, e-mailadres of een postcode is.</li>
                <li>Maak per check een aparte foutmelding en laat alleen de eerst foutmelding per inputelement zien.</li>
                <li>Zet de formvalidatie in een apart bestand en laadt deze in de createpagina.</li>
            </ul>

        </blockquote>
        <p>
            <strong>Images</strong>
        </p>
        <blockquote>
            <p>
                De bezoeker wil nu ook graag een afbeelding uploaden bij het muziekalbum. Voeg een veld toe waar
                je een plaatje kan uploaden en sla dit
                plaatje op in de map 'images'. Zorg ervoor dat je geen BLOB-datatype gebruikt in de database
                voor het plaatje, maar enkel de naam van het plaatje
                hier als VARCHAR opslaat. Toon de afbeelding ook in de tabel en op de detailpagina.
            </p>
        </blockquote>
        <p class="is-italic">
            <strong>Tips:</strong>
        </p>
        <ul class="is-italic">
            <li>
                Gebruik de PHP-functie <a href="https://www.php.net/manual/en/function.move-uploaded-file.php"
                                          target="_blank">move_uploaded_file()</a>
                om het bestand te verplaatsen van de tijdelijke locatie naar de map 'images'.
                Verder is het handig om de <a
                        href="https://www.php.net/manual/en/features.file-upload.post-method.php"
                        target="_blank">PHP-documentatie</a> te raadplegen.
            </li>
            <li>
                Ook moet je de <a href="https://www.geeksforgeeks.org/define-multipart-form-data/"
                                  target="_blank">HTML aanpassen</a>,
                zodat je een bestand kunt uploaden. Gebruik hiervoor het attribuut
                <code>enctype="multipart/form-data"</code>
                in de <code>form</code>-tag.
            </li>
        </ul>
    </div>
</section>
</body>
</html>