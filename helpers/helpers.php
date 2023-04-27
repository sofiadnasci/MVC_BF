<?php

function formatatexto($txt){
    echo $txt;
    echo "<br>";
    echo strtolower($txt);
    echo "<br>";
    echo strtoupper($txt);
    echo "<br>";
    echo ucfirst(strtolower ($txt));    
}