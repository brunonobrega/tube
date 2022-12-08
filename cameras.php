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
	
	<!--CSS Mapas-->
	<link href="css/meso-maps.css" rel="stylesheet"/>
	
	<script>
	function visaoMonitor(){
		var acesso = "<?php echo $_SESSION['acessoUsuario']; ?>";
		console.log(acesso);
		if(acesso == 2){
			document.getElementById("main-content").style.marginLeft = "0px";						
		}
	}
	</script>
	
	<script src="js/escolhaCam.js"></script>
	<script> 
		function fechaModal(){
			document.getElementById("chamadosModal").style.display = "none";		
		}
		
		function showChamdosModal(){
			document.getElementById("chamadosModal").style.display = "block";
		}
	</script>
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">

	<?php 
		$acesso = new AUSU();
		$usuarios = $acesso->NivelAcesso($_SESSION['acessoUsuario']);
	?>
	
	<!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			    				
			  <div class="row">
				   <div class="col-lg-9 col-md-12" style="width:100%">
		   		   				
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2><i class="fa fa-map-marker red"></i><strong>Cameras</strong></h2>
								<div class="panel-actions">
								
									<a href="javascript:void(0)" onclick="showChamdosModal()" class="btn-setting" style="background-color:rgb(162, 14, 29); color:rgb(241, 242, 243); border-radius:3px">&nbsp Maintenance &nbsp </a>
									<!--a href="dashboard.php#" class="btn-setting">&nbsp País &nbsp </a-->									
									<a href="javascript:window.history.go(-4)" class="btn-setting">&nbsp States &nbsp </a>
									<a href="javascript:window.history.go(-3)" class="btn-setting">&nbsp Regions &nbsp </a>
									<a href="javascript:window.history.go(-2)" class="btn-setting">&nbsp Cities &nbsp </a>
									<a href="javascript:window.history.go(-1)" class="btn-setting">&nbsp Stores &nbsp </a>
									<a href="#" class="fscreen btn-minimize" onclick="toggleFullScreen()"><i class="fa fa-arrows-alt"></i></a>
								</div>	
							</div>
						<section id="videos">
							<div class="panel-body-map" style="height:660px;">
								<center>
									</br>
									<div class="btn-row">
											<div class="btn-group">
												<button type="button" class="btn btn-primary"  id="optionAll" onclick="camEscolhaTodas()">Todas</button>
												<button type="button" class="btn btn-primary"  id="option1" onclick="camEscolhaUm()">Camera 1</button>
												<button type="button" class="btn btn-primary"  id="option2" onclick="camEscolhaDois()">Camera 2</button>
												<button type="button" class="btn btn-primary"  id="option3" onclick="camEscolhaTres()">Camera 3</button>
												<button type="button" class="btn btn-primary"  id="option4" onclick="camEscolhaQuatro()">Camera 4</button>
												<button type="button" class="btn btn-primary"  id="option5" onclick="camEscolhaCinco()">Camera 5</button>
												<button type="button" class="btn btn-primary"  id="option6" onclick="camEscolhaSeis()">Camera 6</button>
												<button type="button" class="btn btn-primary"  id="option7" onclick="camEscolhaSete()">Camera 7</button>
												<button type="button" class="btn btn-primary"  id="option8" onclick="camEscolhaOito()">Camera 8</button> <br>
												<button type="button" class="btn btn-primary"  id="option9" onclick="camEscolhaNove()">Camera 9</button>
												<button type="button" class="btn btn-primary"  id="option10" onclick="camEscolhaDez()">Camera 10</button>
												<button type="button" class="btn btn-primary"  id="option11" onclick="camEscolhaOnze()">Camera 11</button>
												<button type="button" class="btn btn-primary"  id="option12" onclick="camEscolhaDoze()">Camera 12</button>
												<button type="button" class="btn btn-primary"  id="option13" onclick="camEscolhaTreze()">Camera 13</button>
												<button type="button" class="btn btn-primary"  id="option14" onclick="camEscolhaCatorze()">Camera 14</button>
												<button type="button" class="btn btn-primary"  id="option15" onclick="camEscolhaQuinze()">Camera 15</button>
												<button type="button" class="btn btn-primary"  id="option16" onclick="camEscolhaDezesseis()">Camera 16</button>
											</div>						
									</div>
									
									<br>
									<div id="chamadosModal" class="modalTT" style="background-color:rgba(73, 132, 42, 0.93); position: absolute; color:white;opacity:3;top:1%; right:25%; left:25%; bottom:93%; border-radius: 5px; display: none;">
										<center>
											<p style="margin-top:7%; font-size:20px; font-family: 'Lato', sans-serif;">
												Abrir chamado para esta loja?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<button class="" onClick="confirmaModal()" style="border-radius: 3px; color: rgba(73, 132, 42, 0.93);">Confirm </button> &nbsp;&nbsp;
												<button class="" onClick="fechaModal()" style="border-radius: 3px; color: rgb(162, 14, 29);">Cancel</button> 
											</p>
										</center>
									</div>
									
									<iframe id="cameraUm" src="http://52.44.225.241/stream.php?camera=1"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraDois" src="http://52.44.225.241/stream.php?camera=2"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraTres" src="http://52.44.225.241/stream.php?camera=3"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraQuatro" src="http://52.44.225.241/stream.php?camera=4"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraCinco" src="http://52.44.225.241/stream.php?camera=5"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraSeis" src="http://52.44.225.241/stream.php?camera=6"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraSete" src="http://52.44.225.241/stream.php?camera=7"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraOito" src="http://52.44.225.241/stream.php?camera=8"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraNove" src="http://52.44.225.241/stream.php?camera=9"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraDez" src="http://52.44.225.241/stream.php?camera=10"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraOnze" src="http://52.44.225.241/stream.php?camera=11"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraDoze" src="http://52.44.225.241/stream.php?camera=12"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraTreze" src="http://52.44.225.241/stream.php?camera=13"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraCatorze" src="http://52.44.225.241/stream.php?camera=14"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraQuinze" src="http://52.44.225.241/stream.php?camera=15"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
									<iframe id="cameraDezesseis" src="http://52.44.225.241/stream.php?camera=16"  frameborder="0" scrolling="NO" width="420px" height="280px;" style="display:inline;"></iframe>
									
								</center>
							</div>
						</section>
						</div>
					</div>
				</div>
			</section>
		</section>
	</section>
	
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
	<script src="js/full-screen.js"></script>
  <script>

		visaoMonitor();
		
		document.getElementsByClassName("col-lg-9 col-md-12")[0].style.width = "100%";
		document.getElementsByClassName("col-lg-9 col-md-12")[0].style.height = "100%";
		document.getElementsByClassName("panel-body-map")[0].style.height = "100%";

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>
			
  </body>
</html>
