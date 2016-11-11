function validaNum(){
	var n = document.getElementById("lect").value;
	if(isNaN(n)){
		alert("Debe ingresar un numero");
		document.getElementById("lect").value = "";
	}
	num = parseInt(n);
	if (num < 0){
		alert("Debe ingresar numero positivo");
		document.getElementById("lect").value = "";
	}
}

function validaCampos (){
	var c1 = document.getElementById("lect").value;
	var c2 = document.getElementById("evidencia").value;


	if (c1.length == 0 || c1 == null || c1 == "") {
		alert("debe ingresar la lectura final");
		return false;
	}else if(c2 == null || c2 == ""){
		alert("debe ingresar imagen de evidencia");
		return false;
	}
}
