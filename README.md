Complete Web Backend Course (PHP)
===========

## Installation

  - Download deze repository naar een map op jouw harde schijf door middel van de [CLI](http://en.wikipedia.org/wiki/Command-line_interface):

    1. Navigeer naar de map waar de cursus moet staan:
    
       ````
       cd \user\dropbox\web-backend
       ````
    2. Clone de web-backend repository naar de map cursus:
       
       ````
       git clone https://github.com/pascalculator/web-backend.git cursus
       ````

  - Stel een virtual host in met als url `web-backend.local` in het host bestand (zie slides virtual-server-setup.pdf)

  - Stel in XAMPP (of andere virtual server) de virtual hosts zo in dat alle http://web-backend.local requests omgeleid worden naar de fysieke map waar de repository is gedownload (`\user\dropbox\web-backend\cursus`)

## Nieuwste versie van de cursus ophalen

  - Om de lokale versie te updaten naar de laatste nieuwe versie (enkel nodig wanneer de online versie geüpdatet is):
    1. Navigeer naar de map waar de cursus staat:
    
       ````
       cd \user\dropbox\web-backend\cursus
       ````
    2. Voer een pull-request uit:
       
       ````
       git pull
       ````

## Je eigen oplossingen uploaden naar je online repository

  - [Maak een GitHub repository](https://help.github.com/articles/create-a-repo) aan die je oplossing zal bevatten en voer de voorgestelde bewerkingen uit.

  - Telkens wanneer je een oplossing hebt afgewerkt, kan je deze op je online repository zetten

  - Open de CLI en voer de volgende commands uit:

    1. Navigeer naar de map waar je oplossingen staan
       ````
       cd \user\dropbox\web-backend\oplossingen
       ````

    2. Bekijk de status van je lokale git repository om te weten te komen welke bestanden er gewijzigd/toegevoegd/verwijderd zijn
       ````
       git status
       ````

    3. Voeg de wijzigingen/toevoegingen/weglating toe aan je lokale repository 
       ````
       git add .
       ````
    De `.` staat voor de hele working directory

    4. Finaliseer je wijzigingen door deze aan de repository toe te voegen. Voeg best ook een boodschap toe
       ````
       git commit -m "Oplossing toegevoegd"
       ````
    De `-m` staat voor "message". Je voegt best iedere keer een beschrijving toe van wat je in deze commit hebt uitgevoerd.

    5. Voeg je lokale repository samen met de repository die online op je GitHub-account staat
       ````
       git push origin master
       ````
    De `origin` staat voor url van je GitHub oplossingen repository. De `master` staat voor je lokale versie.

## License

  - Deze cursus wordt beheerd door [Pascal Nosenzo](mailto:info@pascalculator.be)
  - Alles uit deze cursus valt onder de [Apache Licence v2.0](http://www.apache.org/licenses/LICENSE-2.0.html). Alles uit deze cursus mag vrij gebruikt worden, mits dezelfde disclaimer én bronvermelding worden overgenomen.
