# Reqser.com Modified Modul

![Deepl](Shoproot/admin/images/reqser_modul/modul_logo.png)

## Einleitung

Dieses Modul verbindet den Modified Shop mit einer API Schnittstelle zu Reqser.com und zum Deepl Translater. Das Modul managed alle Fremdsprachen in der Datenbank und den Sprachfiles, es werden automatisch alle texte in alle aktivierten Fremdsprachen übersetzt. Der Shopbetreiber muss also nur noch in seiner Muttersprache Texte erstellen, alle anderen Sprachen übernimmt Reqser.

Über Reqser können die Texte angepasst werden, eine Wörterbuch für zukünftig verbesserte Übersetzungen erstellt oder ein Übersetzer beauftragt werden, die automatisch generierten Texte zu kontrollieren und korrigieren.

## Installation
### 1. Reqser.com

Registrieren dich bei Reqser.com [hier](https://www.reqser.com/register) und erstelle/kopiere dein API Key [hier](https://www.reqser.com/translation/new-website/Modified).

### 2. Modified Modul

Lade alle Dateien aus dem Shoproot (Achtung Admin Ordner muss ggf. umbenennt werden gemäss Ihrem Shop Admin Ordner) in dein Modified Shop und installiere das Modul unter "Systemmodule".
Trage den API Key ein, definiere deine Muttersprache von welcher übersetzt werden soll und definiere die Sprachen in welche du die Übersetzung möchtest.

### 3. Verbindungs Test

Schliesse die Verbindung in Reqser.com ab und prüfe ob die Verbindung erfolgreich war.

### 4. Live Modus

Innerhalb der nächsten 15 Minuten werden die vordefinierten Tabellen cecrawlt und nach 24h-72h übersetzt und in dein Shopsystem übertragen. Beim abändern von Produkt Texten oder Kategorien werden Texte umgehend übersetzt und in den Shop übertragen.


## Weitere technische Informationen

Es ist möglich beliebig viele weitere Tabellen zu übersetzten, jedoch nur wenn im Modified Modul die entsprechende Tabelle freigegeben wird. Sobald die Tabelle im Modul freigegeben ist kann die neue Tabelle unter weitere Einstellungen hinzugefügt werden.
Ebenfalls ist es möglich weitere Spalten die nicht standardmässig aktiviert sind zu übersetzten, dazu ebenfalls enstprechend die Einstellungen bei Reqser nutzen.

Ebenfalls können die Sprachdateien mit übersetzt werden, alle Dateien in der Muttersprache werden übersetzt in den Shop übertrage.

Es ist nicht möglich die Muttersprache zu ändern, dafür muss die Verbindung gelöscht werden und neu in Reqser eingetragen werden. Weitere Sprachen in welche übersetzt werden soll können jederzeit im Modul aktiviert werden, Reqser erkennt die Einstellungen automatisch.

Standardmässig werden folgende Tabellen übersetzt, das lässt sich jedoch ebenfalls in Reqser sowie im Modul einstellen: categories_description, content_manager, orders_status, products_description, products_options, products_options_values

Wichtig, sobald das Modul läuft sind im Shop Änderungen an Fremdsprachen nicht mehr nötig oder machbar, das Modul würde diese Einträge wieder überschreiben. Die Fremdsprachen Texte können auf Reqser manuell angepasst werden oder durch ein Übersetzer perfektioniert werden.

Eine erstmalige Übersetzung ist nach 24h-72h im Shop ersichtlich, Reqser Crawlt alle Texte einmal pro Tag und erkennt automatisch Änderungen und neue Texte.


## Preis

Der Dienst kann kostenlos getestet werden, dabei werden nur eine geringe Anzahl an Einträgen pro Tabelle und Files übersetzt. Die Vollversion ist kostenpflichtig pro Monat.
Im Paket inbegriffen sind 5Mio Zeichen die übersetzt werden, darüber wird pro effektivem Verbrauch verrechnet.

Zusätzlich ist es möglich einen professionellen Übersetzer auf Reqser für die Texte zu buchen, er wird den Shop prüfen und die Deepl Texte verbessern. Dabei wird ein Wörterbuch für jeden Shop individuell angelegt um zukünftig die automatischen Übersetzungen zu perfektionieren.