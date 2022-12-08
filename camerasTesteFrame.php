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
	
	<script>
		function camEscolhaUm(){			
			document.getElementById("cameraUm").style.display="inline";
			document.getElementById("cameraDois").style.display="none";
			document.getElementById("cameraTres").style.display="none";
			document.getElementById("cameraQuatro").style.display="none";
			document.getElementById("cameraCinco").style.display="none";
			document.getElementById("cameraSeis").style.display="none";
			document.getElementById("cameraUm").style.width="840px";
			document.getElementById("cameraDois").style.width="420px";
			document.getElementById("cameraTres").style.width="420px";
			document.getElementById("cameraQuatro").style.width="420px";
			document.getElementById("cameraCinco").style.width="420px";
			document.getElementById("cameraSeis").style.width="420px";
		}
		
		function camEscolhaDois(){			
			document.getElementById("cameraUm").style.display="none";
			document.getElementById("cameraDois").style.display="inline";
			document.getElementById("cameraTres").style.display="none";
			document.getElementById("cameraQuatro").style.display="none";
			document.getElementById("cameraCinco").style.display="none";
			document.getElementById("cameraSeis").style.display="none";
			document.getElementById("cameraDois").style.width="840px";
			document.getElementById("cameraUm").style.width="420px";
			document.getElementById("cameraTres").style.width="420px";
			document.getElementById("cameraQuatro").style.width="420px";
			document.getElementById("cameraCinco").style.width="420px";
			document.getElementById("cameraSeis").style.width="420px";
		}
		function camEscolhaTres(){			
			document.getElementById("cameraUm").style.display="none";
			document.getElementById("cameraDois").style.display="none";
			document.getElementById("cameraQuatro").style.display="none";
			document.getElementById("cameraCinco").style.display="none";
			document.getElementById("cameraSeis").style.display="none";
			document.getElementById("cameraTres").style.display="inline";
			document.getElementById("cameraTres").style.width="840px";
			document.getElementById("cameraDois").style.width="420px";
			document.getElementById("cameraUm").style.width="420px";
			document.getElementById("cameraQuatro").style.width="420px";
			document.getElementById("cameraCinco").style.width="420px";
			document.getElementById("cameraSeis").style.width="420px";
		}
		function camEscolhaQuatro(){			
			document.getElementById("cameraUm").style.display="none";
			document.getElementById("cameraDois").style.display="none";
			document.getElementById("cameraTres").style.display="none";
			document.getElementById("cameraCinco").style.display="none";
			document.getElementById("cameraSeis").style.display="none";
			document.getElementById("cameraQuatro").style.display="inline";
			document.getElementById("cameraQuatro").style.width="840px";
			document.getElementById("cameraUm").style.width="420px";
			document.getElementById("cameraDois").style.width="420px";
			document.getElementById("cameraTres").style.width="420px";
			document.getElementById("cameraCinco").style.width="420px";
			document.getElementById("cameraSeis").style.width="420px";
		}
		function camEscolhaCinco(){			
			document.getElementById("cameraUm").style.display="none";
			document.getElementById("cameraDois").style.display="none";
			document.getElementById("cameraTres").style.display="none";
			document.getElementById("cameraQuatro").style.display="none";
			document.getElementById("cameraSeis").style.display="none";
			document.getElementById("cameraCinco").style.display="inline";
			document.getElementById("cameraCinco").style.width="840px";
			document.getElementById("cameraUm").style.width="420px";
			document.getElementById("cameraDois").style.width="420px";
			document.getElementById("cameraTres").style.width="420px";
			document.getElementById("cameraQuatro").style.width="420px";
			document.getElementById("cameraSeis").style.width="420px";
		}
		function camEscolhaSeis(){			
			document.getElementById("cameraUm").style.display="none";
			document.getElementById("cameraDois").style.display="none";
			document.getElementById("cameraTres").style.display="none";
			document.getElementById("cameraQuatro").style.display="none";
			document.getElementById("cameraCinco").style.display="none";
			document.getElementById("cameraSeis").style.display="inline";
			document.getElementById("cameraSeis").style.width="840px";
			document.getElementById("cameraUm").style.width="420px";
			document.getElementById("cameraDois").style.width="420px";
			document.getElementById("cameraTres").style.width="420px";
			document.getElementById("cameraQuatro").style.width="420px";
			document.getElementById("cameraCinco").style.width="420px";
		}
		function camEscolhaTodas(){			
			document.getElementById("cameraUm").style.display="inline";
			document.getElementById("cameraDois").style.display="inline";
			document.getElementById("cameraTres").style.display="inline";
			document.getElementById("cameraQuatro").style.display="inline";
			document.getElementById("cameraCinco").style.display="inline";
			document.getElementById("cameraSeis").style.display="inline";
			document.getElementById("cameraUm").style.width="420px";
			document.getElementById("cameraDois").style.width="420px";
			document.getElementById("cameraTres").style.width="420px";
			document.getElementById("cameraQuatro").style.width="420px";
			document.getElementById("cameraCinco").style.width="420px";
			document.getElementById("cameraSeis").style.width="420px";
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
								<h2><i class="fa fa-map-marker red"></i><strong>Câmeras</strong></h2>
								<div class="panel-actions">
									<!--a href="dashboard.php#" class="btn-setting">&nbsp País &nbsp </a-->
									<a href="javascript:window.history.go(-4)" class="btn-setting">&nbsp Estados &nbsp </a>
									<a href="javascript:window.history.go(-3)" class="btn-setting">&nbsp Regiões &nbsp </a>
									<a href="javascript:window.history.go(-2)" class="btn-setting">&nbsp Cidades &nbsp </a>
									<a href="javascript:window.history.go(-1)" class="btn-setting">&nbsp Lojas &nbsp </a>
									<a href="#" class="fscreen btn-minimize" onclick="toggleFullScreen()"><i class="fa fa-arrows-alt"></i></a>
								</div>	
							</div>
						<section id="videos">
							<div class="panel-body-map" style="height:660px;">
								<center style="height:500px;">																		
									<iframe id="videoFrame" src="http://astronomiadadepressao.com.br/testes/testeFrame.html"  frameborder="0" scrolling="NO" width="100%" height="100%"></iframe>
									
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
