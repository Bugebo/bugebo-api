# Bugebo - API

## Wie kann ich mich hier dran beteiligen?

Mitmachen kann / darf hier jeder der möchte. Unabhängig von den persönlichen Erfahrungen.
Genug zu tun ist immer reichlich. Angefangen von korrekturen der Rechtschreibung / Grammatik, erfassen von Texten
bis hin zu der eigentlichen Programmierung und Designen.

Alles, was Ihr dazu wissen müsst, findet Ihr in den [Docs](https://github.com/Bugebo/bugebo-api/blob/master/docs/README.md)
oder stellt Eure Fragen auf dem [Discord Server](https://discord.gg/5BUFEJBBdW)

Die erste Anlaufstelle in den [Docs](https://github.com/Bugebo/bugebo-api/blob/master/docs/README.md) sollte [Entwickler- / Contributing-Doc](https://github.com/Bugebo/bugebo-api/blob/master/docs/contributing/README.md)
sein. Dort erfahrt Ihr die grundlegenden Dinge, um hier mitzuwirken.

## Installation

1. auschecken: `git clone git@github.com:Bugebo/bugebo-api.git`
2. Docker Container hochfahren: `docker-compose up -d`
3. Abhängigkeiten installieren: `docker-compose exec php composer install`
4. Datenbank vorbereiten:
   - `docker-compose exec php composer run doctrine migrations:sync-metadata-storage`
   - `docker-compose exec php composer run doctrine migrations:migrate`
5. Informationen für SwaggerUI erstellen: `docker-compose exec php composer run openapi`

Und das war es auch schon. SwaggerUI ist über http://localhost/api/docs/ erreichbar.
Sonstige Services siehe composer.json -> scripts

---

## How can I contribute here?

Anyone who wants to can / may contribute here. Regardless of personal experience.
There is always enough to do. Starting with corrections of spelling/grammar, capturing of texts
to the actual programming and designing.

You can find everything you need to know in the [Docs](https://github.com/Bugebo/bugebo-api/blob/master/docs/README.md)
or ask your questions on the [Discord Server](https://discord.gg/5BUFEJBBdW).

The first place to go in the [Docs](https://github.com/Bugebo/bugebo-api/blob/master/docs/README.md) should be the [Developer / Contributing Doc](https://github.com/Bugebo/bugebo-api/blob/master/docs/contributing/README.md)
should be. There you will learn the basic things to contribute here.

## Installation

1. check out: `git clone git@github.com:Bugebo/bugebo-api.git`
2. boot up Docker container: `docker-compose up -d`.
3. install dependencies: `docker-compose exec php composer install`.
4. prepare database:
   - `docker-compose exec php composer run doctrine migrations:sync-metadata-storage`.
   - `docker-compose exec php composer run doctrine migrations:migrate`.
5. create information for SwaggerUI: `docker-compose exec php composer run openapi`.

And that's it. SwaggerUI is accessible via http://localhost/api/docs/.
Other services see composer.json -> scripts
