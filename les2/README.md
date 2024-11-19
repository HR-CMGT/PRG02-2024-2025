    Overzicht van de lesopdrachten van les 2

Database
========

Het importeren van een database en het ophalen van informatie
-------------------------------------------------------------

### Opdracht 1 **Database importeren**

In deze opdracht ga je oefenen met het ophalen van data uit de database. Hiervoor heb je eerst een database nodig. Er is al een database aangemaakt en deze is geëxporteerd in de vorm van een `.sql` bestand met de naam: [music\_collection.sql](./exercises/music_collection.sql) (in de map les3/exercises)

> *   Download [music\_collection.sql](./exercises/music_collection.sql)
> *   Ga naar [PhpMyAdmin](http://phpmyadmin.test)
> *   Klik op 'Import' / 'Importeren'
> *   Klik op 'Choose file' / 'Bestand kiezen' en selecteer de zojuist gedownloade music\_collection.sql
> *   Klik vervolgens helemaal onderaan de pagina op de knop 'Import' / 'Starten'

Aan de linkerkant zie je dat er nu een database is toegevoegd met de naam `music_collection`. Door op de plusjes ervoor te klikken kun je de tabellen zien. De inhoud van de tabellen kun je zien door op de tabelnaam te klikken.

### Opdracht 2 **Data selecteren met het SELECT statement**

Wanneer je informatie wilt ophalen uit de database zul je dit moeten doen d.m.v. een vraag. De database die wij gebruiken, werkt met de taal SQL. Via SQL ga je specifieke vragen stellen aan de database. De vraag die je stelt noemen we een query en dan specifiek een [SELECT Statement](https://www.w3schools.com/sql/sql_select.asp).

Open de `music_collection` database door op het 'plusje' voor de naam te klikken en klik vervolgens op de naam `albums`. Klik nu bovenin op het tabblad 'SQL'. Hier kun je SQL-queries invoeren en zien welk resultaat de database als antwoord geeft. 

**Let op! Het resultaat van een SELECT Statement is altijd een tabel, ook als deze leeg is**.

> Formuleer voor onderstaande zinnen de juiste SELECT Statements en voer deze uit op de database.
>
> *   Toon alle albums. (Aantal 19)
> *   Toon alle albums met genre ‘Rock’. (Aantal: 7)
> *   Toon alle albums die meer dan 10 tracks bevatten. (Aantal: 17)
> *   Toon alle albums die meer dan 10 tracks bevatten en NA 2014 zijn uitgebracht. (Aantal: 9)
> *   Toon alle albums waarvan de artiest begint met een ‘H’. (Aantal: 3). Gebruik hierbij het [`LIKE`](https://www.w3schools.com/sql/sql_like.asp) keyword
> *   Toon de eerste 5 albums op alfabetische volgorde van de artiest. Gebruik hierbij de [`ORDER BY`](https://www.w3schools.com/sql/sql_orderby.asp) en [`LIMIT`](https://www.w3schools.com/mysql/mysql_limit.asp)

### Opdracht 3 Indexpagina


### De indexpagina waarbij de informatie uit de **database** komt


> Gebruik de indexpagina uit de vorige les, maar koppel deze nu aan de [database](https://www.khanacademy.org/computing/computer-programming/sql/sql-basics/pt/querying-the-table). Dit vervangt de multidimensionale array. Gebruik hiervoor de database uit de opdracht hierboven. Haal albumdata op uit de database en toon deze in de (bestaande) tabel.

_Tip 1_

_in het bestand `les2/examples/database/database-query-flow.php` staat de volledige code beschreven (voorzien van comments) hoe je de data van álle albums uit de database haalt._

_Tip 2_ 

_in de map `les2/start/includes` staat het bestand `connection.php`. Dit is ook het bovenste deel van de code uit `database-query-flow.php`, dus let op dat je het niet dubbel doet. Deze kan je importeren met de PHP-functie `require_once`. Hierna is er verbinding gemaakt met de database. Dit kun je ook gebruiken bij de volgende opdracht (details.php) om verbinding te maken met de database._

GET Request
===========

### **Opdracht 4: Informatie doorsturen via een link.**

> In [pagina 1](exercises/opdr4-get-pagina1.html) staat een link die informatie moet doorgeven naar [pagina 2](exercises/opdr4-get-pagina2.php). Maak pagina1 kloppend zodat op pagina2 de tekst "Geweldig, het is gelukt om de tag 'techniek' door te sturen." komt te staan.

### **Opdracht 5: Blue Pill or Red Pill?**

> Op [pagina 1](exercises/opdr5-get-pagina1.html) kun je klikken op de Blue Pill of de Red Pill. Maak zowel [pagina 1](exercises/opdr5-get-pagina1.html) als [pagina2](exercises/opdr5-get-pagina2.php) kloppend, zodat pagina2 de naam van de aangeklikte Pill laat zien.

### Opdracht 6 Detailpagina


### De details van een muziekalbum


_Maak een webpagina met de detailinformatie van één muziekalbum (details.php). Voeg achter elk album op de **indexpagina** een detaillink toe. Deze verwijst naar `details.php`, deze staat al klaar in de map [start](start/details.php). Alle albums verwijzen naar dezelfde details.php, maar tonen toch alleen de details van het album waarop geklikt is (op de indexpagina)_

**Details (ontwerp in tweetallen)**

> Werk in tweetallen en noteer:
>
> 1.  Welke informatie / data heb je nodig als input voor deze opdracht?
> 2.  Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen technische termen gebruiken het gaat om de functionaliteit.
> 3.  Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.

**Details (uitwerking individueel)**

> Werk de [**opdracht**](./start) uit in `prg02-werkmap`. De startcode staat in de map `start`.

## Aanvullende opdrachten

Klaar met bovenstaande opdrachten? Ga met (één van) de volgende zaken verder:

### Images

> Voeg aan de indexpagina en/of aan de detailpagina een afbeelding toe van het album. Hou er rekening mee
> dat afbeeldingen niet als BLOB in de database komen, maar dat je de link naar de afbeelding als tekst opslaat.

### Pagination

> De eindgebruiker wil nu maar maximaal 5 muziekalbums tegelijk op de index pagina zien. Maak gebruik
> van [paginatie](https://bulma.io/documentation/components/pagination/) om maar 5 albums per keer te bekijken.

### Database voor eindopdracht

> Ga alvast nadenken hoe je database voor je eindopdracht eruit moet komen te zien. Noteer de
> onderdelen die je wilt opslaan of bijhouden en waar dat stukje informatie bij hoort.

