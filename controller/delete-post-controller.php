<?php
include 'database-controller.php';
if (isset($_REQUEST['delete']))
{
    @mysql_query("DELETE FROM articoli WHERE art_id='".$_REQUEST['delete']."'")
    or die ("query di cancellazione non riuscita".mysql_error());
}
else
    header('Location:index.php');