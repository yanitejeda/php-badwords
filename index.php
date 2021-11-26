<!-- 
    Descrizione:
*[Creare una variabile con un paragrafo di testo a vostra scelta].
*[Stampare a schermo il paragrafo e la sua lunghezza.]
*[Una parola da censurare viene passata dall’utente tramite parametro GET.]
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->


<?php 
 $paragrafo = "Testo del paragrafo";

//elemento inserito dall'utente
 $cognomeUtente = $_GET['cognome'];

//parola censurata sotituita
 $censura = str_replace($cognomeUtente," ","***");
 
?>

<h1><?php echo $paragrafo ?> N.(<?php echo  strlen($paragrafo) ?>) <?php echo $cognomeUtente ?></h1>

<h1><?php echo $paragrafo ?> N.(<?php echo  strlen($paragrafo) ?>)  <?php echo $censura ?></h1>
