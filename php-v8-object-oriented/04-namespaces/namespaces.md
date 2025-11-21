# Namespaces in PHP

I _namespace_ servono per organizzare e isolare il codice in PHP, evitando conflitti di nomi e rendendo la struttura di un progetto più chiara e manutenibile.

## Cosa sono

Un namespace è un “prefisso” che PHP applica a classi, funzioni e costanti per indicare da quale spazio logico provengono.  
Sono concettualmente simili alle cartelle del filesystem:

- puoi avere due file con lo stesso nome in cartelle diverse
- puoi avere due classi con lo stesso nome in namespace diversi

Esempio:

- `App\YouTube\Gateway`
- `App\PeerTube\Gateway`

Entrambe si chiamano `Gateway`, ma PHP le distingue grazie al namespace.

## Perché servono

1. **Evitano conflitti di nomi**  
   Permettono di avere classi con lo stesso nome in parti diverse del progetto.

2. **Organizzano il progetto**  
   I namespace riflettono la struttura delle directory e rendono il codice più leggibile.

3. **Autoloading (PSR-4)**  
    Composer carica automaticamente le classi basandosi sulla corrispondenza:

   namespace → cartella
   classe → file

## Dichiarare un namespace

```php
<?php
namespace App\YouTube;

class Gateway {
 // ...
}
```

Importare una classe

use App\YouTube\Gateway;

$yt = new Gateway();

Alias con as

Quando due classi hanno lo stesso nome, usa un alias:

use App\YouTube\Gateway as YouTubeGateway;
use App\PeerTube\Gateway as PeerTubeGateway;

$yt  = new YouTubeGateway();
$pt = new PeerTubeGateway();

Esempio completo

<?php

include '../src/Video.php';
include '../src/YouTube/Gateway.php';
include '../src/PeerTube/Gateway.php';

use App\YouTube\Gateway as YouTubeGateway;
use App\PeerTube\Gateway as PeerTubeGateway;

$video_php = new Video('Video Corso PHP');

$youtubeGateway = new YouTubeGateway();
$youtubeGateway->createVideo($video_php);
var_dump($youtubeGateway);

$peertubeGateway = new PeerTubeGateway();
$peertubeGateway->createVideo($video_php);
var_dump($peertubeGateway);

---

Un namespace è un cognome che assegni alle tue classi per evitare conflitti e mantenere il codice ordinato.
