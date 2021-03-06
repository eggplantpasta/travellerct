# Traveller Tools (CT)
API to manage data, and support game rules for generating that data, for Classic [Traveller](https://en.wikipedia.org/wiki/Traveller_(role-playing_game)).

## NOTE
This repo contains code that is unlikely to work. I've been using the RPG game Traveller for many years as a programming task for learning new languages and frameworks. It'll probably only be of interest to me.

The things I'm trying to learn here are:
* [apiary](https://apiary.io) API building and documentation tool.
* [Yeoman](http://yeoman.io) with the [AngulaJS generator](https://github.com/yeoman/generator-angular#readme) lets you quickly set up a project with sensible defaults and best practices.
* [AngularJS](https://angularjs.org) HTML enhanced for web apps.
* [Slim 3](http://www.slimframework.com) a micro framework for PHP.
* [PHP The Right Way](http://www.phptherightway.com/) modern PHP best practices.
* [SQLite](https://www.sqlite.org/) a built in single file or in memory database.
* [DB Browser for SQLite](http://sqlitebrowser.org) a GUI browser for SQLite. Install via `brew cask install sqlitebrowser`.

## API

The API is available online at [docs.travellerct.apiary.io] (http://docs.travellerct.apiary.io).
The source [blueprint](https://apiblueprint.org/) file apiary.apib is part of this repository together with an HTML version. this HTML is generated using [aglio](https://github.com/danielgtaylor/aglio).

`aglio --theme-variables slate -i apiary.apib -o apiary.html`

## Database

Scripts to create and populate an SQLite database with sample data are contained in the sql directory.
To execute them, from the command line, cd to the project root directory and start the built in PHP web server:

```shell
php -S localhost:8000 -t data/
```

Then, in a web browser, navigate to the [create script](http://localhost:8000/create-sqlite.php?sampledata=yes) to create the database and it's objects and populate it with sample data. The utility scripts in this directory are detailed below.

* [create-sqlite.php](http://localhost:8000/create-sqlite.php) non-destructively creates database objects.
* [create-sqlite.php?sampledata=yes](http://localhost:8000/create-sqlite.php?sampledata=yes) non-destructively creates database objects with sample data. This will leave any existing data untouched, inserting new rows only. If you want a fresh database use one of the scripts below.
* [destroy-sqlite.php?statement=drop](http://localhost:8000/destroy-sqlite.php?statement=drop) clears the database, dropping all database objects and data.
* [destroy-sqlite.php](http://localhost:8000/destroy-sqlite.php) deletes all data leaving tables empty.
