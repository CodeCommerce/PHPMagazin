# PHP-Magazin - Modulentwicklung mit Oxid V6
## Entwicklung eines Modules zur Verwaltung von Artikel Badges

### Dieses Modul ermöglicht es einem Artikel einen Badge zuzuweisen. Der Artikel wurde für das PHPMagazin geschrieben und stellt daher einen Einblick in die Modlentwicklung mit OXID Version 6 dar.

#### Installation
Bitte kopieren Sie den Ordner in source/modules/phpmag/

Kopieren Sie folgende Code-Zeilen in die composer.json und folgen Sie den Anweisungen im Magazin.

    "require": {
        ....
        "phpmagazin/badges": "^1.0",
        ....
    }
    "repositories": {
        "phpmagazin/badges": {
            "type": "path",
            "url": "./source/modules/phpmag/badges/"
        },
    }