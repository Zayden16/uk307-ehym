# M307 Projektarbeit "Reparaturwerkstatt" - Enis Hoti & Yazdan Musa
Wir haben im Kurs ein Projekt auswählen können, mit dem wir uns die nächsten Tage beschäftigen werden und dann auch bewertet wird. Wir (Enis und Yazdan) haben uns entschieden die Projektarbeit zusammen zu machen, da wir ein gutes Verhältnis pflegen und wir beide verschiedene Stärken zum Einsatz bringen können.
Der Auftrag ist es, eine Webseite für eine Reparaturwerkstatt zu programmieren mit den jeweils erlernten Hilfsmittel. Die Webseite soll dafür bereit stehen, den Mitarbeitern eine einfachere Auftrag-Erfassung zu geben. Zu dem sollen auch alle aktive und abgeschlossenen Aufträge angezeigt werden.


## Backstory aus Github von dem Instruktor

Die Firma WeBau ist ein mittelständiges Bauunternehmen. Das Unternehmen ist an eure Webagentur herangetreten und möchte die internen Abläufe in der Reparaturabteilung vereinfachen. Dazu soll ein Verwaltungs-Tool für interne Reparaturaufträge von Werkzeugen entwickelt werden. Das Tool wird nur von internen Mitarbeitern verwendet. Es muss kein Login- oder Registrierungssystem vorhanden sein da das Tool vorerst nicht direkt vom Kunden verwendet wird.

### In den Grundzügen soll das Tool folgende Aufgaben übernehmen:
```bash
- Neue Reparaturaufträge sollen erfasst werden können.
- Bestehende Reparaturaufträge sollen übersichtlich angezeigt werden können.
- Bestehende Reparaturaufträge sollen mutiert werden können.
```
## Skizzen
Um eine gewisse Struktur-Vorstellung zu haben, haben wir Skizzen erstellt, die unseren Vorsstellungen nach entsprechen und umsetzbar sind.
Unsere Homepage soll in ungefähr so aussehen, wenn wir damit fertig sind.
![alt text](https://github.com/Zayden16/uk307-ehym/blob/master/documentation/Homepage.PNG "Logo Title Text 1")

Unser Formular für die Auftrag-Erfassung soll in etwa so aussehen:
![alt text](https://raw.githubusercontent.com/Zayden16/uk307-ehym/master/documentation/Formular.PNG "Logo Title Text 1")

## Datenbank
Die ersten Schritte in der Datenbank waren mal, eine zu erstellen. Die Tabellen erstellen, Felder anlegen usw. Den jeweiligen Felder mussten wir noch die Typen zuweisen und auch die PRIMARY KEY's und FOREIGN KEY's zuweisen. 
Zunächst mussten wir in der tools-Tabelle die Tools (Werkzeugue) erstellen und der Tabelle zuweisen.
Auch der adress-Tabelle mussten wir 1-2 Adressen erfassen um zu testen, ob es auch funktioniert, wie wir es uns vorstellen.
Der importances-Tabelle mussten wir auch 5 gesetzte Dringlichkeiten zuweisen, welche dann auch auf dem Formular als Dropdown zur Verfügung stehen werden. Ein Bild dazu noch von der Datenbank. (Siehe Bild unten)
![alt text](https://github.com/Zayden16/uk307-ehym/blob/master/documentation/Struktur.PNG "Logo Title Text 1")


# Achtung! Unsere Website wurde in Mozilla Firefox (Developer-Edition) erstellt und getestet. Sie funktioniert nicht richtig mit dem Chromium V8 Engine!

