    Overzicht van de lesopdrachten van les 3

POST Request
============

**Opdracht 1: Informatie doorsturen via een formulier.**

> Pas [pagina 1](exercises/opdr1-post-pagina1.html) aan zodat je ingevulde voornaam getoond wordt op [pagina 2](exercises/opdr1-post-pagina2.php).

**Opdracht 2: Informatie uit een formulier afhandelen in dezelfde pagina.**

In deze opdracht vult een bezoeker een formulier in, maar deze data wordt afgehandeld in dezelfde pagina. Dit noemen we een Postback. Er is dus geen pagina 2 die de data verwerkt. Je zult de beslissing of de data verwerkt moet worden dus op dezelfde pagina moeten nemen als waar het formulier te zien is.

> Beantwoord voor deze opdracht eerst de drie vragen uit de werkmethode.

Nadat je het ontwerp gemaakt hebt, bepaal je per stap de techniek die je daarbij nodig hebt. Werk de techniek stap voor stap uit en gebruik `print_r()` om informatie te loggen. Zo kan je zien of je de stap goed uitgewerkt hebt.

> Zorg ervoor dat de data van het formulier verzonden wordt naar [dezelfde pagina](exercises/opdr2-post-postback.php). Je kunt deze pagina dus op 2 manieren bezoeken
>
> *   (GET) Het formulier is dan nog leeg en er is nog niet op "submit" geklikt
> *   (POST) Het formulier is verzonden (door klik op "submit"). De $\_POST array bevat alle data.
>
> De functie [isset()](https://www.php.net/manual/en/function.isset) kun je gebruiken om te controleren of het formulier verzonden is op de volgende manier:
>
> ```php
> if(isset($_POST['submit'])) {
>     // Post data uitlezen
> }
> ```

Opdracht 3 Createpagina
=======================

Het toevoegen van een nieuw muziekalbum
---------------------------------------

_Voeg een "Create" link toe, boven de tabel op de indexpagina. Na het aanklikken van de link wordt de bijbehorende `create.php` geladen met een formulier waarvan de velden overeenkomen met de gegevens van een album.  
Voor create kun je gebruik maken van de voorbeeldpagina uit de `start`map. Stuur de data van het formulier terug naar dezelfde pagina (Postback) en controleer of alle velden zijn ingevuld. Laat een notificatie zien als alle velden correct zijn ingevuld.  
Vind je dit lastig dan mag je ook een aparte pagina `(store.php)` maken die de ingevuld data laat zien._

**Create (ontwerp tweetallen)**

> Werk in tweetallen en noteer:
>
> 1.  Welke informatie / data heb je nodig als input voor deze opdracht?
> 2.  Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen technische termen gebruiken het gaat om de functionaliteit.
> 3.  Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.

**Create (uitwerking individueel)**

> Werk de [**opdracht**](start) uit in je persoonlijke map in de htdocs folder. De startcode staat in de map `start`.

Verder werken
=============

Maak de onderstaande opdrachten om met verschillende onderwerpen te oefenen


### **POST en GET met Postback op dezelfde pagina.**

> Werk [**opdracht 4**](exercises/opdr4-post-en-get-postback.php) uit.


### **Validatie uitbreiden**

> *   Maak een uitbreiding op de validatie. Zorg ervoor dat er niet alleen een controle plaatsvindt of het inputelement leeg is, maar bijvoorbeeld ook of het een getal, emailadres of een postcode is.
> *   Maak per check een aparte foutmelding en laat alleen de eerst foutmelding per inputlement zien.
> *   Zet de formvalidatie in een apart bestand en laadt deze in de createpagina.