# Configurazione del Web Server - Apache

Il web server Apache non è certo l’unico, ma sicuramente è uno dei più utilizzati nello sviluppo con PHP.
Conoscere a fondo questo servizio esula dai temi del corso. Tuttavia un minimo di conoscenza di base è utile.

Per cui vedremo =>

1. il file di configurazione di Apache
2. Il virtual hosts
3. Ed il famoso .htaccess

La configurazione del web server apache si fa tramite un file chiamato httpd.conf

La posizione di questo file varia in base a diversi fattori come:
Il sistema operativo, la versione e per come è stato installato apache sul sistema.

## HTTPD.CONF

È un file di testo.
Anche in questo file ogni riga corrisponde o ad un commento o ad una direttiva.

La prima direttiva che troviamo è la ServerRoot che rappresenta la directory principale dalle quale verrano poi caricate tutte le informazioni.
Listen che corrisponde alla porta sulla quale resterà in ascolto il nostro server. (Tipicamente la porta 80 per HTTP e 443 HTTPS)
Dopo c’è tutto un elenco di moduli aggiuntivi che vengono caricati con il nostro apache.

ServerAdmin e ServerName che possiamo personalizzare come lasciare così dato che siamo in un ambiente di sviluppo.
Dopodiché si parte con le directory in cui possiamo inserire i percorsi a cui il nostro web server avrà accesso, ed effettuare tutte le configurazione necessarie ed eventuali per i nostri siti web.

Se risaliamo dove è specificata la direttiva DocumentRoot possiamo vedere che la directory impostata per la document root è quella del nostro progetto.
Se andiamo ad aprire questa directory col browser vedremo che è la root del progetto. Equivale a localhost:80 => qui c’è la document root. Viene eseguito se la apriamo il file index.php che è quello di default per la configurazione dell’interprete PHP.

Opzione INDEXES
Se non ci fosse questa opzione, dentro la configurazione della nostra directory, non vedremmo i progetti indicizzati. (Un po’ come quelli in htdocs di Wordpress)

## VIRTUAL HOST

Un **virtual host** permette a un server web di gestire più siti sulla stessa macchina, usando lo stesso indirizzo IP e la stessa porta.  
Il server sceglie quale sito servire in base al dominio presente nell’header `Host`.

## Esempio Apache

```apache
<VirtualHost *:80>
    ServerName miosito.test
    DocumentRoot /var/www/miosito
</VirtualHost>

Esempio Nginx
server {
    listen 80;
    server_name miosito.test;
    root /var/www/miosito;
}

hosts locale (sviluppo)
127.0.0.1   miosito.test

## FILE HTACCESS
Viene utilizzato nella maggior parte dei casi per attivare i redirect sui siti web.

var_dump( $SERVER[‘REQUEST_URI’]);

Non si imparano a memoria, ma si ricopiano dalle mille documentazioni che si trovano online. Si va a verificare che esista il modulo Rewrite nel nostro Apache. Qualora esista si attiva il rewrite Engine, si vanno ad inserire delle condizioni per reindirizzare sul file index.php

Ecco cosa si può fare con i file di configurazione di apache. Vedremo poi questa cosa nel dettaglio in seguito.
```
