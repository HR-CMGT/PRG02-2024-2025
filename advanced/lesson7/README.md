# Advanced les 7

## Onderwerpen

- [PHPUnit](https://phpunit.de/getting-started/phpunit-9.html)
- [phpstan](https://phpstan.org/user-guide/getting-started)
- [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
- [JOIN types](http://www.sql-join.com/sql-join-types)
- [ORM Explained](https://blog.bitsrc.io/what-is-an-orm-and-why-you-should-use-it-b2b6f75f5e2a)
- [ERD](https://www.smartdraw.com/entity-relationship-diagram/)

## Opdrachten

### Opdracht 1: Laatste uitwerking & vervolgstappen bekijken (deels klassikaal)

We zijn deze weken bezig geweest met het opzetten van een structuur waar je grotere projecten
op moet kunnen draaien. In de [code van vandaag](.) kun je zien wat het eindresultaat is geworden.

Hierin is rekening gehouden met een `app/public` map, er is een basis voor unit testing (`met phpUnit`)
toegevoegd, er zijn codekwaliteit checks via `phpStan` en er zit een uitgebreider databasemodel in verwerkt.

> **Let op:** Aangezien deze week uitgaat van het principe van een 'public' map, zul je de applicatie
> ook moeten starten vanuit die public map. Dat doe je door te navigeren naar de public map in je
> terminal en daar het vertrouwde `php -S localhost:8888 server.php` te draaien.

#### phpStan zelf draaien

phpStan draait op een phpstan.neon configuratiebestand. Het moment dat je het commando draait wordt
er naar dit bestand gekeken. Daarin bepaal je ook het level waarop phpStan feedback moet geven. Deze
staat nu op level 5 wat geen fouten oplevert. Hoog je deze op naar level 6 krijg je direct 39 errors.

Het commando draai je via een composer script die is toegevoegd in de composer.json:

```bash
composer run-script phpstan
```

#### phpUnit zelf draaien

phpUnit draait op een phpunit.xml configuratiebestand. Het moment dat je het commando draait wordt
er naar dit bestand gekeken. Daarin verwijs je onder andere naar de locatie en kun je optioneel meer
instellingen toevoegen. Alle tests slagen momenteel, maar kunnen door een aanpassing aan de Image of
Session class falen omdat je dan ook je test moet aanpassen.

Het commando draai je via een composer script die is toegevoegd in de composer.json:

```bash
composer run-script test
```

In zijn eigen tijd is Antwan verder gegaan om het project nog verder uit te bouwen en verschillende
'framework' features toe te voegen. Vind je het tof om dit te bekijken en te volgen als er updates zijn?
Check dan het [Github project](https://github.com/antwanvdm/php-oop-music-collection) waarop dit gepubliceerd staat.

### Opdracht 2: Verder werken aan de eindopdracht

Vandaag ga je verder werken aan je eigen eindopdracht. Alle code uit de afgelopen weken kan dienen als
inspiratie. Zorg ervoor dat je jouw opdracht verder uitwerkt en vragen stelt aan de docent als je twijfelt
over bepaalde keuzes of ergens in de uitwerking tegen iets aan loopt.
