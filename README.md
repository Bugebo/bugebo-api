# Bugebo - API

## Wie kann ich mich hier dran beteiligen?

Mitmachen kann / darf hier jeder der möchte. Unabhängig von den persönlichen Erfahrungen.
Genug zu tun ist immer reichlich. Angefangen von korrekturen der Rechtschreibung / Grammatik, erfassen von Texten
bis hin zu der eigentlichen Programmierung und Designen.

Alles, was Ihr dazu wissen müsst, findet Ihr in den [Docs](https://github.com/Bugebo/bugebo-api/blob/master/docs/README.md)
oder stellt Eure Fragen auf dem [Discord Server](https://discord.gg/5BUFEJBBdW)

Die erste Anlaufstelle in den [Docs](https://github.com/Bugebo/bugebo-api/blob/master/docs/README.md) sollte [Entwickler- / Contributing-Doc](https://github.com/Bugebo/bugebo-api/blob/master/docs/contributing/README.md)
sein. Dort erfahrt Ihr die grundlegenden Dinge, um hier mitzuwirken.

## Warum kein spezielles Framework?

Ich habe mich ganz bewusst gegen den Einsatz für ein spezielles Framework entschieden. Auch wenn die Entscheidung in der
Wage war.
Was aber nicht heißt, das ich hier wahllos etwas zusammenbaue. Es werden die Packete von [The Php League](https://thephpleague.com/de/)
benützt. Was auch wieder heißt das sehr wohl Teile von Symfony und Laminas benutzt werden. Also irgendwie doch ein
quasi "Selber"Framework. Nein, eigentlich nicht, aber ich denke, dass so der Einstieg für noch nicht erfahrende Entwickler
einfacher ist.

## Installation

1. Klone das Repository `git clone git@github.com:Bugebo/bugebo-api.git`
2. Entweder [Composer](https://getcomposer.org/) installieren, wenn es das nicht schon ist oder die *.phar Datei herunterladen
   und `composer install` ausführen
3. Wenn [Docker](https://www.docker.com/) installiert ist: 
     - kopieren Sie `config/autoload/database.php.dist` und benennen Sie es in `database.php` um.
     - `./scripts/start`
     - `./scripts/seed`

   Wenn [DDEV](https://ddev.readthedocs.io/en/stable/) installiert ist:
     - `ddev config`
     - die ddev Konfiguration `.ddev/config.yaml` auf PHP 8.1 anpassen
     - kopieren Sie `config/autoload/database.php.dist` und benennen Sie es in `database.php` um. Geben Sie dann die Anmeldedaten für die Datenbank ein
     - `ddev start`
     - `php bin/migrations.php migrations:sync-metadata-storage`
     - `php bin/migrations.php migrations:migrate`

   Wenn ein lokaler Webserver mit Datenbank bereits eingerichtet ist, z.Bsp. [XAMPP](https://www.apachefriends.org/de/index.html)
     - kopieren Sie `config/autoload/database.php.dist` und benennen Sie es in `database.php` um. Geben Sie dann die Anmeldedaten für die Datenbank ein
     - `php bin/migrations.php migrations:sync-metadata-storage`
     - `php bin/migrations.php migrations:migrate`

---

## How can I contribute here?

Anyone who wants to can / may contribute here. Regardless of personal experience.
There is always enough to do. Starting with corrections of spelling/grammar, capturing of texts
to the actual programming and designing.

You can find everything you need to know in the [Docs](https://github.com/Bugebo/bugebo-api/blob/master/docs/README.md)
or ask your questions on the [Discord Server](https://discord.gg/5BUFEJBBdW).

The first place to go in the [Docs](https://github.com/Bugebo/bugebo-api/blob/master/docs/README.md) should be the [Developer / Contributing Doc](https://github.com/Bugebo/bugebo-api/blob/master/docs/contributing/README.md)
should be. There you will learn the basic things to contribute here.

## Why no particular frame?

I made a conscious decision not to use a specific frame. Even though the decision was in the balance.
That doesn't mean I'm arbitrarily putting something together here. The packages from [The Php League](https://thephpleague.com/de/)
are used. This also means that parts of Symfony and Laminas are used. So somehow a
quasi "own" framework. No, not really, but I think it's easier for inexperienced developers to get started this way.

## Installation

1. clone the repository `git clone git@github.com:Bugebo/bugebo-api.git`.
2. either install [composer](https://getcomposer.org/) if it is not already or download the *.phar file
   and run `composer install`
3. if [Docker](https://www.docker.com/) is installed:
   - copy `config/autoload/database.php.dist` and rename it to `database.php`.
   - `./scripts/start`
   - `./scripts/seed`

   If [DDEV](https://ddev.readthedocs.io/en/stable/) is installed:
   - `ddev config`
   - change the ddev configuration `.ddev/config.yaml` to PHP 8.1
   - copy `config/autoload/database.php.dist` and rename it to `database.php`. Then enter the credentials for the database
   - `ddev start`
   - `php bin/migrations.php migrations:sync-metadata-storage`
   - `php bin/migrations.php migrations:migrate`

   If a local web server with database is already set up, e.g. [XAMPP](https://www.apachefriends.org/de/index.html)
   - copy `config/autoload/database.php.dist` and rename it to `database.php`. Then enter the credentials for the database
   - `php bin/migrations.php migrations:sync-metadata-storage`
   - `php bin/migrations.php migrations:migrate`
