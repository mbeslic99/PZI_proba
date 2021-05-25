<?php
require ("db.php");
 if (isset($_POST["ime"])) {
    if ($_POST["ime"] == ""  || $_POST["prezime"] == "" || $_POST["jmbgKorisnika"] == "" || $_POST["adresa"] == "" ||  $_POST["grad"] == "" || $_POST["drzava"] == "Odaberi državu" ||  $_POST["brmobitela"] == "" ||  $_POST["emailKorisnika"] == "" ||  $_POST["lozinkaKorisnika"] == "" ||  $_POST["plozinkaKorisnika"] == "")
         $greska = "Nastala je greška niste unijeli sva polja.";
    else if ($_POST["lozinkaKorisnika"] != $_POST["plozinkaKorisnika"])
         $greska = "Nastala je greška lozinke se ne podudaraju!";
    else {
        $SQL = "INSERT INTO korisnik VALUES (null, '";
        $SQL.= $_POST["ime"] . "', '";
        $SQL.= $_POST["prezime"] . "', '";
        $SQL.= $_POST["jmbgKorisnika"] . "', '";
        $SQL.= $_POST["adresa"] . "', '";
        $SQL.= $_POST["grad"] . "', '";
        $SQL.= $_POST["drzava"] . "', '";
        $SQL.= $_POST["brmobitela"] . "', '";
        $SQL.= $_POST["emailKorisnika"] . "', '";
        $SQL.= md5($_POST["lozinkaKorisnika"]) . "', 'kupac');";
        $rezultat = mysqli_query($konekcija, $SQL);
        }
    }
    $naslov = "Registracija na sustav";
    include("Static/header.php");
    ?>
    

 <head>
<title>Registracija </title>
</head> 
    <div class="container h-100" style="font-family: Times New Roman, Times, serif; background-color: #ecc6d9;" >
        <div class="row align-items-center h-100">
            <div class="col shadow p-5">
                <h4>Registracija na Jewelry Store</h4>
                <?php if (isset($greska)): ?>
            <div class="alert alert-danger"><?php echo($greska) ?></div>
            <?php endif ?>
                <form method="post" action="register.php">
                <div class="row">
                    <div class="col">
                        <label>Ime:</label>
                        <input type="text" class="form-control" name="ime" placeholder="Unesite Vaše ime">
                    </div>
                    <div class="col">
                        <label>Prezime:</label>
                        <input type="text" class="form-control" name="prezime" placeholder="Unesite Vaše prezime">
                    </div>
                </div>
                </br>
                    <div class="form-group">
                        <label>Jedinstveni matični broj:</label>
                        <input type="text" class="form-control" name="jmbgKorisnika" placeholder="Unesite Vaš JMBG" />
                    </div>
                    <div class="form-group">
                        <label>Adresa:</label>
                        <input type="text" class="form-control" name="adresa" placeholder="Unesite Vašu  adresu" />
                    </div>
                    <div class="row">
                    <div class="col">
                        <label>Grad:</label>
                        <input type="text" class="form-control" name="grad" placeholder="Unesite Vaš grad">
                    </div>
                    <div class="col">
                        <label>Država:</label>
                        <select id="inputState" class="form-control" name="drzava">
                            <option selected>Odaberi državu</option>
                            <option>Bosna i Hercegovina</option>
                            <option>Hrvatska</option>
                        </select>
                    </div>
                </div> 
                </br> 
                    <div class="form-group">
                        <label>Mobitel:</label>
                        <input type="phone" class="form-control" name="brmobitela" placeholder="Unesite Vašu broj mobitela" required maxlength="80" value="<?php echo $ime; ?>/>
                    </div>                 
                    <div class="form-group">
                        <label>E-mail adresa:</label>
                        <input type="email" class="form-control" name="emailKorisnika" placeholder="Unesite Vašu email adresu" />
                    </div>

                    <div class="form-group">
                        <label>Vaša lozinka:</label>
                        <input type="password" class="form-control" name="lozinkaKorisnika" placeholder="Unesite Vašu lozinku" />
                    </div>

                    <div class="form-group">
                        <label>Ponovite Vašu lozinku:</label>
                        <input type="password" class="form-control" name="plozinkaKorisnika" placeholder="Ponovite Vašu lozinku" />
                    </div>
                    <p style="font-weight: bold;">Imate račun? Prijavite se <a  href="login.php">ovdje</a>.</p>
                    
                    <button type="submit" class="btn btn-primary" name="reg_user">Registrirajte se</button>
                </form>
            </div>
        </div>
    </div>

<?php
include("static/footer.php");
?>