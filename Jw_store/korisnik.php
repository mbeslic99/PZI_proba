<?php
session_start();


class Korisnik {
    public static $prijavljeniKorisnik;

    public static function jePrijavljen(){
        global $konekcija;
        $id = $_SESSION["token"];
        $upit = "SELECT * FROM korisnik WHERE ID=".$id;
        $rezultat = mysqli_query($konekcija, $upit);
        self::$prijavljeniKorisnik = mysqli_fetch_assoc($rezultat);
        if (self::$prijavljeniKorisnik) {
            return true;
        }
        return false;
    }}
?>