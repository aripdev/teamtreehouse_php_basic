<?php

$tanya=readline("Pilih mana (yes/no/maybe) ?");

if($tanya=="yes") // jika memilih yes
{
    echo "Kamu memilih Yes";
}elseif($tanya=="no") // jika memilih no
{
    echo "Kamu memilih No";
}
elseif($tanya=="maybe") // jika memilih maybe
{
    echo "Kamu memilih maybe";
}
else // Jika tidak memilih yes/no/maybe ( tidak dalam pilihan yang tersedia )
{
    echo "Kamu tidak memilih pilihan yang tersedia !!!!";
}

echo PHP_EOL;

$menu=readline("Pilih angka 1-3 ? "); 

// Pilih input yang akan diuji
switch($menu) 
{ 
    case 1:                         // Jika user menginput angka 1
        echo "Anda memilih angka 1";
        break;
    case 2:                         // Jika user menginput angka 2
        echo "Anda memilih angka 2";
        break;
    case 3:                         // Jika user menginput angka 3
        echo "Anda memilih angka 3";
        break;
    default:                        // jika user tidak menginput angka yang tersedia
        echo "Anda tidak memilih pilihan yang tersedia";
}
