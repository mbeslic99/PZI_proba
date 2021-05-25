
<?php

include("Static/adminheader.php");
?>

<!DOCTYPE html>
<html>
 <head>
        <title>Admin naslovnica</title>
        
 </head>
 <body class="home-welcome-text">
 
  
   
     <div class="admin">
     <form action="" method="POST">
                        <div class="h2" style="color:black;">
                        <h3>Dodavanje novog proizvoda</h3>
                        </div>
                        <input placeholder="Naziv" type="text" name="naziv" required>
                        <input placeholder="Opis" type="text" name="opis" required>
                        <input type="file" name="slika" accept="image/*">
                        <button type="submit" value="submit" name="submit" class="btt">Dodaj proizvod</button>
                        <?php
                        if(isset($_POST['submit'])){
                            $insert_query = "INSERT INTO 
                            proizvod (  slika,
                                            naziv,
                                            opis)
                                            
                            VALUES (        'img/".$_POST['slika']."',
                                            '".$_POST["naziv"]."',
                                            '".$_POST["opis"]."')";
                            mysqli_query($link,$insert_query);}
                        ?>
                    </form>


    
     </div>
     
<?php
include("Static/footer.php");
?>