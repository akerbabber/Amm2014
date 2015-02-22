<?php

$nav = "  <nav>
      <h2>Menu</h2>
            <ul>
               <li><a href='?page=login'>Login</a> </li>
               <li><a href='?page=registration'>Registrati</a> </li>
            </ul>
            </nav>";
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
include "post-roller.php";
echo ($footer);