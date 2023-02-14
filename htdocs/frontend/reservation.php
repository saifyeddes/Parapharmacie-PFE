<?php
session_start();
include('includes/connect_db.php');
$id=$_GET['id'];
$req = $bdd->query("SELECT * FROM produit WHERE id=$id ");
$donnees = $req->fetch();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.gridgum.com/templates/Travel-agency/booking-flights-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 15:35:53 GMT -->
<head>
    <title>CAP AFRICA - Réservation</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <link href="https://demo.gridgum.com/templates/Travel-agency/css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://demo.gridgum.com/templates/Travel-agency/css/font-awesome.css" rel="stylesheet">
    <link href="https://demo.gridgum.com/templates/Travel-agency/css/animate.css" rel="stylesheet">
    <link href="https://demo.gridgum.com/templates/Travel-agency/css/select2.css" rel="stylesheet">
    <link href="https://demo.gridgum.com/templates/Travel-agency/css/smoothness/jquery-ui-1.10.0.custom.css" rel="stylesheet">
    <link href="https://demo.gridgum.com/templates/Travel-agency/css/style.css" rel="stylesheet">

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.js"></script>
    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery-ui.js"></script>
    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.easing.1.3.js"></script>
    <script src="https://demo.gridgum.com/templates/Travel-agency/js/superfish.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/select2.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.parallax-1.1.3.resize.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/SmoothScroll.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.appear.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.caroufredsel.js"></script>
    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.touchSwipe.min.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.ui.totop.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/script.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   





</head>


<body class="not-front page-post">
  

<div id="main">

  

   


    <div id="content">
        <div class="container">
        

            <div class="row">
                <form  action="facture/index.php?id=<?php echo $donnees['id']?>" method="post">
                    
                     
        
                <div class="col-sm-12">
                    <h3 class="text-center hch2" ><img style="position: relative; width: 148px;height: auto;" src="../Admin/uploads/<?php echo $donnees['image'] ?>"></h3>

                    <div class="clearfix"></div>
                    

                    <div class="clearfix"></div>
                    
                    <div class="col-md-4"></div>
                    <div class="col-md-4 booking-row">
                        <h3 class="line">RÉSUMÉ DES VOLS</h3>

                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-6" style="padding-left:0;padding-top:12px;color:f9676b;">Nom</label>
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                <span class="red"><?php echo $donnees['Nom'] ?></span>
                                 <input type="hidden" name="titre" value="<?php echo $donnees['Nom']?>" >
                                                          
                            </div>
                        </div>

<div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-6" style="padding-left:0;padding-top:12px;color:f9676b;">Reférence</label>
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                <span class="red"><?php echo $donnees['Reférence'] ?></span>
                                 <input type="hidden" name="Reférence" value="<?php echo $donnees['Reférence']?>">

                                   
                            </div>



                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-6" style="padding-left:0;padding-top:12px;color:f9676b;">Date</label>
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                <span class="red"><?php echo $donnees['Date'] ?></span>
                                 <input type="hidden" name="dep" value="<?php echo $donnees['Prix']?>">

                                   
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-6" style="padding-left:0;padding-top:12px;color:f9676b;">Description</label>
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                <span class="red"><?php echo $donnees['Description'] ?></span>
                                                      <input type="hidden" name="darr" value="<?php echo $donnees['Description']?>">


                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="margin-top"></div>
                     
                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-6" style="padding-left:0;padding-top:12px;color:f9676b;">Prix</label>
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                <span class="red"><?php echo $donnees['Prix'] ?>DT</span>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="margin-top" style="margin-top:40px;"></div>
                        <div class="border-3px"></div>
                        <div class="clearfix"></div>
                        <div class="margin-top"></div>
                      
                      
                        <div class="margin-top"></div>
                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                         
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                            	<span hidden=""> <?php $prix_tot=( $donnees['prix']*(strtotime($donnees['darr'])- strtotime($donnees['dep']))/24/3600);
                            	echo "$prix_tot"; ?>
                            		


                            	</span>



                                   

                            </div>
                              
                        </div>
                        <div class="clearfix"></div>
                        <div class="margin-top" ></div>
                         <button style="    width: 373px;" class="btn btn-default btn-cf-submit3" type="submit" ><a href="facture/index.php?id=<?php echo $donnees['id'] ?>"> Facture</button> 
                    </div>
                </div>
                
                      
                      


                    
                </form>
            </div>
         
        </div>
    </div>



























</div>
<script src="https://demo.gridgum.com/templates/Travel-agency/js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from demo.gridgum.com/templates/Travel-agency/booking-flights-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 15:35:53 GMT -->
</html>