function caps(sexo, cap){
	if (sexo=='m') {
		var caps= new Array('Vida','Hospital','Ela');
	}else{
		var caps= new Array('Vida','Hospital','Ele');
	}
	return caps[cap];
}