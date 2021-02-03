# Webshop kata
## Opdracht:
Maak een kleine webshop met volgende functionaliteit binnen de 4 uur:

- Homepagina waarop 5 producten (naam, prijs, afbeelding) worden weergegeven.

- Bij het klikken op de knop ‘Toevoegen’ naast het product wordt dit aan een winkelwagentje toegevoegd.

- Pagina met winkelwagentje

- Onderaan het winkelwagentje kun je klikken op ‘Afrekenen’. Indien je geen account hebt kom je op de registratiepagina.

- Na het afrekenen wordt een mail met de inhoud van het winkelwagentje naar de gebruiker doorgestuurd.

- Registratiepagina (naam, voornaam, adresgegevens, email, …)

- Na registratie ontvang je een mail met de registratiegegevens.

Opgelet!

De webshop moet in 2 talen raadpleegbaar zijn. De vertalingen van alle teksten, producten, … moeten uit de database komen.

De paginameta info moet ook vertaald worden en uit de database komen.

Technische vereisten:

- SQLite database

- Laravel framework (gebruik blade templating)

- Minimaal 1 AJAX-call verwerken (bv. Toevoegen aan winkelwagen)

- Bootstrap

- Voor uitvoeren van langer durende taken (e-mail) gebruik je Jobs

Tips:

- Besteed niet te veel aandacht aan de grafische uitwerking.

- Houd de werking van de webshop minimaal.

- De mailconfiguratie moet niet werken.

## Mijn gedachten over het project

Ik wist dat ik niet binnen de 4uur alles ging kunnen doen. Het probleem die ik heb met deze probleem stelling is wat is er nu Feature en wat is er nu de core van het product.

Ik heb maar 5 van de 7 opdracht stellingen kunnen doen.

Even een korte samenvatting van elk puntje.

1: Ik heb het gevoel dat mijn databse structuur goed zit. Ik heb de model factory gebruikt met faker om gemakkelijk een paar producten tevoorschijn te toveren. En met de ingebouwde pagination heb ik 5 producten doen verschuiven. Het design van de paginatie is wel gebroken omdat laravel 8 tailwind gebruikt en niet bootstrap.

2: Ik heb geprobeerd crud te gebruiken maar was totaal overbodig. En nu heb ik lege methodes en endpoints die een lege pagina terug geven wat natuurlijk niet goed is. 

Ik heb ook geen ajax kunnen implementern. Ik wou dit achteraf doen maar ik had geen tijd meer.

De winkelmand word gewoon opgeslagen in de sessie. Je kan er producten aan toevoegen maar meer functionaliteit zoals verwijderen van producten of legen winkelmand zit er niet bij.

3: De pagina met winkelmandje was simpel tonen van de producten in de winkelmand sessie.

4: Dit was makkelijk te implementeren door laravals basic scafolding en middleware. De pagina layout is wel niet 100% van het winkelmandje. Bij klikken op afrekekn word je doorgestuurt naar een detail order pagina.

5:Ik heb een mail klasse aangemaakt maar er is iets mis met mijn configuratie en heb geen tijd genoeg om deze te debuggen.

6:Ik heb de bestaande registratie pagina aangepast.

7:Heb ik niet kunnen implementeren.

De vertalingen zijn maar half en half gelukt. Ik heb een extra pakket geinstalleerd om de vertalingen uit de database te halen. Ik heb een extra route in web gemaakt om dit testen en het werkt. Maar om dit overal goed te implementeren is mij niet gelukt.

Uit de technische vereiste heb ik 4 van de 5 kunnen uitvoeren.
Maar de 5de vereiste heb ik niet kunnen testen sinds deze samenhangt met de mail. Ik heb wel bij OrderShipped implements ShouldQueue toegevoegd zodat mails standaard gequed zouden worden.

Als ik nog 2 uur had zou ik het prooject wel in zijn geheel kunnen afwerken.