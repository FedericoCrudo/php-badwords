<?php
    $paragrafo="Ciao Lorenzo, sono in ritardo";
    $badword = $_GET['name'];
    $paragrafoChange=str_replace($badword,"***",$paragrafo)
?>