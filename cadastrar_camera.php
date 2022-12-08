<?php
session_start();
require_once("includes/conexao.inc");
$logon = new AUSU();
	$logon->Logado();
	
$idlj = $_GET['cod'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bit2B Monitor System">
    <meta name="author" content="Bit2B">
    <meta name="robots" content="noindex, nofollow, nosnippet, noodp, noarchive, noimageindex">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>BurgerTube</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">

	<!--header start-->
		<?php include_once "header.php";?>
	<!--header end-->

	<!--sidebar start-->
		<?php include_once "menu_lateral.php"; ?>
	<!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">					
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Register Camera</li>	
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <section>              	
				<div class="col-lg-9 col-md-12" style="width:100%;">	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-flag-o red"></i><strong>Register Camera</strong></h2>
						</div>
						  
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="cadastro_camera.php">
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Store Name <span class="required">*</span></label>
                                          
											  <input class="form-control " id="cname" type="hidden" value="<?php echo $idlj;?>" name="IdLoja" required />								
                                          
										  <div class="col-lg-8">
										  <?php
											require_once("includes/conexao_loja.inc");
											$conlj = new ALOJA();
											$loja = $conlj->Buscar($idlj);
										  ?>
												<input class="form-control " id="cname" type="text" value="<?php echo $loja[0][1];?>" name="NomeLoja" readonly/>										
                                          </div>
                                      </div>
									  <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Record Place <span class="required">*</span></label>
                                          <div class="col-lg-10">
											<input class="form-control " id="cname" type="text" name="VisaoCamera" required/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Camera Name<span class="required">*</span></label>
                                          <div class="col-lg-4">
                                              <input class="form-control " id="cname" type="text" name="NomeCamera" required />
                                          </div>
                                      </div>									  
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">URL<span class="required">*</span></label>
                                          <div class="col-lg-4">
                                              <input class="form-control " id="cname" type="text" name="Url" required />                                         										  								
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Register</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>
