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
  - Om de locale versie te updaten naar de laatste nieuwe versie (enkel nodig wanneer de online versie geüpdatet is):
    1. Navigeer naar de map waar de cursus staat:
    
       ````
       cd \user\dropbox\web-backend\cursus
       ````
    2. Voer een pull-request uit:
       
       ````
       git pull
       ````

## License

  - Deze cursus wordt beheerd door [Pascal Nosenzo](mailto:info@pascalculator.be)
  - Alles uit deze cursus valt onder de [Apache Licence v2.0](http://www.apache.org/licenses/LICENSE-2.0.html). Alles uit deze cursus mag vrij gebruikt worden, mits dezelfde disclaimer én bronvermelding worden overgenomen.
