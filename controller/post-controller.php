<?php
session_start();
include("database-controller.php");
if(isset($_POST['submit'])){
if(isset($_SESSION['user'])){
$autore =addslashes($_SESSION['user']);
}
if(isset($_POST['titolo'])){
$titolo = addslashes($_POST['titolo']);
}
if(isset($_POST['articolo'])){
$articolo = addslashes($_POST['articolo']);
}

// popoliamo i campi della tabella articoli con i dati ricevuti dal form
$sql = "INSERT INTO articoli (art_autore, art_titolo, art_articolo, art_data) VALUES ('$autore', '$titolo', '$articolo', now())";

// se l'inserimento ha avuto successo inviamo una notifica
if (@mysql_query($sql) or die (mysql_error())){
echo "Articolo inserito con successo da: ";
echo    $_SESSION["user"];
}
    header("Location:../index.php");
}