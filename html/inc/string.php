<?php

// buat function askName
// parameternya  $nama
// askName("Ahmad Dhani"); // Namamu adalah Ahmad Dhani

function askName($name)
{
    $format_name=ucwords(strtolower($name));
    echo "Namamu adalah $format_name";
}

// askName("AhmAd dHani PRASETYO");
