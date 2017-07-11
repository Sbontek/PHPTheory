<?php

/*

•JSON
Bouw je applicatie van vorige week verder uit met een webservice om JSON-data uit 1 
    of meerdere tabellen te tonen op het scherm met json_encode()
    
Experimenteer ook met alle options voor json_encode zoals op bladzijde 181 staan van het boek

Maak 1 simpele klasse die de JsonSerializable implementeert en data uit je database in JSON 
    formaat weergeeft wanneer de json_encode wordt uitgevoerd met een object van de klasse. 

Pas de json_decode functie op bovenstaandepagina’s, waarbij je 1 keer de 
    tweede argument (bij assoc) op true zet en bij de andere op false (default)

Maak expres een fout in JSON zodat je de fout kan uitlezen met de json_last_error en json_last_error_msg functies

DateTime

Experimenteer met 2 verschillende datetime-zones; in je php.ini bij date.timezone en via date_default_timezone_set. 
    Toon aan dat je met beide timezones andere resultaat krijgt op het scherm. 

Haal datum/tijden op uit je database en geef deze mee aan een DateTime object via setDate()-methode. 
    Roep vervolgens de format()-methode aan om de datum/tijd op het scherm te tonen.

Haal datum/tijden op uit je database en geef deze mee aan een DateTimeImmutable object; 
    beschrijf het verschil met DateTime. Roep vervolgens de format()-methode aan om de datum/tijd 
    op het scherm te tonen; pas meerdere .

Pas de date(), mktime(), strtotime() en time() functies toe in combinatie met het DateTime object. 
    Roep vervolgens de format()-methode aan om de datum/tijd op het scherm te tonen en experimenteer met 
    verschillende formaten

Pas ook de microtime() functie toe

Voeg 1 dag en 8 uur toe aan een datum/tijd dmv de add()-methode 

Vergelijk 2 datum/tijden met elkaar 

Vraag de unix-timestamp op van een datum/tijd

Pas een datum/tijd aan via de modify()-methode

XML

Maak zelf een XML-bestand met meerdere XML-nodes of pak een bestaande van internet (Bijv bij 
    https://msdn.microsoft.com/en-us/library/ms762271(v=vs.85).aspx)

Laad de XML-bestand in met behulp van Simple XML








*/
?>