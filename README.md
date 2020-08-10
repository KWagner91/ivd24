# Ivd24

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 9.1.12.

## Project Requirements

Erstellung einer Landing-Page (ResponsiveWebdesign) für die zukünftige Kooperation mit Ebay Kleinanzeigen.

1. Als Template Grundlage verwenden Sie bitte das Layout des ivd24immobilien Portals und entwickeln eine eigene Idee zum Aufbau einer Content Seite/Landingpage. 
2. Setzten Sie bis zu 4 Headlines und Content Blöcke ein, die neben Aufzählungen auch andere wichtige Formatierungsmöglichkeiten beinhalten sollte.
- Jede Headline soll einem Menüpunkt im Kopfbereich entsprechen.
- Beim Klick auf einen Menüpunkt soll „elegant“ an die entsprechende Stelleder Headlinegescrollt werden.
3. Bauen Sie ein Login-Formular, welches in Ihrer Content Seite beim zweiten Menüpunktdargestellt wird.
- Senden Sie den Benutzername und das Passwort als POST Parameter an https://www.ivd24immobilien.de/login. 
- Verwenden Sie bei den namen der Inputfelder bitte "username" und "password". 
4. Erstellen Sie ein Registrierungsformular, das entsprechend des folgenden Formulars unter https://www.ivd24immobilien.de/register aufgebaut ist und die selben Felder beinhaltet. Dieses Formular soll unter dem vierten Menüpunkt zu sehen sein.
5. Senden Sie die Daten aus dem Registrierungsformular, als REST/SOAP POST Daten an eine API URL die Sie ebenfalls selbst programmieren. Ihre API Response URL empfängt die Daten und gibt diese, wenn alles korrekt ist mittels ECHO wieder aus. Folgende Funktion soll die API übernehmen: 
- Response Code 200 wenn alles OK (inkl. Echo ausgabe aller Daten) und Email zur Bestätigung anden Kunden. Sie haben Sich erfolgreich registriert.
- Speichern Sie die Daten in eine mySQLDatenbank
- Response Code 4XX wenn Probleme auftreten
- Bei Fehlern soll eine Ausgabe im Response CODE enthalten sein,die Aufschluss über den Fehler gibt. Bspw. fehlende oder falsche Emailadresse.
- Pflichtfelder sollen geprüft werden
- Korrekte Schreibweise, so weit wie möglich soll geprüft werden
- POST und RET (Response) bitte als JSON

## Development server

Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.

## Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory. Use the `--prod` flag for a production build.

## Running unit tests

Run `ng test` to execute the unit tests via [Karma](https://karma-runner.github.io).

## Running end-to-end tests

Run `ng e2e` to execute the end-to-end tests via [Protractor](http://www.protractortest.org/).

## Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI README](https://github.com/angular/angular-cli/blob/master/README.md).
