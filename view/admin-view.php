<?php
include "controller/database-controller.php";
if(!isset($_SESSION)) {

    session_start();
}
function anteprima($testo, $lunghezza, $finale) {
    return (count($parole = explode(' ', $testo)) > $lunghezza) ? implode(' ', array_slice($parole, 0, $lunghezza)) . $finale : $testo;
}
echo '<h1>benvenuto  '.$_SESSION['user'].'</h1></br><section>';
$sql = "SELECT * FROM articoli ORDER BY art_data DESC";
$query = @mysql_query($sql) or die (mysql_error());

//verifichiamo che siano presenti records
if(mysql_num_rows($query) > 0){
// se la tabella contiene records mostriamo tutti gli articoli attraverso un ciclo
    while($row = mysql_fetch_array($query)){
        $art_id = $row['art_id'];
        $autore = stripslashes($row['art_autore']);
        $titolo = stripslashes($row['art_titolo']);
        $data = $row['art_data'];
        $articolo = stripslashes($row['art_articolo']);

//valorizziamo una variabili con il link all'intero articolo
        $link = " ..<br><a href=\"articolo.php?id=$art_id\">Leggi tutto</a>";

        echo "<h2>".$titolo."</h2>";

// creaimo l'anteprima che mostra le prime 30 parole di ogni singolo articolo
// per farlo utilizzo una funzione che vi presenterò più avanti
        echo @anteprima($articolo, 30, $link);
        echo "<br><br>";

// formattiamo la data nel formato europeo
        $data = preg_replace('/^(.{4})-(.{2})-(.{2})$/','$3-$2-$1', $data);

// stampiamo una serie di informazioni
        echo  "Scritto da <b>". $autore . "</b>";
        echo  "| Articolo postato il <b>" . $data . "</b>";
        echo "<a href='/controller/delete-post-controller.php?delete=".$art_id."'>elimina</a>";
     /*   echo  "| Commenti: ";


// mostriamo il numero di commenti relativi ad ogni articolo
        $conta = "SELECT COUNT(com_id) as conta from commenti WHERE com_art = '$art_id'";
        $conto = @mysql_query ($conta);
        $tot = @mysql_fetch_array ($conto);
        echo $sum2 = $tot['conta'];
        echo "<hr>";*/
    }
}else{
// se in tabella non ci sono records...
    echo "Nessun articolo presente.";

}
echo '</section>';
?>