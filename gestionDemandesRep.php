<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Gestion demandes de réparation</title>
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
                        <li class="active"><a href="accueilAdmin.php">Accueil</a></li>
            
                         <li><a href="accueilAdmin.php#portfolio">Vente</a></li>
                        <li class="active" >
                          <a  href="dashboard.php">Administration</a>
                    
                          
                          
                        </li>
                                                <li><a href="accueilAdmin.php#about">A propos</a></li>
                        <li><a href="accueilAdmin.php#contact">Contact</a></li>
                        <li class="dropdown"><li class="dropdown"> <a href="#" class="dropbtn">
          <span class="glyphicon glyphicon-user"></span> 
                        Mon compte 
                    </a>
                    <?php
          session_start();
          if($_SESSION['login']==true) { 
            ?>  
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div>
                                    <div class="col-lg-5">
                                         <div class="col-lg-5">
                                        <p class="text-center">
                                          
                                          <img class="round" src="<?php echo $_SESSION['picture'];?>">
   
                                            
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text-left"><strong><?php  session_start();echo $_SESSION['login_user']; ?></strong></p>
                                        <p class="text-left small"><?php session_start();echo $_SESSION['mail']; ?></p>
                                        
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
                                             <a href="profileAdmin.php" class="btn button btn-block">Mon profil</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <?php };
                         ?>
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
        <h3 class="text-center">Voici toutes les demandes de réparation</h3><br><br>
        <div class="table-responsive" >

                
              <table id="tabledemande1" class="table table-bordred table-striped thistable">
                   
                   <thead>
                   <th>Demande</th>
                   <th>Réparateur</th>
                   <th>Etat</th> 
                   </thead>
    <tbody>
    
    <tr>
    
    <td><a data-toggle="modal" data-target="#demande1">Titre de la demande</a>
	<div class="modal fade" id="demande1" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Demande N°29</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de la demande.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
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
    
    
    <td> 
	<div class="col-md-9">
    <select id="affecter-rep" name="affecter-rep" class="form-control">
      <option value="1">Aucun</option>
      <option value="2">NOM PRENOM</option>
      <option value="3">NOM PRENOM</option>
      <option value="4">NOM PRENOM</option>
      <option value="5">NOM PRENOM</option>
      <option value="6">NOM PRENOM </option>
      <option value="7">NOM PRENOM</option>
    </select>
  </div></td>
     <td>En cours</td>
	
    </tr>
    
 <tr>
    
    <td><a data-toggle="modal" data-target="#demande2">Titre de la demande </a>
	<div class="modal fade" id="demande2" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Demande N°30</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de la demande.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div></td>
   
   
    <td>
	<div class="col-md-9">
    <select id="affecter-rep2" name="affecter-rep" class="form-control">
      <option value="1">Aucun</option>
      <option value="2">NOM PRENOM</option>
      <option value="3">NOM PRENOM</option>
      <option value="4">NOM PRENOM</option>
      <option value="5">NOM PRENOM</option>
      <option value="6">NOM PRENOM </option>
      <option value="7">NOM PRENOM</option>
    </select>
  </div>
	</td>
  <td>Terminée</td>
    </tr>
    
  <tr>
    
    <td><a data-toggle="modal" data-target="#demande3">Titre de la demande </a>
	<div class="modal fade" id="demande3" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Demande N°99</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de la demande.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div> </td>
   
    
    <td>
	<div class="col-md-9">
    <select id="affecter-rep" name="affecter-rep3" class="form-control">
      <option value="1">Aucun</option>
      <option value="2">NOM PRENOM</option>
      <option value="3">NOM PRENOM</option>
      <option value="4">NOM PRENOM</option>
      <option value="5">NOM PRENOM</option>
      <option value="6">NOM PRENOM </option>
      <option value="7">NOM PRENOM</option>
    </select>
  </div></td>
   <td>Pas encore</td>
    </tr>  
 <tr>
    
    <td><a data-toggle="modal" data-target="#demande4">Titre de la demande </a>
	<div class="modal fade" id="demande4" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Demane N°17</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici le corps de la demande.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div></td>
    
   
    
    <td><div class="col-md-9">
    <select id="affecter-rep" name="affecter-rep4" class="form-control">
      <option value="1">Aucun</option>
      <option value="2">NOM PRENOM</option>
      <option value="3">NOM PRENOM</option>
      <option value="4">NOM PRENOM</option>
      <option value="5">NOM PRENOM</option>
      <option value="6">NOM PRENOM </option>
      <option value="7">NOM PRENOM</option>
    </select>
  </div></td>
      <td>En cours</td>
    </tr>
   
    
 
<tr>
    
    <td><a data-toggle="modal" data-target="#demande5">Titre de la demande </a>
	<div class="modal fade" id="demande5" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Demande N°37</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de la demande.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div></td>
   
    
    <td>
	<div class="col-md-9">
    <select id="affecter-rep" name="affecter-rep5" class="form-control">
      <option value="1">Aucun</option>
      <option value="2">NOM PRENOM</option>
      <option value="3">NOM PRENOM</option>
      <option value="4">NOM PRENOM</option>
      <option value="5">NOM PRENOM</option>
      <option value="6">NOM PRENOM </option>
      <option value="7">NOM PRENOM</option>
    </select>
  </div></td>
   <td>Terminée</td>
    </tr>
  
  <tr>
    
    <td><a data-toggle="modal" data-target="#demande6">Titre de la demande </a>
	<div class="modal fade" id="demande6" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-10-label">SOS-PC</h4>
											</div>
											<div class="modal-body">
												<h3>Demande N°17</h3>
												<div class="row">
													<div class="col-md-6">
														<p>Ici c'est le corps de la demande.</p>
													</div>
													<div class="col-md-6">
														<img src="images/320x320.png" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default2" data-dismiss="modal">Fermer</button>
											</div>
										</div>
									</div>
								</div></td>
    
    <td>
	<div class="col-md-9">
    <select id="affecter-rep" name="affecter-rep6" class="form-control">
      <option value="1">Aucun</option>
      <option value="2">NOM PRENOM</option>
      <option value="3">NOM PRENOM</option>
      <option value="4">NOM PRENOM</option>
      <option value="5">NOM PRENOM</option>
      <option value="6">NOM PRENOM </option>
      <option value="7">NOM PRENOM</option>
    </select>
  </div></td>
   <td>En cours</td>
    </tr>  
   
    
   
    
    </tbody>
        
</table>
   
             

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="gestionDemandesRep.html">2</a></li>
  <li><a href="gestionDemandesRep.html">3</a></li>
  <li><a href="gestionDemandesRep.html">4</a></li>
  <li><a href="gestionDemandesRep.html">5</a></li>
  <li><a href="gestionDemandesRep.html"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
  </div>
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
  
</html>

