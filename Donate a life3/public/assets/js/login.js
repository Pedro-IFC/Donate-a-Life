window.onload=function(){
	var btn_entrar= document.querySelector("#btn-entrar");
	btn_entrar.onclick=function(event){
		event.preventDefault();
		var nome = document.querySelector("#nome").value;
		var senha = document.querySelector("#senha").value;
		var loading= document.querySelector("#loading");
		if (nome=="" || senha=="") {
			alert("Erro, campo com dado faltante");
		}else{
			var url= "?nome="+nome+"&senha="+senha;
			xhttpGet('ajax/login', function(){
				beforeSend(function(){
					loading.innerHTML=`<center>Carregando</center>`
				});
				sucess(function(){
					var request = xhttp.responseText;
					if (request=="erro1") {
						alert("Nenhum usuario cadastrado com este nome");
					}else if(request=="erro2"){
						alert("Usuario e senhas não correspondem");
					}else{
						window.open("principal.php","_self");
					}
				});
			},url);
		}
	}
}