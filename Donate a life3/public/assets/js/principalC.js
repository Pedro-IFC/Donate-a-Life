window.onload=function(){
	var nome_title=document.querySelector("#nome-title");
	var img_per= document.querySelector("#img-pers");
	var cap_title=document.querySelector("#cap-title");
	var cap_desc=document.querySelector("#cap-desc");
	var btn_historia=document.querySelector("#btn-historia");
	var capa_cap= document.querySelector("#capa-cap"); 
	xhttpGet('ajax/user',function(){
		beforeSend(function(){
			nome_title.innerHTML='Loading';
		});
		sucess(function(){
			var user = JSON.parse(xhttp.responseText);
			console.log(user);
			nome_title.innerHTML=user.nome;
			if (user.sexo=='m') {
				img_per.src='design_docs/final/he.png';
				var url="historiaP/histm"+(parseInt(user.cap)+1)+".php";
			}else{
				img_per.src='design_docs/final/she.png';
				capa_cap.src='design_docs/final/he.png';
				var url="historiaP/histf"+(parseInt(user.cap)+1)+".php";
			}
			if (user.cap==2 && user.sexo=='m') {
				capa_cap.src='design_docs/final/she.png';
			}else if(user.cap==2 && user.sexo=='f'){
				capa_cap.src='design_docs/final/he.png';
			}else{
				capa_cap.src="design_docs/final/capas_cap/"+user.cap+".png";
			}

			btn_historia.href=url;
			cap_title.innerHTML=caps(user.sexo,user.cap);
			switch(user.cap){
				case 0:
				cap_desc.innerHTML='Primeiro capitulo';
				break;
				case 1:
				cap_desc.innerHTML='Segundo capitulo';
				break;
				case 2:
				cap_desc.innerHTML='Terceiro capitulo';
				break;
			}
		});
	});
}