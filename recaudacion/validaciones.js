function validaNum(){
	var n = document.getElementById("monto").value;
	if(isNaN(n)){
		alert("Debe ingresar un numero");
		document.getElementById("monto").value = "";
	}
	num = parseInt(n);
	if (num < 0){
		alert("Debe ingresar numero positivo");
		document.getElementById("monto").value = "";
	}
}

function validaCampos (){
	var c1 = document.getElementById("monto").value;
	var c2 = document.getElementById("evidencia").value;


	if (c1.length == 0 || c1 == null || c1 == "") {
		alert("debe ingresar el monto cancelado");
		return false;
	}else if(c2 == null || c2 == ""){
		alert("debe ingresar imagen de evidencia");
		return false;
	}
}
