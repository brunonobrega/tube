<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bit2B Monitor System">
    <meta name="author" content="Bit2B">
    <meta name="robots" content="noindex, nofollow, nosnippet, noodp, noarchive, noimageindex">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login - Burger Tube</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
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
	<script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
</script>
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" action="login.php" method="post" id="columnarForm">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i> <b>Login</b></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="usuario" placeholder="User" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="senha" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember
                <!--span class="pull-right"> <a href="#"> Esqueceu a senha?</a></span-->
            </label>
			
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="login" value="login" onclick="submitForm('login.php')">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="button" name="esqueceu" value="esqueci" onclick="submitForm('nova-senha.php')">Reset password</button>
        </div>

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
      </form>
    </div>
	
	<script>
		showMessage();
	</script>

  </body>
</html>
