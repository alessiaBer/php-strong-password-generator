<?php 
/*
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. 
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) 
da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php 
che includeremo poi nella pagina principale

Milestone 3 (BONUS)
Invece di visualizzare la password nella index, 
effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. 
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
*/

include __DIR__ . '/helpers/functions.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="py-5">PHP Strong Password Generator</h1>
        <div class="card rounded-0 shadow">
            <div class="card-body p-5">
                <form action="password.php" method="get">
                    <div class="mb-3 d-flex">
                        <label for="length" class="form-label w-50">Password length:</label>
                        <input type="number" class="form-control w-50" id="length" name="length" min="1" max="25">
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>