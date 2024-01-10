# PHP Iscrizione Newsletter

### Descrizione

Questo progetto consiste in una semplice pagina web che permette agli utenti di inserire il proprio indirizzo email per iscriversi a una newsletter. Il progetto utilizza il linguaggio PHP per la logica e il framework Bootstrap per lo stile.

### Funzionalità chiave

- Il progetto verifica che l’indirizzo email inserito sia valido, ovvero che contenga un punto e una chiocciola.

- Il progetto mostra un messaggio di successo o di errore a seconda dell’esito della verifica, usando un alert di Bootstrap.

- Il progetto, in caso di successo, reindirizza l’utente a una pagina di ringraziamento, dove mostra anche l’indirizzo email con cui si è iscritto.

### Storia del progetto

Il progetto è stato sviluppato seguendo le seguenti milestone:

- **Milestone 1**: Creazione della pagina index.php con il form per l’inserimento dell’email. La logica di verifica è tutta dentro index.php. Il messaggio di successo o di errore è mostrato dentro un alert di Bootstrap.

- **Milestone 2**: Spostamento della logica di verifica dentro il file functions.php, che viene incluso in index.php.

- **Milestone 3**: Modifica della classe dell’alert in base all’esito della verifica.

- **Milestone 4**: Creazione della pagina thankyou.php, dove si mostra il messaggio di ringraziamento e l’email inserita. In caso di successo, index.php effettua un redirect a thankyou.php, usando una variabile di sessione per passare l’email.
