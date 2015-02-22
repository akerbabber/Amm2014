<?php
include("database-controller.php"); // includo il file di connessione al database
if($_POST["username_reg"] != "" && $_POST["password_reg"]!= "" ){  // se i parametri iscritto non sono vuoti non sono vuote
    $query_registrazione = mysql_query("INSERT INTO users (username,password)
VALUES ('".$_POST["username_reg"]."','".$_POST["password_reg"]."')") // scrivo sul DB questi valori
    or die ("query di registrazione non riuscita".mysql_error()); // se la query fallisce mostrami questo errore
}else{
   echo 'andato a male';
}
if(isset($query_registrazione)){ //se la reg è andata a buon fine
    $_SESSION["loggedIn"]=true; //restituisci vero alla chiave logged in SESSION
    header("location:../index.php");
}else{
    echo "non ti sei registrato con successo"; // altrimenti esce scritta a video questa stringa
}
?>