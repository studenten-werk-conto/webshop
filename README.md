# Basis webshop voor lessen webshop bouwen

## Starten van applicatie

In de **database** map staan een __webshop.sql__

Zorg dat je lokaal dit bestand in een database **webshop** hebt geimporteerd.

## Mappenstructuur

- ***admin*** 
    - Is het mapje waar het CMS (Content Management System) of Admin panel komt van de webshop.
- ***assets*** 
    - Hierin staan de css, js en images.
    - Ook staan hier de upload images die geupload worden vanuit het CMS
- ***core***
    - In dit mapje staat de database connectie.
    - De header en de footer van de HTML voorkant.
    - **admin/core** bevat nog een checklogin function file. 
- ***functions***
    - Hier komen de _functions_ van de webshop in te staan. Denk hierbij aan het ophalen van producten of het plaatsen van een bestelling.

 ## Code conventions
Link notion: https://www.notion.so/Code-afspraken-cb7f9788b9ae46dfa782545ec3aec572

- [ ]  CMS inlog
- [ ]  CMS module Users
- [ ]  CMS module Products
- [ ]  CMS module Categories
- [ ]  CMS module Customers
- [ ]  Front-end Homepage met een aantal random producten en category data
- [ ]  Front-end Product overzicht pagina
- [ ]  Front-end Product detail pagina
- [ ]  JOINen van category-data bij producten
- [ ]  Alle queries met een prepare statement
- [ ]  Alle queries met parameter-binding of result-binding
- [ ]  Alle $_POST waardes voorzien van een mysqli real_escape_string
- [ ]  Geen PHP errors op de pagina's
- [ ]  Alle functionaliteiten getest

---

Extra

- [ ]  CMS product afbeeldingen uploaden
- [ ]  Front-end Winkelmand overzicht met aantallen, prijzen en totaalprijs
- [ ]  Front-end Winkelmand kunnen aanpassen (door klant)
- [ ]  Front-end Bestelling plaatsen
- [ ]  CMS module Bestellingen
- [ ]  vaker voorkomende code in functies

---

## Database

- [ ]  Zelf een SELECT query kunnen schrijven met een WHERE statement.
- [ ]  Zelf een UPDATE query kunnen schrijven, waarbij 1 regel kunnen kan wijzigen.
- [ ]  INSERT
- [ ]  DELETE
- [ ]  SELECT JOIN
- [ ]  Relaties tussen tabellen
- [ ]  Tabellen aanmaken
- [ ]  Veldtypes kunnen aangeven
- [ ]  Tabellen voorzien Primary Keys
- [ ]  Tabellen; product, product_image, category, customer

---

- [ ]  Orders opgeslagen in database op juiste wijze (zie notion)
- [ ]  Extra query functies gebruikt (denk aan Order By, Group By, Limit, Rand(), ... , ... )