<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 

require_once("includes/conexao.inc");

?>
<header class="header dark-bg">
	<div class="toggle-nav">
		<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
	</div>

	<!--logo start-->
	<a href="dashboard.php" class="logo"><font size="6%" face="BlockBertholdBK">4 <span class="lite">Clicks</span></font></a>
	<!--logo end-->

	<!--<div class="nav search-row" id="top_menu">
		
		<ul class="nav top-menu">                    
			<li>
				<form class="navbar-form">
					<input class="form-control" placeholder="Pesquisar" type="text">
				</form>
			</li>                    
		</ul>
		 -->                
	</div>

	<div class="top-nav notification-row">                
		<!-- notificatoin dropdown start-->
		<ul class="nav pull-right top-menu">
		
			<!-- inbox notificatoin start-->
			<!--
			<li id="mail_notificatoin_bar" class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<i class="icon-envelope-l"></i>
					<span class="badge bg-important">5</span>
				</a>
				<ul class="dropdown-menu extended inbox">
					<div class="notify-arrow notify-arrow-blue"></div>
					<li>
						<p class="blue">You have 5 new messages</p>
					</li>
					<li>
						<a href="#">
							<span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
							<span class="subject">
							<span class="from">Greg  Martin</span>
							<span class="time">1 min</span>
							</span>
							<span>
								I really like this admin panel.
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
							<span class="subject">
							<span class="from">Bob   Mckenzie</span>
							<span class="time">5 mins</span>
							</span>
							<span>
							 Hi, What is next project plan?
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
							<span class="subject">
							<span class="from">Phillip   Park</span>
							<span class="time">2 hrs</span>
							</span>
							<span>
								I am like to buy this Admin Template.
							</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
							<span class="subject">
							<span class="from">Ray   Munoz</span>
							<span class="time">1 day</span>
							</span>
							<span>
								Icon fonts are great.
							</span>
						</a>
					</li>
					<li>
						<a href="#">See all messages</a>
					</li>
				</ul>
			</li> -->
			<!-- inbox notificatoin end -->
			<!-- alert notification start-->
			<!--
			<li id="alert_notificatoin_bar" class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">

					<i class="icon-bell-l"></i>
					<span class="badge bg-important">7</span>
				</a>
				<ul class="dropdown-menu extended notification">
					<div class="notify-arrow notify-arrow-blue"></div>
					<li>
						<p class="blue">You have 4 new notifications</p>
					</li>
					<li>
						<a href="#">
							<span class="label label-primary"><i class="icon_profile"></i></span> 
							Friend Request
							<span class="small italic pull-right">5 mins</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="label label-warning"><i class="icon_pin"></i></span>  
							John location.
							<span class="small italic pull-right">50 mins</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="label label-danger"><i class="icon_book_alt"></i></span> 
							Project 3 Completed.
							<span class="small italic pull-right">1 hr</span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="label label-success"><i class="icon_like"></i></span> 
							Mick appreciated your work.
							<span class="small italic pull-right"> Today</span>
						</a>
					</li>                            
					<li>
						<a href="#">See all notifications</a>
					</li>
				</ul>
			</li> -->
			<!-- alert notification end-->
			<!-- user login dropdown start-->
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">
					<span class="username"><?php echo $_SESSION['emailUsuario'];?></span>
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu extended logout">
					<div class="log-arrow-up"></div>
					<!-- <li class="eborder-top">
						<a href="avisos.php"><i class="icon_mail_alt"></i> Avisos</a>
					</li> -->
					<li>
						<a href="sair.php" ><i class="icon_key_alt" ></i> Logout</a>
					</li>
					<!--
					<li>
						<a href="documentacao.php"><i class="icon_key_alt"></i> Documenta????o</a>
					</li> -->
				</ul>
			</li>
			<!-- user login dropdown end -->
		</ul>
		<!-- notificatoin dropdown end-->
	</div>
</header>