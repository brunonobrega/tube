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
						<li><i class="fa fa-laptop"></i>Maintenance</li>
					</ol>
				</div>
			</div>
		 
            			
           <div class="row">
		   
		   	
									   	   
		   <div class="col-lg-12 col-md-12">
		   		   				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-map-marker red"></i><strong>Maintenance</strong></h2>
							<div class="panel-actions">
								<a href="dashboard.php#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="dashboard.php#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								
							</div>	
						</div>
					</div>
													
				</div>
				
		  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="info-box red-bg">
						<i class="icon_tools"></i>
						<div class="count">042</div>
						<div class="title">Maintenance</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
		
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="info-box green-bg">
						<i class="icon_camera"></i>
						<div class="count">1.420</div>
						<div class="title">Live Cameras</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="icon_globe_alt"></i>
						<div class="count">420</div>
						<div class="title">Stores</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
		
							
		</div><!--/row-->
		
		  <!-- Today status end -->
			              				
			<div class="row">
               	
				<div class="col-lg-12 col-md-12">	
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-flag-o red"></i><strong>Stores</strong></h2>
							<div class="panel-actions">
								<a href="dashboard.php#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
								<a href="dashboard.php#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								
							</div>
						</div>
						<div class="panel-body">
							<table class="table bootstrap-datatable countries">
								<thead>
									<tr>
										<th></th>
										<th>States</th>
										<th>Stores</th>
										<th>Live Cameras</th>
										<th>All Cameras</th>
										<th>Percentage</th>
									</tr>
								</thead>   
								<tbody>
									<tr>
										<td><img src="img/sao-paulo.png" style="height:18px; margin-top:-2px;"></td>
										<td>São Paulo</td>
										<td>90</td>
										<td>215</td>
										<td>242</td>
										<td>
											<div class="progress thin">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
												</div>
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
											  	</div>
											</div>
											<span class="sr-only">73%</span>   	
										</td>
									</tr>
									<tr>
										<td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
										<td>Rio de Janeiro</td>
										<td>3652</td>
										<td>2563</td>
										<td>212</td>
										<td>
											<div class="progress thin">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
												</div>
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
												</div>
											</div>
											<span class="sr-only">57%</span>   	
										</td>
									</tr>
									<tr>
										<td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
										<td>Paraná</td>
										<td>562</td>
										<td>452</td>
										<td>413</td>
										<td>
											<div class="progress thin">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
												</div>
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
											  	</div>
											</div>
											<span class="sr-only">93%</span>   	
										</td>
									</tr>
									<tr>
										<td><img src="img/India.png" style="height:18px; margin-top:-2px;"></td>
										<td>Distrito Federal</td>
										<td>1258</td>
										<td>958</td>
										<td>182</td>
										<td>
											<div class="progress thin">
											  	<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											  	</div>
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											  	</div>
											</div>
											<span class="sr-only">20%</span>   	
										</td>
									</tr>
									<tr>
										<td><img src="img/Spain.png" style="height:18px; margin-top:-2px;"></td>
										<td>Rio Grande do Sul</td>
										<td>4856</td>
										<td>3621</td>
										<td>126</td>
										<td>
											<div class="progress thin">
											  	<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											  	</div>
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											  	</div>
											</div>
											<span class="sr-only">20%</span>   	
										</td>
									</tr>
									<tr>
										<td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
										<td>Recife</td>
										<td>265</td>
										<td>102</td>
										<td>42</td>
										<td>
											<div class="progress thin">
											  	<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											  	</div>
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											  	</div>
											</div>
											<span class="sr-only">20%</span>   	
										</td>
									</tr>
									<tr>
										<td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
										<td>Amazonas</td>
										<td>265</td>
										<td>102</td>
										<td>381</td>
										<td>
											<div class="progress thin">
											  	<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											  	</div>
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											  	</div>
											</div>
											<span class="sr-only">20%</span>   	
										</td>
									</tr>
									<tr>
										<td><img src="img/Germany.png" style="height:18px; margin-top:-2px;"></td>
										<td>Espírito Santo</td>
										<td>265</td>
										<td>102</td>
										<td>222</td>
										<td>
											<div class="progress thin">
											  	<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											  	</div>
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											  	</div>
											</div>
											<span class="sr-only">20%</span>   	
										</td>
									</tr>
								</tbody>
							</table>
						</div>
	
					</div>	

				</div><!--/col-->
				
				

                    
                   
                <!-- statics end -->
              
            
				

           
                  <div class="widget-foot">
                    <!-- Footer goes here -->
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
  <script>

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
