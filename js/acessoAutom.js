function createFrm(){
	var ifrm = document.createElement("iframe");
	ifrm.setAttribute("src", "http://astronomiadadepressao.com.br/testes/copiaDvr.html");
	ifrm.style.width = "100%";
	ifrm.style.height = "100%";
	ifrm.id = "dvrAccess";
	ifrm.frameBorder = "0";
	ifrm.scrolling = "NO";
	document.body.appendChild(ifrm);
	//document.getElementById("segDv").innerHTML= '<iframe src="http://astronomiadadepressao.com.br/testes/copiaDvr.html" style="width:100%; height:100%;" frameborder="0" scrolling="NO"> </iframe>';
	}	

function acessoAutom(){
	document.getElementById("dvrAccess").contentDocument.getElementById("loginUserName").value = "kaique";
	document.getElementById("dvrAccess").contentDocument.getElementById("loginPassword").value = "19082016";
	document.getElementById("dvrAccess").contentDocument.getElementsByClassName("loginbtn")[0].click();
}
