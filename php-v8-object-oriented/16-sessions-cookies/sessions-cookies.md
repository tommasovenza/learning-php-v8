# Gestione Sessioni - Cookie

Proseguiamo con nuove variabili superglobali, quelle dedicate alla sessioni ed ai cookie.
Spesso ci capiterà di avere la necessità di utilizzare dei dati validi per tutta la sessione in cui l’utente sarà sulla nostra applicazione. L’esempio più calzante è quello della autenticazione. Nel quale un utente arriva come ospite e potrà loggarsi. Ad ogni cambio di pagina potremo riconoscere che l’utente è sempre lui, in modo da potergli fargli vedere le pagine a cui è abilitato. => qui come dicevamo entrano in gioco le sessioni

Invece potremmo voler fare in modo che l’utente resti loggato. Quando magari è andato via dal sito, ma vi sta tornando, nei giorni seguenti. Se vogliamo che resti loggato e non debba autenticarsi nuovamente, per questo scopo, possiamo usare i cookie.

La principale differenza tra sessioni e cookie è che i primi operano lato server, quindi tutte le informazioni che salveremo sulla variabile superglobale $\_SESSION saranno fisicamente salvate sul nostro server web. Invece tutto quello che rientra nella variabile $\_COOKIE, sarà salvato sul dispositivo del nostro utente.

I cookie però, possono essere manomessi dall’utente. Dobbiamo prevedere in applicazioni reali delle opportune modalità di verifica perchè questi non siano contraffatti.

## SESSIONI

Le sessioni non sono esplicitamente attive in PHP, di default. Se vogliamo utilizzarle dobbiamo prima dirlo all’interprete PHP. Come si fa? Richiamando la funzione session_start( );

Dobbiamo fare attenzione, questa funzione deve essere la prima cosa che facciamo. => altrimenti otterremo un warning con scritto bene che la sessione non può essere inizializzata. Va sopra al require_once. Subito dopo l’apertura php => <?php

Una volta comunicato all’interprete che vogliamo utilizzare le sessioni avremo a disposizione la variabile superglobale $\_SESSION.
Possiamo aggiungere all’array $\_SESSION tutte le voci che vogliamo in base alle necessità della nostra applicazione. Questo magari usando chiave valore (è un array associativo)

Un’altra funzione utile da sapere è la funzione session_destroy che viene che viene spesso utilizzata in fase di logout.

Se la usiamo il contatore implementato nell’esempio del video non verrà più incrementato dato che la sessione sarà distrutta e non ci sarà modo di tenere traccia del valore precedente del counter. => Verrà infatti ricreata una nuova sessione ogni volta.

### Ma come fa il browser a ricordare la sessione?

Lo vediamo subito andando in application => cookie => troveremo PHPSESSID dentro c’è un valore randomico. È l’id univoco generato da session_start( ) qualora non ne venga già trovato uno già presente qui, in questa tab/sezione del browser.

Se proviamo a cancellarlo e aggiornare la pagina vedremo che ne sarà generato un altro.

Come fa il server PHP ad associare questo cookie/ID alla sessione del browser? => Vediamo nella tab rete, selezioniamo la richiesta e scorrendo noteremo la dicitura cookie con PHPSESSID ed il valore del nostro cookie. Il browser sta quindi dicendo al server PHP: caricami la sessione con questo ID

## COOKIE

Anche in questo caso ho ottenuto un warning usando la funzione setcookie( ‘name’, ‘value’ ) => questa deve esser messa all’inizio del file come session_start

setcookie è la funzione giusta da usare se vogliamo fare in modo che i cookie persistano al ricaricamento della pagina. Difatti se proviamo a passare a $\_COOKIE una chiave ed un valore come faremmo in PHP questo valore non persisterà, dato che le informazioni dei cookie in questo caso non devono passare dal server, ma dal browser.

La funzione setcookie prende, potenzialmente, molti argomenti. =>

setcookie(
    string $name,
    string $value = "",
    int $expires_or_options = 0,
    string $path = "",
    string $domain = "",
    bool $secure = false,
    bool $httponly = false
): bool

Ecco i parametri spiegati:
===>

name
The name of the cookie.

value
The value of the cookie. This value is stored on the clients computer; do not store sensitive information. Assuming the name is 'cookiename', this value is retrieved through $\_COOKIE['cookiename']

expires_or_options                             
The time the cookie expires. This is a Unix timestamp so is in number of seconds since the epoch. One way to set this is by adding the number of seconds before the cookie should expire to the result of calling time(). For instance, time()+60*60*24\*30 will set the cookie to expire in 30 days. Another option is to use the mktime() function. If set to 0, or omitted, the cookie will expire at the end of the session (when the browser closes).

Nota:
You may notice the expires_or_options parameter takes on a Unix timestamp, as opposed to the date format Wdy, DD-Mon-YYYY HH:MM:SS GMT, this is because PHP does this conversion internally.

path
The path on the server in which the cookie will be available on. If set to '/', the cookie will be available within the entire domain. If set to '/foo/', the cookie will only be available within the /foo/ directory and all sub-directories such as /foo/bar/ of domain. The default value is the current directory that the cookie is being set in.

domain
The (sub)domain that the cookie is available to. Setting this to a subdomain (such as 'www.example.com') will make the cookie available to that subdomain and all other sub-domains of it (i.e. w2.www.example.com). To make the cookie available to the whole domain (including all subdomains of it), simply set the value to the domain name ('example.com', in this case).

Older browsers still implementing the deprecated » RFC 2109 may require a leading . to match all subdomains.

secure
Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client. When set to true, the cookie will only be set if a secure connection exists. On the server-side, it's on the programmer to send this kind of cookie only on secure connection (e.g. with respect to $\_SERVER["HTTPS"]).

httponly
When true the cookie will be made accessible only through the HTTP protocol. This means that the cookie won't be accessible by scripting languages, such as JavaScript. It has been suggested that this setting can effectively help to reduce identity theft through XSS attacks (although it is not supported by all browsers), but that claim is often disputed. true or false

options
An associative array which may have any of the keys expires, path, domain, secure, httponly and samesite. If any other key is present an error of level E_WARNING is generated. The values have the same meaning as described for the parameters with the same name. The value of the samesite element should be either None, Lax or Strict. If any of the allowed options are not given, their default values are the same as the default values of the explicit parameters. If the samesite element is omitted, no SameSite cookie attribute is set.

Nota:
To set a cookie that includes attributes that aren't among the keys listed, use header().

## IMPORTANTE

Sarà bene fare attenzione a tutte le normative europee introdotte con la GDPR per quanto riguarda l’uso di tutti questi cookie.
