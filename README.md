# Ivd24

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 9.1.12, [PHP](https://windows.php.net/download/) version 7.4.9 and [MySQL](https://dev.mysql.com/downloads/installer/) version 8.0.21.

## Resources used

- [Angular Documentation](https://angular.io/docs)
- [Bootstrap Documentation](https://getbootstrap.com/docs/4.5/getting-started/introduction/)
- [Angular Forms](https://www.tutorialspoint.com/angular4/angular4_forms.htm)
- [MySQL Server](https://dev.mysql.com/doc/refman/8.0/en/tutorial.html)
- [MySQL Database Creation](https://linuxize.com/post/how-to-show-databases-in-mysql/)
- [PHP Backend](https://www.techiediaries.com/angular/angular-9-php-mysql-database/)
- [PHP REST API](https://www.youtube.com/watch?v=OEWXbpUMODk&t=372s)

## Development server

1. Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.
2. Run `php -S 127.0.0.1:8080 -t backend` to start the backend server
3. Setup the MySQL Database according to 'backend\api\database.php' settings or change this file for your needs.
   - Create a new database 'userdata'
   - create a new table 'registeredUsers' `CREATE TABLE registeredUsers(id INT(6) PRIMARY KEY AUTO_INCREMENT , gender VARCHAR(1), firstname VARCHAR(30), lastname VARCHAR(30), address VARCHAR(30), postCode VARCHAR(30), city VARCHAR(30), country VARCHAR(30), company VARCHAR(30), phone VARCHAR(30), mobilePhone VARCHAR(30), fax VARCHAR(30), email VARCHAR(50), userName VARCHAR(50), password VARCHAR(50), passwordRepeat VARCHAR(50));`

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
   - Bei Fehlern soll eine Ausgabe im Response CODE enthalten sein,die Aufschluss über den Fehler gibt. Bspw. fehlende oder falsche Emailadresse. **!missing**
   - Pflichtfelder sollen geprüft werden **!missing**
   - Korrekte Schreibweise, so weit wie möglich soll geprüft werden **!missing**
   - POST und RET (Response) bitte als JSON

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory. Use the `--prod` flag for a production build.
