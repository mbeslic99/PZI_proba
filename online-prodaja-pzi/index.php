<?php include "config.php";?>
<?php 
include_once 'cart.class.php'; 
$cart = new Cart; 

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['ime']);
    header("location: index.php");
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dobrodošli u Jewelry Store</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="/js/homeslideshow.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
         crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
         crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <div class="content">
      <!-- notification message -->
       <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
   <?php endif ?>
  
   </div>
    <body>
    <header>
         <div class="homepageheader"> 
         <?php if( isset($_SESSION['ime']) && !empty($_SESSION['ime']) )
           {
          ?>
          <button class="logout" style="color:white;"><a href="index.php?logout='1'" style="color:white;">Odjava</a></button>
          <button class="logout" style="color:white;"><a href="viewCart.php" style="color:white;">Košarica</a></button>
            <?php }else{ ?>
          <button class="signin" style="color:white;"><a href="signin.php" style="color:white;">Registracija</a></button>
          <button class="login" style="color:white;"><a href="login.php" style="color:white;">Prijava</a></button>
           
            
             <?php } ?>    
         <div class="logo">
             <a href="index.php">
                  <img style=" height: 75px; width: 130px;" src="slike/Logo.jpeg">
              </a>
          </div>

          <nav clas="izb">
              <ul>
                  <li><a href="index.php" ><i class="fa fa-home"></i> Naslovnica</a></li>
                  <li><a href="#proizvodi" ><i class="far fa-gem"></i> Proizvodi</a></li>
                  <li><a href="#onama" ><i class="fab fa-adn"></i> O nama</a></li>
                  <li><a href="#kontakt" ><i class="fa fa-envelope"></i> Kontakt</a></li>
                  <li><a href="adminlogin.php" ><i class="fas fa-users-cog"></i> Admin</a></li>

              </ul>
            </nav>
      </header>
        
      </div>
       
       
         
       
        <div class="home-welcome">
            <div class="home-welcome-text" style="background-image: url(slike/slika.jpg); height: 380px; ">
                <h1 style="margin: 0px;">Dobrodošli u Jewelry Store</h1>
                <h2>Prodaja unikatnog i kvalitetnog nakita</h2>
            </div>
        </div>

        <div class="onama" id="onama"></br></br></br></br>
       
        <div class="row">
              <div class = "column">
                       <div class= "column-left">
                           <img style =" width:400px; height: 500px;" src="slike/Logo.jpeg"></br></br></br></br></br></br>
                          
                        </div>
                        
                             
                 </div>
            <div class="row">
            <div class="column-right">
                <h3 style="text-align:center;" >O nama</h3>
                <p class="js">Jewelry Store je adresa na kojoj možete pronaći unikatni nakit.</br>Povijest kaže fini nakit ponekad,mi kažemo fini nakit za svaki dan. Naš nakit je ručno  izrađen poput starih 
				vremena,ali dizajniran je za zlatne dane koji su pred nama.</br> </br>Kada je riječ o našoj proizvodnji, veterani smo i udružujemo se s vrhunskim draguljarima koji se obvezuju
				na iznimnu izradu,etičke prakse i najfinije materijale.
				Proizvodimo samo u malim količinama. Ne zato što volimo liste čekanja već zato što čvrsto vjerujemo u kvalitetu u odnosu na
				količinu.</br></br> Radimo samo s visokokvalitetnim postojanim materijalima, od plemenitih metala do lanaca postavljenih s 
				pravim draguljima i dijamantima etičkog izvora.
				Naši su komadi stvoreni za svakodnevno nošenje, zauvijek.</br></br>Pokretači projekta su studentice Matematika-Informatika.Kako su zamislile svoj projekt,koji im je cilj,motivacija te koje tehnologije će koristit možete pogledati <a href="https://drive.google.com/file/d/1Cbi4086ruMXm7IKbgwhM5Pi7u5aKBaSR/view?usp=sharing"
  >ovdje</a></br></br>
				Izaberi najfiniji nakit iz našeg asotrimana i pozlati svoju budućnost.</br></br></br></br></br></br>
				
                </p>
               </div>
                        
               </div>
        </div>
        <div class="home-prodlist">
            <div id = "proizvodi"></br></br></br></br>
        <hr class="h">       
            <h3 style="text-align: center; font-size:35px;">Proizvodi</h3>
        <hr class="h">
            </div>
  <?php if( isset($_SESSION['ime']) && !empty($_SESSION['ime']) )
  
           {?>
          <div class="row">
          <?php
           $result = $con->query("SELECT * FROM proizvod ORDER BY id ASC"); 
           if($result->num_rows > 0){  
               while($row = $result->fetch_assoc()){ 
          ?>
          
          <div class="col-md-3">
          <form method="post" style="margin:auto 200px;">
          <div class="products">
          <img src="<?php echo $row["slika"] ?>" class="img-responsive"style="width:250px; height:300px;">
          <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary" style="background-color:#6d5454; border:none;width:172px; height:44px;line-height:30px;">Dodaj u košaricu</a>
          </div>
          </form>
      </div>
  <?php 
               }
            }
        ?>
        
        </div> 
            <?php }else{ 
          ?>
<div class="row1">
            <div class="column1">
               <img src='slike/prsten.jpg' alt="Prsten" style="width:100%">
               <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal1">Prsten San Francisco </button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Prsten San Francisco</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                            <div class="rowmod">
                               <div class = "columnmod">
                                  <div class= "columnmod-left">
                                    <img style =" width:150px; height: 300px;" src="slike/prsten.jpg"></br></br></br></br></br></br>
                          
                                    </div>
                        
                             
                                 </div>
                             
                              <div class="rowmod">
                                 <div class="columnmod-right">
                              
                                   <p class="columnmod-tekst">
                                     <ul>
                                       <li>
                                       <h2 style="font-size:13px">Materijal:</h2>
                                       <span style="font-size:12px"><h3 style="font-size:12px">Drago kamenje</h3> Naši 14k komadi od čvrstog zlata stvoreni su da traju vječno. </br>14k zlato neće oksidirati ili se obezbojiti, tako da svoj nakit možete nositi svaki dan, svugdje.
                                            </span>
                                       </li>
                                       <li>
                                          </br>
                                         <h2 style="font-size:13px">Cijena:</h2>
                                         <span style="font-size:12px">200.00KM</span>
                                       </li>
                                     </ul>

                                   </p>
                                   </div>
                        
                               </div>
                            </div>
                          </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                          <button type="button" class="btn btn-secondary" style="background-color:#6d5454; width:88px;
    height:44px; border-radius:0;" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Morate se registrirati/prijaviti">
                          <i class="fa fa-shopping-cart"></i> Kupi</button>
                          
                       </div>
                       </div>
                     </div>
                   </div>
            </div>
            <div class="column1">
                <img src="slike/naušnice.jpg" alt="Naušnice" style="width:100%">
                <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal2">Naušnice od malahitnog bisera</button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Naušnice od malahitnog bisera</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                       <div class="rowmod">
                               <div class = "columnmod">
                                  <div class= "columnmod-left">
                                    <img style =" width:150px; height: 300px;" src="slike/naušnice.jpg"></br></br></br></br></br></br>
                          
                                  </div>                           
                                 </div>
                             
                              <div class="rowmod">
                                 <div class="columnmod-right">
                              
                                   <p class="columnmod-tekst">
                                     <ul>
                                     <li>
                                         <h2 style="font-size:13px">Materijal:</h2>
                                         <span style="font-size:12px"><h3 style="font-size:12px">Drago kamenje</h3>
                                         Svi naši dragi kamenovi izvorno su mineralno kamenje koje se izuzetno cijeni zbog svoje ljepote, dugovječnosti i rijetkosti.</br>
                                         Koristimo niz prirodnih dragog kamenja AAA razreda.
                                         <h3 style="font-size:12px">Vermeil</h3>
                                         Naš vermeil je debeli sloj 18k čvrstog zlata na srebru.
                                         <h3 style="font-size:12px">Slatkovodni biser</h3>
                                         Koristimo kultivirane bisere od kamenica i slatkovodnih dagnji koje pažljivo odabiremo za svoje komade. </br>
                                         Biseri su osjetljive prirode, pa ih nemojte zaboraviti tretirati s ljubavlju.

                                    
                                           </span>
                                       </li>
                                       <li>
                                          </br>
                                         <h2 style="font-size:13px">Cijena:</h2>
                                         <span style="font-size:12px">130.00KM</span>
                                       </li>
                                       
                                     </ul>

                                   </p>
                                   </div>
                        
                               </div>
                            </div>
                       </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                          <button type="button" class="btn btn-secondary" style="background-color:#6d5454; width:88px;
    height:44px; border-radius:0;" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Morate se registrirati/prijaviti">
                          <i class="fa fa-shopping-cart"></i> Kupi</button>
                       </div>
                       </div>
                     </div>
                   </div>
            </div>
            <div class="column1">
                <img src="slike/narukvnica.jpg" alt="Narukvnica" style="width:100%">
                <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal3">Narukvnica</button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Narukvnica</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                       <div class="rowmod">
                               <div class = "columnmod">
                                  <div class= "columnmod-left">
                                    <img style =" width:150px; height: 300px;" src="slike/narukvnica.jpg"></br></br></br></br></br></br>
                          
                                  </div>                           
                                 </div>
                             
                              <div class="rowmod">
                                 <div class="columnmod-right">
                              
                                   <p class="columnmod-tekst">
                                     <ul>
                                     <li>
                                         <h2 style="font-size:13px">Materijal:</h2>
                                         <span style="font-size:12px"><h3 style="font-size:12px">Vermeil</h3>
                                         Naš vermeil je debeli sloj 18k čvrstog zlata na srebru.
                                         <h3 style="font-size:12px">Slatkovodni biser</h3>
                                         Koristimo kultivirane bisere od kamenica i slatkovodnih dagnji koje pažljivo odabiremo za svoje komade. </br>
                                         Biseri su osjetljive prirode, pa ih nemojte zaboraviti tretirati s ljubavlju.</br>
                                           </span>
                                       </li>
                                       <li>
                                          </br>
                                         <h2 style="font-size:13px">Cijena:</h2>
                                         <span style="font-size:12px">105.00KM</span>
                                       </li>
                                     </ul>

                                   </p>
                                   </div>
                        
                                   </div>
                            </div>
                       </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                          <button type="button" class="btn btn-secondary" style="background-color:#6d5454; width:88px;
    height:44px; border-radius:0;" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Morate se registrirati/prijaviti">
                          <i class="fa fa-shopping-cart"></i> Kupi</button>
                       </div>
                       </div>
                     </div>
                   </div>
                </div>
                  <?php   } ?> 
       </div>
       </br></br>
        
        <div >
            <div class = "kontakt-area" id = "kontakt">
                
                       <div class = "col2-tekst">
                          </br></br>
                           <h2>KONTAKTIRAJTE NAS</h2>
                           <p>Obratite nam se za bilo kakve informacije.</p>
                       </div>
             </div>
