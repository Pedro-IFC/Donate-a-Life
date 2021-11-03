window.onload=function(){  
	var title= document.querySelector("#title");
	var nome= document.getElementById("teste").getElementsByClassName("nome");
	var tab = document.getElementById("teste").getElementsByClassName("tab");
	for (var i=0; i<tab.length;i++){
		tab[i].innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}
	xhttpGet('../ajax/GetDataUser',function(){ 
		beforeSend(function(){ 
			title.innerHTML='Carregando';
		}); 
		sucess(function(){ 
			var user=JSON.parse(xhttp.responseText);
			var cap = caps(user.sexo, user.cap);
			title.innerHTML=cap;
			for (var i=0; i<nome.length;i++){
				nome[i].innerHTML=user.nome;
			}
		}); 
	},"?idu="+idu);
}
