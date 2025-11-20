# NULL SAFE OPERATOR - Operatore a protezione dei valori nulli

Anche questa è una novità introdotta con PHP8

Tramite questo nuovo operatore, il NULL SAFE OPERATOR, possiamo scrivere del codice più semplice e più sicuro.
Ci permette infatti di verificare che una proprietà o un metodo siano definiti, prima di utilizzarli, così da essere certi che il codice venga eseguito correttamente.

Dove torna utile questo operatore?
Immaginiamoci di volere condividere un video correlato da mostrare ai nostri spettatori al termine di un video selezionato.
Questo video correlato sarà una proprietà privata di classe Video chiamata related che sarà di default NULL.

Quindi scriveremo:

private ?Video $related = NULL;

Immaginiamo poi di avere un altro file e richiamare la classe Video e scrivere il codice seguente:

$video_php = new Video('Video Corso PHP');
$video_git = new Video('Video Corso GIT');

//$video_php->setRelated($video_git);

if($video_php->getRelated()){
    var_dump($video_php->getRelated()->getTitle());
}else{
var_dump('nothing');
}

Ecco invece di fare l’if potremmo usare questo nuovo operatore, il NULL SAFE OPERATOR per vedere se la variabile esiste o meno.

var_dump($video_php->getRelated()?->getTitle());

### IL PUNTO INTERROGATIVO rappresenta il NULL SAFE OPERATOR.

Praticamente PHP va a vedere se l’espressione $video_php->getRelated() torna un valore. Se c’è va avanti e trova il titolo con getTitle ->getTitle(), altrimenti darà null.

A questo punto potremmo usare l’operatore con il doppio punto interrogativo ?? per scrivere:var_dump($video_php->getRelated()?->getTitle() ?? ‘nothing’);

E così in una singola riga avremo scritto l’if else.
