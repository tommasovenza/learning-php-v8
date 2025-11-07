# Deviatore - Switch

Il deviatore fa parte delle struttura di controllo. E’ una struttura basilare di ogni linguaggio di programmazione.
E’ possibile, tramite esso, variare l’esecuzione del programma sulla base del valore di una determinata istruzione.
Il deviatore in PHP si ottiene tramite il comando SWITCH

$status = "draft”;

switch($status) {
case ‘draft’:
echo ‘draft documents’; break;

    case ‘issued’:
    	echo “document issued”;
    	break;

    // fallback
    default:
    echo ‘Unknown status’;

}

Default è un po’ il nostro fallback. Se nessuna delle altre opzioni accade viene rappresentata questa.

I break servono ad uscire dalle condizioni.
Se li leviamo vengono eseguite più istruzioni.

Ma perché si usa questo costrutto ed in che casi? Non bastava l’else/if?

Vediamo questo esempio:

if(calcolo() == 1){
echo 'Draft document';
}elseif(calcolo() == 2 || calcolo() == 3){
echo 'Document issued';
}elseif(calcolo() == 4){
echo 'Document processed';
}else{
echo 'Unknown status';
}

Con l’if dovremmo passare il risultato di calcolo ogni volta. Per questo è nato lo switch.

Ovviamente si poteva passare il risultato di calcolo all’if una volta eseguito, ma ognuno fa quello che vuole ed è possibile usare il deviatore switch.
