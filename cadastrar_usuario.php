<?php
session_start();
require_once("includes/conexao.inc");
$logon = new AUSU();
	$logon->Logado();
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
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
	<script>
	function showMessage(){
		var cookies = document.cookie;
		if (document.cookie.indexOf('btb_fail') > -1){
			var cookie = cookies.substring(cookies.indexOf('btb_fail='), cookies.length);
			cookie = cookie.substring(cookies.indexOf('=')+1, cookies.indexOf(';'));
			if (cookie){
				document.getElementById("Message-Fail").innerHTML = document.getElementById("Message-Fail").innerHTML.replace("<strong></strong>", "<strong>" + cookie + "</strong>");
				document.getElementById("Message-Fail").style.display="block";
			}
		}
		
		if (document.cookie.indexOf('btb_sucesso') > -1){
			var cookie = cookies.substring(cookies.indexOf('btb_sucesso='), cookies.length);
			cookie = cookie.substring(cookies.indexOf('=')+1, cookies.indexOf(';'));
			if (cookie){
				document.getElementById("Message-Success").innerHTML = document.getElementById("Message-Success").innerHTML.replace("<strong></strong>", "<strong>" + cookie + "</strong>");
				document.getElementById("Message-Success").style.display="block";
			}
		}
		return cookie;
	}	
	</script>
	
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
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
				
				<!-- CABEÇALHO PAGE
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
				-->	
					
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Register User</li>						  	
					</ol>
				</div>
			</div>
			
           <div class="row">
								   	   
		  <section>              	
				<div class="col-lg-9 col-md-12" style="width:100%;">	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-flag-o red"></i><strong>Register User</strong></h2>
						</div>
							
							<div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="cadastro_usuario.php">
                                     
									<center>
										<div class="alert alert-success fade in" style="display:none;" id="Message-Success">
											<button data-dismiss="alert" class="close close-sm" type="button">
												<i class="icon-remove"></i>
											</button>
											<strong></strong>
										</div>
										<div class="alert alert-block alert-danger fade in" style="display:none;" id="Message-Fail">
											<button data-dismiss="alert" class="close close-sm" type="button">
												<i class="icon-remove"></i>
											</button>
											<strong></strong> 
										</div>
									</center>
									
									 <div class="form-group ">
                                          <label class="control-label col-lg-2">User <span class="required">*</span></label>
                                          <div class="col-lg-3">
                                              <input class="form-control" placeholder="User" name="usuario" type="text" autofocus required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-3">
                                              <input class="form-control " placeholder="Password" type="password" name="senha" required />											                                              
                                          </div>										 
                                      </div>	

										<div class="form-group ">
                                          <label class="control-label col-lg-2">Re-type Password <span class="required">*</span></label>
                                          <div class="col-lg-3">
                                              <input class="form-control " placeholder="Re-type Password" type="password" name="senhaconf" required />											                                              
                                          </div>										 
                                      </div>
									
										<div class="form-group ">
											<label class="control-label col-lg-2">Profile <span class="required">*</span></label> 
											<div class="col-lg-3">
												<select class="form-control" name="perfil" placeholder="Profile" <!--style=width:200px--> required>
												<option>Admin</option>
												<option>Support</option>
												<option>Monitor</option>
												<option>Maintenance</option>
												<option>Guest</option>
												</select>
											</div>
										</div>
									  
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit" >Register</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
							
							
							<!--
							<form class="login-form" action="cadastro_usuario.php" method="post">
								<div class="login-wrap-2">
									<center>
									<div class="alert alert-success fade in" style="display:none;" id="Message-Success">
										<button data-dismiss="alert" class="close close-sm" type="button">
											<i class="icon-remove"></i>
										</button>
										<strong></strong>
									</div>
									<div class="alert alert-block alert-danger fade in" style="display:none;" id="Message-Fail">
										<button data-dismiss="alert" class="close close-sm" type="button">
											<i class="icon-remove"></i>
										</button>
										<strong></strong> 
									</div>
									</center>
									<p class="login-img"><i class="icon_lock_alt"></i> <b>Cadastrar Novo Usuário</b></p>
									
									<label>Usuário</label>
									<div class="input-group">
									  <span class="input-group-addon"><i class="icon_profile"></i></span>
									  <input type="text" class="form-control" name="usuario" placeholder="Usuário" autofocus required>
									</div>
									
									<label>Senha</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="icon_key_alt"></i></span>
										<input type="password" class="form-control" name="senha" placeholder="Senha" required>
									</div>
									
									<label>Confirmar Senha</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="icon_key_alt"></i></span>
										<input type="password" class="form-control" name="senhaconf" placeholder="Confirmar Senha" required>
									</div>
									
									<label>Perfil</label>
									<div class="input-group">
										<select class="form-control" name="perfil" placeholder="Perfil" required>
											<option>Administrador</option>
											<option>Suporte</option>
											<option>Monitor</option>
											<option>Manutenção</option>
											<option>Visitante</option>
											</select>
									</div>
									
									<button class="btn btn-primary btn-lg btn-block" type="submit">Cadastrar</button>
									<!--button class="btn btn-danger btn-lg btn-block" type="submit" onclick="window.location.href='dashboard.php'">Cancelar</button-->
								<!--
								</div>
							</form>
							-->
                <!-- statics end -->
				
                  <div class="widget-foot">
                    <!-- Footer goes here -->
					<script>
					showMessage();
					</script>
                  </div>
                </div>
              </div>
              
            </div>
                        
          </div> 
              <!-- project team & activity end -->

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
	<!-- jQuery full calendar -->
	<script src="js/map.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>

  </body>
</html>
