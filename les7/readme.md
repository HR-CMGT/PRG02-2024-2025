    Lesopdrachten les 7

### Opdracht 1: Cross Site Scripting (XSS, oftewel Javascript injectie)

Voer de volgende code in als naam op de pagina [XSS-form.php](exercises/XSS-form.php)

> `<script>for (let i = 0 ; i < Date.now(); i++) alert("Sir Click Alot")</script>`

Open [XSS-form.php](exercises/XSS-form.php). Op `regel 39` wordt de naam getoond. Door hier gebruik te maken van de functie `htmlentities()`, zorg je ervoor dat javascript (die eventueel in de naam zit) niet uitgevoerd wordt.

> Pas de [XSS-form.php](exercises/XSS-form.php) pagina aan zodat deze beveiligd is tegen XSS

### Opdracht 2: SQL Injection

Voor deze opdracht maken we gebruik van de `users` tabel uit de vorige les. Zorg ervoor dat er minimaal 2 users in de database staan. Als dat niet zo is, kan je ze via de [register.php](../../les6/exercises/register.php) pagina [uit de vorige les](../../les6/exercises) toevoegen.

> Bezoek de pagina [les7/exercises/SQL-injection.php?id=2](exercises/SQL-injection.php?id=2). In de link zie je staan `id=2`. Vervang de 2 door het id van de users die als laatste is toegevoegd aan de database.

Je ziet nu het profiel van de gebruiker met dat id. Ook kun je in de PHP-pagina de query zien die bij deze pagina hoort. Aan het einde van de query zie je dat het nummer van het id geplaatst wordt door middel van een variabele. We gaan nu de query beïnvloeden door achter het '=' teken een andere invoer te doen.

> Zet in de URL achter **id=** een willekeurig id (bijv. 4) en daarna de tekst `' OR '1' = '1`. Je krijgt dan de volgende link: [les7/exercises/SQL-injection.php?id=4' OR '1'='1](SQL-injection.php?id=4%27%20OR%20%271%27=%271).

Je zult nu zien dat je altijd de eerste user uit de database te zien krijgt. Dit komt omdat we de SQL query beïnvloedt hebben. De query `SELECT * FROM users WHERE id='2'` haalt een specifieke user op uit de database. Maar door de toevoeging `' OR '1' = '1`, wordt de query `SELECT * FROM users WHERE id='2' OR '1'='1'`. Er staat nu: "Selecteer een gebruiker als zijn id = '2' óf als '1 = '1'" en dat laatste is altijd waar. Hierdoor worden alle users geselecteerd. De code `$user = mysqli_fetch_assoc($result);` kiest vervolgens altijd de eerste gebruiker.

> Verderop in de PHP-pagina wordt gecheckt of er meer dan 0 resultaten zijn. Op deze pagina willen we echter altijd precies 1 user hebben. Pas de check hierop aan en bezoek daarna nogmaals bovenstaande link.

Je ziet nu dat de eerste user niet wordt opgehaald. Toch is deze beveiliging nog niet voldoende. Om er zeker van te zijn dat de query die uitgevoerd wordt niet beïnvloed kan worden door een bezoeker, gaan we de input (vanuit de URL) beveiligen. We willen voorkomen dat iemand `'` kan gebruiken, waardoor de query veranderd kan worden. Dit doen we met de functie `mysqli_escape_string()`, zie [PHP.net](https://www.php.net/manual/en/mysqli.real-escape-string.php)

> Beveilig nu het id (dat binnenkomt via de GET-methode) tegen SQL Injection door gebruik te maken van de functie `mysqli_escape_string()`

### Opdracht 3: Joins

In deze opdracht ga je een zoekopdracht uitvoeren die in twee verschillende tabellen zoekt. Momenteel heb je al een tabel met `albums` met daarin de kolom `artist`, waarin de naam van een artist staat opgeslagen. Het is echter een goed idee om de `artists` in een eigen tabel op te slaan, zodat je eventueel meer informatie over de artist kan opslaan en ook andere entiteiten kan koppelen. Normaal gesproken moet je deze wijzigingen handmatig doorvoeren via phpMyAdmin, maar voor deze opdracht staat er een import voor je klaar:

> Importeer in phpMyAdmin het bestand [les7/exercises/music\_collection\_advanced.sql](exercises/music_collection_advanced.sql). Er wordt nu een geheel nieuwe database geïmporteerd, genaamd `music_collection_advanced`, zodat je huidige database ongewijzigd blijft. Het bevat een tabel met `albums`, waarbij ieder album een verwijziging heeft naar de nieuwe tabel met `artists`. Ook wordt er een nieuw album toegevoegd van Adele.  
> _**Let op:** de tabel `users` zit **niet** in deze import._

De database is nu gereed en je kan gaan oefenen met JOIN-queries. Voer de volgende queries uit in phpMyAdmin in de nieuw aangemaakte database `music_collection_advanced`:

> 1.  Selecteer alle albums met bijbehorende artiest
> 2.  Selecteer alle albums van de artiest `Adele`
> 3.  Selecteer alle albums met bijbehorende artiest, gesorteerd op albumnaam
> 4.  Selecteer alle albums met bijbehorende artiest en toon alleen de albumnaam en artiestennaam
> 5.  Zoals je in het resultaat van de vorige query kunt zien, hebben beide tabellen een kolom die `name` heet. Zorg ervoor dat beide kolommen een unieke naam krijgen: `album_name` en `artist_name` (voorbeeld: `albums.name AS album_name`).

### Tips
In deze [video](https://www.youtube.com/watch?v=9yeOJ0ZMUYw&list=PLi01XoE8jYojRqM4qGBF1U90Ee1Ecb5tt&index=12&ab_channel=Socratica) 
wordt uitgelegd hoe je een JOIN-query schrijft en gebruikt. 
Deze [video](https://www.youtube.com/watch?v=Jh_pvk48jHA&list=PLi01XoE8jYojRqM4qGBF1U90Ee1Ecb5tt&index=13&ab_channel=Socratica) 
geeft meer informatie over aliases, waarmee je kolommen een andere naam kan geven.

### Opdracht 4: JOINS in PHP (gevorderde niveau CRUD)

Nu je database is aangepast zul je zien dat je vorige opdrachten niet meer exact werken. We hebben tenslotte de `artist` kolom verwijderd en vervangen met `artist_id`. Pas de JOIN-queries uit vorige opdracht toe in je eigen PHP-code uit eerdere opdrachten om de index en detail pagina's weer te herstellen.

> **Let op:** Ook de create en edit zullen niet meer 1-op-1 werken. Verzin een manier om het album veld te vervangen voor een dropdown waar je kunt kiezen voor de artiest.