<hr class="h">
<div class="row" style="text-align:center; font-family: Times New Roman, Times, serif;">
	<div class="col-md-4">
		<img style=" height: 200px; width: 180px;" src="slike/Magdalena.jpg">
		<p class="ime">Magdalena Bešlić</p>
		<p> Rođena 19.07.1999.</br>SSŠ Posušje,smjer Ekonomija</br>2018. FPMOZ,smjer Matematika-Informatika</br>
		<a href="mailto:magdalena.beslic@fpmoz.sum.ba">magdalena.beslic@fpmoz.sum.ba</a></p>
	</div>
	
	<div class="col-md-4">
		<img style=" height: 200px; width: 180px;" src="slike/Petrabrkic.jpg">
		<p class="ime">Petra Brkić</p>
		<p> Rođena 16.03.1997.</br>Gimnazija, Mostar</br>2015. FPMOZ,smjer Matematika-Informatika</br>
		<a href="mailto:petra.brkic@fpmoz.sum.ba">petra.brkic@fpmoz.sum.ba</a></p>
	</div>
	
	<div class="col-md-4">
		<img style=" height: 200px; width: 180px;" src="slike/Petrabakula.jpg">
		<p class="ime">Petra Bakula</p>
		<p> Rođena 01.04.1998</br>Gimnazija fra Grge Martića, Posušje</br>2017. FPMOZ,smjer Matematika-Informatika</br>
		<a href="mailto:petra.bakula2@fpmoz.sum.ba">petra.bakula2@fpmoz.sum.ba</a></p>
	</div>
</div>
<hr class="h">
           
                
    </body>
</html>
