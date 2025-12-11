# Oggetto Data e ora

## Oggetto Datetime

Questo lo mette a disposizione PHP 8 per andare a gestire il tempo in modalità object oriented. Vedremo come sfruttare le timezone per poter convertire in automatico le ore nelle diverse modalità. Vedremo come potremo facilmente formattare una data in base alle nostre esigenze e vedremo come operare su di esse.

Se inizializziamo un nuovo oggetto DateTime() senza passargli nulla avremo la date e ora correnti. Vedremo anche la timezone che sarà quella di default del nostro web server. (Nel caso del video l’apache che gira tramite docker)

Se guardiamo cosa suggerisce l’IDE l’oggetto DateTime si aspetta come primo parametro una stringa datetime. Una data in formato testuale. Come now o tomorrow. E altre cose carine che possiamo scoprire dalla documentazione ufficiale.

Oppure possiamo passare una data nel formato iso => ovvero ‘2024-12-25 09:12:34’ => (una data seguita dall’ora)

Il secondo parametro invece è una timezone, un oggetto Date TimeZone. Se non lo passiamo come dicevamo prenderà quello di default del web server.
Potrebbe prendere una stringa del time Europe/Rome.

Come possiamo vedere, in questo primo esempio, la timezone è stata impostata direttamente nell’oggetto DateTime. E questo fa sì che php vada ad interpretare la data passata come primo parametro nel formato Europe/Rome. Ma spesso invece questo non è quello che vogliamo fare. Quello che vorremo fare è convertire una data standard nella timezone del nostro utente.

Nei database delle nostre applicazioni noi andremo a salvare la data nel formato UTC =>

new DateTime(‘2024-12-25 09:12:34’, new DateTimeZone(‘UTC’));

e dopodiché andremo a variarla per mostrarla all’utente in base alle esigenze. =>

Per fare questo possiamo sfruttare il metodo setTimezone( );

setTimezone(new DateTimeZone(‘Europe/Rome’));

### MOSTRARE AGLI UTENTI

Ora per mostrare agli utenti la data dovremo trasformare il tutto in una stringa. (Abbiamo di partenza un oggetto)
Possiamo usare il metodo format che avevamo già usato ‘d-m-Y H:i:s’

### Metodi
setDate => ci permette di variare la data all’interno del nostro oggetto DateTime.
setTime => ci permette di variare il tempo, (ore, minuti, secondi) all’interno del nostro oggetto DateTime.

Attenzione a quale oggetto e timezone applichiamo i metodi. Cambierà tutto.

## CONFRONTO

Se abbiamo più oggetti datetime possiamo confrontarli tra loro grazie ai classici operatori:
maggiore >
uguale ==
minore <
spaceship <=>

## METODO DIFF

$date->diff($date2); => otterremo la differenza tra le due date. Possiamo vederla facendone il var_dump.
Con questi ed altri metodi potremo gestire il tempo in maniera efficace.
