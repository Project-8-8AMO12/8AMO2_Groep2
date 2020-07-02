# Project ImkersLeiden

Dit de Laravel webapplicatie van Imkersleiden, gemaakt door Matthijs Harren, Matthijs Verboon en Job van Dijk.

## Om te Beginnen

Dit zijn de instructies om een development kopie van de app te installeren

### Vereisten

Vereiste software om aan de Applicatie te kunnen werken.

* Composer (https://getcomposer.org/) - Omdat de applicatie Laravel gebruikt.
* NPM (https://www.npmjs.com/) - Om Node Mudules te kunnen downloaden en gebruiken.
* Beschikbaarheid tot de PHP commando in je CMD/BASH/CLI. 
* Een PHP IDE - Spreekt voorzich :)

### Installatie

Om te beginnen pull je deze repo. Dat kan met een CLI of GUI git Client, wat je zelf fijn vind

```
git clone https://github.com/Project-8-8AMO12/8AMO2_Groep2.git
```

Daarna voer je in de in de root van de Applicatie de volgende commando's uit:

```
composer install

npm install
```

Nadat ja daarmee klaar bent moeten de Assets op de goede plaats worden neergezet. Dat doe je met de volgende commando:

```
npm run dev
```

Als laatste voer je de volgende commando's uit.

```
cp .env.example .env
php artisan key:generate
```

## Applicatie uitvoeren

Om de applicatie te kunnen bekijken voer je `php artisan serve` uit.

## Gemaakt met

* [Bulma](https://bulma.io/documentation/) - De HTML/CSS framework die we hebben gebruikt
* [Laravel](https://laravel.com/) - De PHP framework die we hebben gebruikt.

## Auteuren

* **Matthijs Harren** - [matthijsHarren](https://github.com/matthijsHarren)
* **Matthijs Verboon** - [matthijsverboon](https://github.com/matthijsverboon)
* **Job van Dijk** - [DijkVanJob](https://github.com/DijkVanJob)

