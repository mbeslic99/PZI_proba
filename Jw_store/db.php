<?php


define("RACUNALO","localhost");
define("KORISNIK","root");
define("LOZINKA","");
define("BAZA","jw_store");

$konekcija =mysqli_connect(RACUNALO,KORISNIK,LOZINKA,BAZA);

if(!$konekcija){
    die("Nismo se spojili na bazu. Evo greška". mysqli_connect_error());
}


?>