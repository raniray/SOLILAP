<!DOCTYPE html>
<html >
<?php 
session_start();
if(!isset($_SESSION['login'])){
	header("Location: login.php");   
}
?>
  <head>
    <meta charset="UTF-8">
    <title>Reparations</title>
    <meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet">
	       <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>
    <script type="text/javascript" src="js/etatAvancement.js"></script>
	
  </head>

 <body class="default-bg3">

  <div class="banner-caption2">
    <!-- header start -->
    <!-- ================ --> 
    <header class="header2 fixed clearfix navbar navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <!-- header-left start -->
            <!-- ================ -->
            <div class="header-left clearfix">
              <!-- logo -->
              <div class="logo smooth-scroll">
                <a href="#banner"><img id="logo" src="img/logo.png" alt="Worthy"></a>
              </div>
              <!-- name-and-slogan -->
              <div class="site-name-and-slogan smooth-scroll">
                <div class="site-name"><a href="#banner">SOS-PC</a></div>
                <div class="site-slogan">Votre PC en bonnes mains...</div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="header-right clearfix">
              <div class="main-navigation animated">
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="home.php">Accueil</a></li>
            
                         <li><a href="home.php#portfolio">Vente</a></li>
                        <li class="dropdown" >
                          <a class="dropbtn" href="#">Réparation PC</a>
                    
                          <div class="dropdown-content">
                          <a href="Reparations.php">Réparations</a>
                           <a href="ficheReparation.php">Fiche réparation</a>
                            <a href="liveHelpRep.php">Live help</a>
                          </div>
                        </li>
                                                <li><a href="home.php#about">A propos</a></li>
                        <li><a href="home.php#contact">Contact</a></li>
                        <li class="dropdown"><li class="dropdown"> <a href="#" class="dropbtn">
          <span class="glyphicon glyphicon-user"></span> 
                        Mon compte 
                    </a>

 <?php 
            if($_SESSION['login']==true) { 
                             ?>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div>
                                    <div class="col-lg-5">
                                        <p class="text-center">
                                          
                                          <img class="round" src="<?php echo $_SESSION['picture'];?>">
   
                                            
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text-left"><strong><?php  echo $_SESSION['login_user']; ?></strong></p>
                                        <p class="text-left small"><?php echo $_SESSION['mail']; ?></p>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                             <a href="./php/logout.php" class="btn button btn-block">Se déconnecter</a>
                                             <a href="profile.php" class="btn button btn-block">Mon profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <?php }else{
												 ?>
                    <ul class="dropdown-menu">
                     
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                             <a href="signUp.php" class="btn button btn-block">S'inscrire</a>
                                             <a href="login.php" class="btn button btn-block">Se connecter</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                                        <?php }?>
                  </li>
            </li>
            
                      </ul>
                    </div>

                  </div>
                </nav>
                <!-- navbar end -->

              </div>
              <!-- main-navigation end -->

            </div>
            <!-- header-right end -->

          </div>
        </div>
      </div>
    </header>
    <!-- header end -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
  <div class="row">
    
        
        <div class="col-md-12">
        <h3 class="text-center">Voici toutes vos réparations ...</h3>
        <div class="table-responsive">

                
              <table id="tableR" class="table table-bordred table-striped">
                   
                   <thead>
                   <th>Titre de la demande</th>
                    <th>Date de création </th>
                     <th>Etat de la demande  </th>
                     
                      <th>Avancement</th>
                   </thead>
    <tbody>
    <?php 
require('php/connexion.php');
$db=data_base_connect();
$id = $_SESSION['id'];
$select = $db->prepare("SELECT * FROM demande_ where idReparateur=$id");
$select->execute();
$i=0;
while($row = $select->fetch()){
    ?>
    <tr>
    <td><a data-toggle="modal" data-target="#demande<?php echo $row['idDemande'];?>"><?php echo $row['intitulePanne'];?></a>
	<div class="modal fade" id="demande<?php echo $row['idDemande'];?>" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Demande N°<?php echo $row['idDemande'];?></h3>
												<div class="row">
													<div class="col-md-6">
														<p>	
<?php echo "Modèle: ".$row['modelePc']."\n "."Processeur: ".$row['processeur']."\n
"."RAM: ".$row['ramPc']."\n "."Système d'exploitation:".$row['osPc']."\n "."Anciennete:".$row['ancientePc']."\n "."Detail:".$row['descriptionPanne'];
?>
</p>
													</div>
													<div class="col-md-6">
														<img src="<?php echo 'images/reparations/'.$row['pannePic'];?>" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div>
	</td>
    <td><?php echo $row['dateCreation'];?></td>
    <td>
	 <select id="<?php echo "etat-reparation".$row['idDemande'];?>" name="etat-reparation" onchange="changeEtat(<?php echo $row['idDemande'];?>)" class="form-control">
      <option <?php if(strcmp($row['etatDemande'],"En cours")==0){ echo "selected='true'"; } ?> value="En cours">En cours</option>
      <option <?php if(strcmp($row['etatDemande'],"Pas encore")==0){ echo "selected='true'"; } ?> value="Pas encore">Pas encore</option>
      <option <?php if(strcmp($row['etatDemande'],"Terminé")==0){ echo "selected='true'"; } ?> value="Terminé">Terminé</option>
    </select>
	</td>
    <td title="modifier"><input id="<?php echo "taux-reparation".$row['idDemande'];?>" onchange="changetaux(<?php echo $row['idDemande'];?>);" value="<?php echo $row['tauxAvancement'];?>">%</td>
    </tr>
  <?php } ?>
   
    
   
    
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="Reparations.html">2</a></li>
  <li><a href="Reparations.html">3</a></li>
  <li><a href="Reparations.html">4</a></li>
  <li><a href="Reparations.html">5</a></li>
  <li><a href="Reparations.html"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
  </div>
</div>


 
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Supprimer cette demande </h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>Etes vous sur de vouloir supprimer cette demande  </div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span>OUI</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>NON</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

</body>
  <!-- Jquery and Bootstap core js files -->
    <script type="text/javascript" src="plugins/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Modernizr javascript -->
    <script type="text/javascript" src="plugins/modernizr.js"></script>

    <!-- Isotope javascript -->
    <script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
    
    <!-- Backstretch javascript -->
    <script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

    <!-- Appear javascript -->
    <script type="text/javascript" src="plugins/jquery.appear.js"></script>

    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="js/template.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="js/custom.js"></script>

     <script type="text/javascript" src="js/demande.js"></script>

     <script type="text/javascript" src="js/image.js"></script>

     <script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>
      <script type="text/javascript">
      function changeEtat(id) {
      var etat = document.getElementById("etat-reparation"+id).value;
      $.post("php/etatrep.php",{etat,id},(data)=>{
      })
      }
      function changetaux(id){
        var taux = document.getElementById("taux-reparation"+id).value;
        $.post("php/tauxrep.php",{taux,id},(data)=>{
        })
      }
      </script>
</html>

