# xDebug

xDebug is een tool die je helpt de programmeerervaring een stuk aangenamer te maken.
Tot nu toe was je gewend om `print_r` of `var_dump` te gebruiken. Het werkt, maar het
geeft ook een hoop rommel omdat veel van die code vaak achterblijft in applicaties.
Ook is handmatig toevoegen van zo'n stukje code niet echt efficient en foutgevoelig.
Als je na het volgen van deze stappen xDebug aan de praat hebt, is dat verleden tijd.

Meer informatie: https://xdebug.org/

## Installatie

Om xDebug aan de praat te krijgen moet je deze aanzetten in Herd.

- Mac: https://herd.laravel.com/docs/1/debugging/xdebug
- Windows: https://herd.laravel.com/docs/windows/1/advanced-usage/xdebug

> Let op: Na het aanpassen van de `php.ini` moet je herd opnieuw opstarten!

### Browser plugin

Naast xDebug zelf heb je ook een plugin nodig voor in je browser. Deze zorgt er straks voor
dat je jouw applicatie toestemming geeft om te gaan debuggen. Via de betreffende plugin stores
kun je deze installeren:

- [Chrome/Edge](https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc)
- [FireFox](https://addons.mozilla.org/en-US/firefox/addon/xdebug-helper-for-firefox/)
- [Safari](https://apps.apple.com/app/safari-xdebug-toggle/id1437227804?mt=12)

## Gebruik browser & phpStorm

Nu je alles hebt geïnstalleerd kun je xDebug in gebruikt gaan nemen, daarvoor kun je de volgende
stappen uitvoeren.

1. Zet je browserplugin aan op "debug" terwijl je jouw website open hebt staan
   ![Step 1](configure-step1.png)<br><br>
2. Zet je phpStorm "Start Listening for PHP Debug Connections" aan (icoontje met telefoontje)
   ![Step 2](configure-step2.png)<br><br>
3. Plaats een breakpoint op een plaats waar je meer informatie over wilt verkrijgen (debugging!)
   ![Step 3](configure-step3.png)<br><br>
4. Vernieuw de webpagina eenmalig en je wordt automatisch naar phpStorm gestuurd, accepteer hier
   de request en check of het juiste bestand hier is geselecteerd.
   ![Step 4](configure-step4.png)<br><br>
5. **YEAH!** Daar is je debuginformatie. Gefeliciteerd, vanaf nu heb je geen `print_r` en `var_dump`
   meer nodig. Welkom in de wereld van professioneel debuggen 🥳
   ![Step 5](configure-step5.png)

> Let op: Na gebruik is het altijd slim om zowel de listener in phpStorm uit te zetten als ook de
> knop in je plugin van de browser (zet hem weer op 'disable'). Daarmee weet je zeker dat je requests
> niet per ongeluk blijven hangen door een xDebug proces wat nog draait.

## Referenties

- https://xdebug.org/wizard
- https://www.jetbrains.com/help/phpstorm/2024.2/zero-configuration-debugging.html