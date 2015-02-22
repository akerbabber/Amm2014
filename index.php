<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen">
    <title>Benvenuto</title>
    <meta charset="utf-8"/>
</head>
<body>
<?php

if (isset($_GET['page'])) {
    switch ($_GET['page']) {

        case "login":
            include "view/login-content.php";
            break;
        case "registration":
            include "view/registration-content.php";
            break;
        case "index":
            include "./view/master.php";
            break;
        case "post":
            include "view/post-content.php";
            break;
        case "notfound":
            include "view/not-found-content.php";
            break;
        default:
            include "view/not-found-content.php";
            break;
    }
}
else {
    include "./view/master.php";
}
/*
(isset($_SESSION["loggedIn"])	 &&	$_SESSION["loggedIn"])
{
}
else { include("view/login-content.php"); }
*/

?>

</body>
</html>
