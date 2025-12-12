# Caricamento di Allegati

La variabile superglobale di oggi è $\_FILES. È dedicata al loop load dei files dal client verso il server. Potremmo nelle nostre applicazioni dare la possibilità all’utente di allegare dei files da poi andare a salvare sul server. Possiamo in PHP, per raggiungere questo scopo, usare la variabile superglobale files. Ci permette di gestire gli upload dal client verso il server.
Nel file di configurazione php.ini sono presenti un sacco di parametri tra cui, quelli più importanti, quelli che ci permettono di gestire la quantità di files che possono essere caricati e la loro dimensione massima.
I valori di default sono bassi.

Per gestire correttamente gli allegati il nostro form dovrà avere l’attributo per l’encription type. In genere si usa multipart/form-data

## STORARE DEI FILES

move_uploaded_file(‘path file temporaneo’, ‘path di destinazione del file’);

max_files_uplaods => quantità massima dei files in una singola richiesta
upload_max_filesize => dimensione massima dei files che possiamo caricare.
default_socket_timeout => fare attenzione a questa se carichiamo files di grandissime dimensioni (files grossa e tempo in cui gira lo script)
