    Overzicht van de lesopdrachten van les 3

POST Request
============

## **Opdracht 1: Informatie doorsturen via een formulier.**

> Pas [pagina 1](exercises/opdr1-post-pagina1.html) aan zodat je ingevulde voornaam getoond wordt op [pagina 2](exercises/opdr1-post-pagina2.php).

## **Opdracht 2: Informatie uit een formulier afhandelen in dezelfde pagina.**

In deze opdracht vult een bezoeker een formulier in, maar deze data wordt afgehandeld in dezelfde pagina. Dit noemen we een Postback. Er is dus geen pagina 2 die de data verwerkt. Je zult de beslissing of de data verwerkt moet worden dus op dezelfde pagina moeten nemen als waar het formulier te zien is.

> Schrijf (in tweetallen) de pseudocode uit voor deze opdracht.

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

### Het toevoegen van een nieuw muziekalbum


_Voeg een "Create" link toe, boven de tabel op de indexpagina. Na het aanklikken van de link wordt de bijbehorende 
`create.php` geladen met een formulier waarvan de velden overeenkomen met de gegevens van een album. Voor create kun je 
gebruik maken van de voorbeeldpagina uit de `start`map.  
Wanneer een bezoeker het formulier heeft ingevuld en op Save klikt, wordt de informatie naar de pagina store.php gestuurd. 
Deze pagina zal je nog moeten aanmaken. Op deze pagina wordt de informatie uit het formulier uitgelezen en vervolgens 
toegevoegd aan de database._

**Create (ontwerp tweetallen)**

> Werk in tweetallen en noteer:
>
> 1.  Welke informatie / data heb je nodig als input voor deze opdracht?
> 2.  Wat moet er stap voor stap gebeuren om het resultaat te bereiken? Let op! Je mag geen technische termen gebruiken het gaat om de functionaliteit.
> 3.  Bedenk (of zoek op) welke technische onderdelen je nodig hebt per stap.

Opdracht 4: SQL - INSERT query
==============================

### Het toevoegen van een nieuw album aan de database (in PHPMyAdmin)


> Bekijk nu de **video** over [technisch ontwerp, insert en delete](https://brightspace.hr.nl/d2l/le/lessons/138307/topics/543140) op Brightspace

Open [PhpMyAdmin](http://phpmyadmin.test/) en klik op de database [music\_collection](http://phpmyadmin.test/index.php?route=/database/sql&db=music_collection) en vervolgens op de tabel [albums](http://phpmyadmin.test/index.php?route=/table/sql&db=music_collection&table=albums). Klik vervolgens op de tab 'SQL'.

> Noteer voor het volgende album de INSERT query.
>
> *   album: The Dark Side Of The Moon
> *   artist: Pink Floyd
> *   genre: Progressive Rock
> *   year: 1973
> *   tracks: 9

Klik nu op de tab 'Insert' / 'Invoegen'.

> Voeg hier een album naar keuze toe d.m.v. het formulier (voer de **id** niet in).  
> Zie je een groene balk met de tekst: '1 row inserted.' / '1 rij toegevoegd.', dan is het gelukt. Hieronder staat een 
> query. Vergelijk deze query met jouw query.

Opdracht 5: Createpagina uitwerken
==================================

### Het toevoegen van een nieuw muziekalbum

**Create (uitwerking individueel)**

> Werk de [**opdracht**](start) uit in je persoonlijke map in de Development folder. De startcode staat in de map `start`.  
> **Let op:** gebruik de `index.php` die je hebt gemaakt in de vorige les.

Verder werken
=============

**POST en GET met Postback op dezelfde pagina.**

> Werk [**opdracht 4**](exercises/opdr4-post-en-get-postback.php) uit.

**Createpagina met Postback**

> Je kunt alvast vooruit werken door de createpagina te maken met een Postback. De informatie van het formulier wordt in 
> dat geval naar de `create.php` pagina teruggestuurd en verwerkt.