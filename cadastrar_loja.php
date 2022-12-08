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
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

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
			
			function verifyTel(){
				var textTel = document.getElementById("telefoneLoja").value;
				textTel = textTel.replace(/[^0-9]/g, "");
				var newTextTel = "";
				var tamanho = textTel.length;
								
				for (var i = 0; i < tamanho; i++){
				
					switch(i){
						
						case 0:
							newTextTel = newTextTel + "(" + textTel[0];
							break;
						case 1:
							newTextTel = newTextTel + "" + textTel[1];
							break;
						case 2:
							newTextTel = newTextTel + ")" + " " + textTel[2];
							break;
						case 3:
							newTextTel = newTextTel + textTel[3];
							break;
						case 4:
							newTextTel = newTextTel + "" + textTel[4];
							break;
						case 5:
							newTextTel = newTextTel + "" + textTel[5];
							break;
						case 6:
							newTextTel = newTextTel + "-" + textTel[6];
							break;
						case 7:
							newTextTel = newTextTel + "" + textTel[7];
							break;
						case 8:
							newTextTel = newTextTel + "" + textTel[8];
							break;
						case 9:
							newTextTel = newTextTel + "" + textTel[9];
							break;
						case 10:
							newTextTel = newTextTel + "" + textTel[10];
							break;
						case 11:
							newTextTel = newTextTel + "" + textTel[11];
							break;
						case 12:
							newTextTel = newTextTel + "" + textTel[12];
							break;
						case 13:
							newTextTel = newTextTel + "" + textTel[13];
							break;
					} 
				}
				document.getElementById("telefoneLoja").value = newTextTel;
			}
			
			function verificaNum(){
				var textNum = document.getElementById("numLoja").value;
				textNum = textNum.replace(/[^0-9]/g, "");		
				document.getElementById("numLoja").value = textNum;
			}
			
			function verificaCep(){
				var textCep = document.getElementById("numCep").value;
				textCep = textCep.replace(/[^0-9]/g, "");
				
				var newTextCep = "";
				var tamanhoCep = textCep.length;
								
				for (var i = 0; i < tamanhoCep; i++){
				
					switch(i){
						
						case 0:
							newTextCep = textCep[0];
							break;
						case 1:
							newTextCep = newTextCep + "" + textCep[1];
							break;
						case 2:
							newTextCep = newTextCep + "" + textCep[2];
							break;
						case 3:
							newTextCep = newTextCep + "" + textCep[3];
							break;
						case 4:
							newTextCep = newTextCep + "" + textCep[4];
							break;
						case 5:
							newTextCep = newTextCep + "-" + textCep[5];
							break;
						case 6:
							newTextCep = newTextCep + "" + textCep[6];
							break;
						case 7:
							newTextCep = newTextCep + "" + textCep[7];
							break;
						case 8:
							newTextCep = newTextCep + "" + textCep[8];
							break;
					} 
				}					
				document.getElementById("numCep").value = newTextCep;
			}
		</script>
		
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/combo.js"></script>
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
		  <div class="row">
				<div class="col-lg-12">					
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Register Store</li>	
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Register Store
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="cadastro_loja.php">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Store Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" placeholder="Store Name" id="cname" name="NomeLoja" maxlength="60" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Initials <span class="required">*</span></label>
                                          <div class="col-lg-3">
                                              <input class="form-control " id="cname" placeholder="Initials" type="text" name="SiglaLoja" maxlength="3" required />											                                              
                                          </div>
										  <div class="col-lg-2">											  
                                                  <input type="radio" name="Franquia" value="Filial" checked/> Branch                                                  
                                          </div>
										  <div class="col-lg-2">											  
                                                  <input type="radio" name="Franquia" value="Franquia"/> Franchise                                                
                                          </div>
										 
                                      </div>									  
                                      <div class="form-group ">
                                         
										  <label for="cname" class="control-label col-lg-2">Contact Name <span class="required">*</span></label>
										  <div class="col-lg-4">
                                              <input class="form-control" placeholder="Contact Name" id="cname" type="text" maxlength="35" name="Contato" required />										
                                          </div>
										  <label for="cname" class="control-label col-lg-1">Phone <span class="required">*</span></label>
										  <div class="col-lg-2">
                                              <input class="form-control" placeholder="Phone" id="telefoneLoja" type="text" maxlength="15" name="Telefone" onKeyUp="verifyTel();" required />										
                                          </div>
                                      </div>
									
										<div class="form-group ">
											<label for="cname" class="control-label col-lg-2">Country <span class="required">*</span></label> 

											<div class="col-lg-4">
												<!--<select class="form-control m-bot15" class="form-control" name="Pais" id="pais"></select>-->
												<input class="form-control" type="text" class="form-control" name="Pais" id="pais" value="Brasil" readonly/>
											</div>
											
											<label for="cname" class="control-label col-lg-1">State <span class="required">*</span></label> 
											<div class="col-lg-2">
												<select class="form-control" name="Estado" id="estado" style=width:200px></select>
											</div>
										</div>
									
										<div class="form-group ">
											<label for="cname" class="control-label col-lg-2">City <span class="required">*</span></label> 

											<div class="col-lg-4">
												<!--<input class="form-control" id="cname"  type="text" name="Cidade" list="listaCidade" placeholder="Escolha uma cidade" maxlength="30" />-->
												<select class="form-control m-bot15" name="Cidade" id="cidade"><option value="0">--Choose state first--</option></select>
											</div>
											
											<label for="cname" class="control-label col-lg-1">Region <span class="required">*</span></label>
											  <div class="col-lg-4">
												<!--<select class="form-control m-bot15" name="bairro" id="bairro"><option value="0">--Primeiro a Cidade--</option></select>-->
												  <input class="form-control" id="cname" name="Bairro" placeholder="Region" maxlength="30" type="text" required />
											  </div>
										</div>
									<!--</form>-->  
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Address <span class="required">*</span></label>
                                          <div class="col-lg-4">
                                              <input class="form-control" id="cname" placeholder="Address" name="Logradouro" maxlength="50" type="text" required />
                                          </div>
										  <label for="cname" class="control-label col-lg-1">Number <span class="required">*</span></label>
                                          <div class="col-lg-2">
                                              <input class="form-control" placeholder="Number" id="numLoja" name="Numero" maxlength="6" type="text" onKeyUp="verificaNum();" required />
                                          </div>
										  <label for="cname" class="control-label col-lg-1">ZIP Number<span class="required">*</span></label>
                                          <div class="col-lg-2">
                                              <input class="form-control" placeholder="ZIP Number" id="numCep" name="Cep" maxlength="9" type="text" onKeyUp="verificaCep();" required />
                                          </div>
                                      </div>
									  								  
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Type</label>
                                          <div class="col-lg-10">
                                              <select class="form-control m-bot15" name="TipoLoja" required>
                                              <option>Store</option>
                                              <option>Kiosk</option>
                                          </select>
                                          </div>
                                      </div>
									  <!--div class="form-group ">
										<label for="cname" class="control-label col-lg-2">Referencia <span class="required">*</span></label>
										  <div class="col-lg-10">
                                              <input class="form-control " placeholder="Insira um ponto de referência" id="cname" type="text" maxlength="60" name="Referencia" required />										
                                          </div>
										  </div-->
										  
									  <div class="form-group ">
										<label for="ccomment" class="control-label col-lg-2">Referral</label>
											<div class="col-lg-10">
											<textarea name="Referencia" class="form-control m-bot15" maxlength="200" placeholder="Referral"></textarea>
											</div>
									  </div>
									  
										<div class="form-group ">
										<label for="ccomment" class="control-label col-lg-2">Comments</label>
											<div class="col-lg-10">
											<textarea name="Observacao" class="form-control m-bot15" maxlength="200" placeholder="Comments..."></textarea>
											</div>
									  </div>
									  
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit" id="botaoCadastrar">Register</button>
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
	<script> showMessage();</script>
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
