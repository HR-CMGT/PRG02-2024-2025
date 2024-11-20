     Lesopdrachten les 4

Opdracht 1: Validatie
=====================

### Server-side controle op velden uit een formulier


In deze opdracht ga je ervoor zorgen dat verzonden informatie in een formulier valide is. De enige veilige plek om dit 
te controleren is op de server. In dit geval zal je dat dus met PHP moeten doen.

Technieken die je hierbij nodig hebt zijn:

*   Postback, meer info is te vinden in het [filmpje over Post en Postback](https://brightspace.hr.nl/d2l/le/lessons/138307/topics/542739).
*   Validatie, [voorbeeld](examples/validation) van deze les in `les4/examples/validation`

> In het bestand [opdr1-validation.php](exercises/opdr1-validation.php) zie je een formulier. Zorg ervoor dat het formulier in 
> PHP wordt gecontroleerd (dus niet met het attribuut `required` in de HTML). Wanneer het veld leeg gelaten wordt, moet 
> er een foutmelding in de HTML getoond worden.

Opdracht 2: Createpagina met Postback
=====================================

Je hebt nu alle ingrediënten om de createpagina te kunnen maken met Postback. In dit geval wordt de code niet naar 
store.php gestuurd, maar wordt de informatie naar de `create.php` pagina gestuurd. Op deze pagina vindt dus ook de 
`validatie` plaats en als de gegevens valide zijn, wordt de informatie ook toegevoegd aan de database middels het 
`INSERT-statement`. Gebruik bij de uitwerking de pseudocode uit de vorige opdracht. Werk je code stap voor stap uit 
(dus per regel comment) en test elke stap of deze werkt. Ga dan pas verder met de volgende regel.

### Eisen aan de createpagina:

*   Alle velden zijn verplichte velden. Voeg server-side validatie toe
*   Zijn niet alle velden ingevuld, toon dan een foutmelding
*   Bij een foutmelding moeten de velden die goed waren, teruggeschreven worden in het formulier
*   Na het succesvol toevoegen aan de database moet de gebruiker doorgestuurd worden naar de indexpagina.

> Werk alleen of samen de volgende vragen uit:
>
> 1.  Welke informatie / data heb je nodig als input voor deze opdracht?
> 2.  Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen technische termen gebruiken 
> het gaat om de functionaliteit.
> 3.  Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.

### Tips bij de uitwerking

*   Loop je tegen een error aan, kijk dan of het [Debugstroomdiagram](https://brightspace.hr.nl/d2l/le/lessons/138307/topics/542727) 
    je kunt helpen.
*   Voor het doorsturen naar de indexpagina kan je gebruik maken van de PHP-functie 
    [header()](https://www.php.net/manual/en/function.header.php)

Opdracht 3: Entity Relationship Diagram
=======================================

### Hulpmiddel bij het ontwerpen van de database

Gegeven is het volgende:  
De case betreft een webshop waarbij gebruikers producten kunnen bestellen. Elke order bevat 1 of meerdere producten. 
Ook staat bij elke order opgeslagen hoe vaak elk product besteld is en de volgorde waarin de producten besteld zijn. 
Bovenaan de order staat de naam en het banknummer van de klant en onderaan het totaalbedrag van alle bestelde producten 
bij elkaar.

> Maak het ERD voor bovenstaande case (bijvoorbeeld met [DrawSQL](https://drawsql.app/)). Let goed op dat de informatie 
> in de juiste tabel wordt opgeslagen en op de notatie van de relaties.

Verder werken
=============

### Klaar met bovenstaande opdrachten? Ga met (één van) de volgende zaken verder:

**Validatie per veld**

> Maak een uitbreiding op de validatie.
>
> *   De bezoeker wil de foutmeldingen van de validatie niet samen boven het formulier hebben, maar elke losse foutmelding 
>     netjes onder het betreffende veld zien.
> *   Zorg ervoor dat er niet alleen een controle plaatsvindt of het inputelement leeg is, maar bijvoorbeeld ook of het 
>     een getal, e-mailadres of een postcode is.
> *   Maak per check een aparte foutmelding en laat alleen de eerst foutmelding per inputelement zien.
> *   Zet de formvalidatie in een apart bestand en laadt deze in de createpagina.

**Images**

> De bezoeker wil nu ook graag een afbeelding uploaden bij het muziekalbum. Voeg een veld toe waar je een plaatje kan 
> uploaden en sla dit plaatje op in de map 'images'. Zorg ervoor dat je geen BLOB-datatype gebruikt in de database voor 
> het plaatje, maar enkel de naam van het plaatje hier als VARCHAR opslaat. Toon de afbeelding ook in de tabel en op de 
> detailpagina.

**Tips:**

*   Gebruik de PHP-functie [move\_uploaded\_file()](https://www.php.net/manual/en/function.move-uploaded-file.php) om het bestand te verplaatsen van de tijdelijke locatie naar 
    de map 'images'. Verder is het handig om de [PHP-documentatie](https://www.php.net/manual/en/features.file-upload.post-method.php) te raadplegen.
*   Ook moet je de [HTML aanpassen](https://www.geeksforgeeks.org/define-multipart-form-data/), zodat je een bestand kunt uploaden. Gebruik hiervoor het attribuut 
    `enctype="multipart/form-data"` in de `form`\-tag.