# Testing Gerarchie e Ereditarietà

Sto provando a creare un sistema usando Interfacce, classi Astratte e classi Derivate
L'idea è quella di avere un sistema che gestisce autenticazione utenti, login, logout e cose del genere

Ci potrebbe essere una Interfaccia per stabilire i metodi per l'autenticazione
ci potrebbe essere una classe astratta Utente ed altre classi derivative per i singoli utenti: Admin, Manager, Editor, Viewer ecc.

Potremmo poi avere una classe PermissionChecker per verificare i permessi degli utenti
metodo can(User $user, string $permission)

Lavorando a questo progetto ho scoperto che:

=> usando le proprietà statiche è possibile mantenere dati tra le istanze create ogni volta. In questo modo ad esempio ho aggiunto in un array tutti gli admin. Ho simulato poi di salvarli in un DB, ma potrei recuperarli da lì

=> Ho creato poi un metodo statico per ottenere tutti gli admin a prescindere dalle loro istanze.

=> Altra cosa figa da ricordare, e che ho capito è che $this->property serve per riferirsi alle istanze dell'oggetto. Invece con self::$property posso accedere alla classe!

=> le classi astratte NON possono essere istanziate!!
=> USER è una mia classe astratta, quindi il codice dopo è sbagliato

$newUser = new User();
var_dump($newUser);
