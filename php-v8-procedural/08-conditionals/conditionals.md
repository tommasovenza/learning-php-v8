# Condizioni

Le condizioni o affermazioni condizionali fanno parte delle strutture di controllo di PHP.
Sono fra le strutture basilari di ogni linguaggio di programmazione.
Tramite le condizioni è possibile variare il percorso di un programma.

Funzionano tramite la validazione di una espressione booleana.
Qualora l’espressione non dia un valore booleano in risposta, verrà effettuato automaticamente il casting a booleano secondo le regole che abbiamo già visto in precedenza.

Il codice PHP ha una certa sintassi se scriviamo solo PHP non mischiato con HTML.
Se invece facciamo cose dentro al codice HTML (Template HTML) come è possibile fare con PHP, PHP ci fornisce sintassi diverse e più opportune.

If else (PHP)
endif (PHP con HTML)

Quindi se stiamo lavorando su un template HTML altre forme ci possono risultare più comode. => es. Sintassi con endif ed istruzioni condizionali che terminano con i due punti :

<html>
<body>

<?php if($voto == 7): ?>

    <strong>buono</strong>

<?php elseif($voto == 6): ?>

    <strong>sufficiente</strong>

<?php else: ?>

    <strong>insufficiente</strong>

<?php endif; ?>

</body>
</html>
