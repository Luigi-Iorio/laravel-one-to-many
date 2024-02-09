# Laravel Portfolio

### Descrizione

L'obiettivo di questa repo è quello di sviluppare un sistema di gestione del portfolio, includendo funzionalità di autenticazione e un'interfaccia per il back-office.

### Funzionalità Principali

-   **Autenticazione**: Il progetto inizia con l'implementazione dell'autenticazione, fornendo agli utenti un accesso sicuro al sistema. È stato creato un layout dedicato per il back-office, garantendo un'esperienza utente coerente e intuitiva.

-   **Gestione dei Progetti**: È stato definito un modello Project con la relativa migrazione per la creazione della tabella nel database. Inoltre, sono stati sviluppati un seeder per popolare il database con dati di esempio, un controller dedicato per gestire le operazioni CRUD sui progetti e le rotte necessarie per accedere a tali funzionalità.

-   **Back-office**: Per gestire le operazioni CRUD dei progetti lato amministrativo, è stato creato un resource controller Admin\ProjectController. Questo controller fornisce le funzionalità necessarie per creare, leggere, aggiornare ed eliminare i progetti attraverso un'interfaccia dedicata agli amministratori.

-   **Validazione**: È stata implementata la validazione dei dati dei progetti nelle operazioni CRUD che lo richiedono. Questo è stato realizzato utilizzando due form requests, garantendo che i dati inseriti dagli utenti siano corretti e conformi ai requisiti del sistema.
