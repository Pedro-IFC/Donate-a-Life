window.onload=function(){
	var btn_cadastrar= document.querySelector("#btn-cadastrar");
	btn_cadastrar.onclick=function(event){
		event.preventDefault();
		var nome = document.querySelector("#nome").value;
		var senha = document.querySelector("#senha").value;
		var conf_senha = document.querySelector("#conf-senha").value;
		var loading= document.querySelector("#loading");
		if (nome=="" || senha=="" || conf_senha=="") {
			alert("Erro, campo com dado faltante");
		}else{
			if (senha!=conf_senha) {
				alert("As senhas não coicidem");
			}else{
				if (senha.length>=6) {
					if (document.querySelector("#sexom").checked) {
						var sexo = document.querySelector("#sexom").value;
					}else{
						var sexo = document.querySelector("#sexof").value;
					}
					var parametros= '?nome='+nome+'&sexo='+sexo+'&senha='+senha;
					xhttpGet('ajax/cadastrar',function(){
						beforeSend(function(){
							loading.innerHTML=`<center>Carregando</center>`;
						});
						sucess(function(){
							var request=xhttp.responseText;
							if (request=='erro1') {
								alert("O nome já está sendo usado por outro usuario");
							}else{
								alert("Cadastrado com sucesso");
								window.open('index.php',"_self");
							}
						});
					}, parametros);
				}else{
					alert("Sua senha deve ter no minimo 6 caracteres");
				}
			}
		}
	}
}