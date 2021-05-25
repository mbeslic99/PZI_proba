  
<?php
session_start();

require("db.php");

if (isset($_POST["emailKorisnika"])){
    if ($_POST["emailKorisnika"] == "" || $_POST["lozinkaKorisnika"] == ""){
        $greska = "Molimo unesite Vašu email adresu i lozinku.";
    } else {
        $SQL = "SELECT ID FROM korisnik WHERE";
        $SQL .= " email='" . $_POST["emailKorisnika"] . "' AND ";
        $SQL .= " lozinka='". md5($_POST["lozinkaKorisnika"]) . "'";
        $rezultat = mysqli_query($konekcija, $SQL);
        
        if (mysqli_num_rows($rezultat) == 0) {
            $greska = "Vaši korisnički podaci nisu ispravni molimo pokušajte ponovo.";
        } else {
            $korisnik = mysqli_fetch_assoc($rezultat);
            $_SESSION["token"] = $korisnik["ID"];
            header("Location: Kupacpage.php");
        }
    }
}
$naslov = "Prijava na sustav";
include("static/header.php");

?>

<head>
<title>Prijava u Jewelry Store</title>
</head>
<div class="container h-100" style="  font-family: Times New Roman, Times, serif; background-color: #ecc6d9;"  >
        <div class="row align-items-center h-100">
            <div class="col shadow p-4">
                <h4 id="naslov" >Prijava na Jewelry Store</h4>
                <?php if (isset($greska)): ?>
                <div class="alert alert-danger"><?php echo($greska) ?></div>
                <?php endif ?>
                <form  method="POST" action="Login.php" >
                    <div class="form-group">
                        <label>E-mail adresa:</label>
                        <input type="email" class="form-control" name="emailKorisnika" placeholder="Unesite Vašu email adresu" />
                    </div>

                    <div class="form-group">
                        <label>Vaša lozinka:</label>
                        <input type="password" class="form-control" name="lozinkaKorisnika" placeholder="Unesite Vašu lozinku" />
                    </div>
                    <p style="font-weight: bold;">Nemate račun? Napravite ga <a  href="register.php" >ovdje</a>.</p>
                    <button type="submit"class="btn btn-primary"  >Prijavite se</button>
                </form>
            </div>
        </div>
    </div>
<?php
include("Static/footer.php");
?>