<?php
session_start();
if (isset($_SESSION['user'])) {
    $nav = "  <nav>
      <h2>Menu</h2>
            <ul>
               <li><form action=\"./controller/login-controller.php\" method=\"post\">
               <input type=\"submit\" name= \"logout\" value=\"logout\"/>

    </form>

                </li>
<li><a href='./view/post-content.php'>Scrivi un articolo</a> </li>
            </ul>
            </nav>";
}
else {

    $nav = "  <nav>
      <h2>Menu</h2>
            <ul>
               <li><a href='?page=login'>Login</a> </li>
               <li><a href='?page=registration'>Registrati</a> </li>
            </ul>
            </nav>";
}
$content ="";

$header = " <header>
            <h1>BlogLandia</h1>
        </header>";

$footer = " <footer>
            <a href=\"http://validator.w3.org/check?uri=refer\" >html validator</a>
            <a href=\"http://jigsaw.w3.org/css-validator/check/refer\" >css validator</a>
        </footer>";
echo ($header);
echo ($nav);
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']=="admin") {
        include 'admin-view.php';
    }
    else include 'user-view.php';
}
else {
include "post-roller.php"; }
echo ($footer);