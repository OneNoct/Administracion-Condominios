//validador de RUT chileno mediante su digito verificador
function validaRut(){  
    var rut = document.getElementById("rut").value;
    
    var rut2 = rut.split("-");
    p1 = rut2[0];
    p2 = rut2[1];
    
    var c1 = p1.length;
    c1 = parseInt(c1)-1;
    
    var parte = p1.split("");
    
    var serie = 2;
    var suma = 0;
    for(var i=c1; i>=0;i--){
        suma = suma + (parte[i]*serie);
        serie++;
        if(serie == 8){
            serie = 2;
        }
    }
    
    var resto = suma%11;
    var dv = 11-resto;
    if(dv >= 1 && dv <= 9){   
    }else if(dv == 10){
        dv = "k";   
    }else{
        dv = 0;
    }
    
    if(dv == p2){
    }else{
        alert("Rut invalido");
        document.getElementById("rut").value = "";
    }
}


function valEmail(){
	var email = document.getElementById("email").value;
	if (!(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/.test(email))) {
		alert("No cumple con el formato, por favor revisar");
		document.getElementById("email").value = "";
	}
}

function valTelefono(){
	var phone = document.getElementById("phone").value;
	if (!(/^[2-9][0-9]{6}$/.test(phone))) {
		alert("No cumple con el formato, por favor revisar");
		document.getElementById("phone").value = "";
	}
}

function valCelular(){
	var cellphone = document.getElementById("cellphone").value;
	if (!(/^[9][0-9]{8}$/.test(cellphone))) {
		alert("No cumple con el formato, por favor revisar");
		document.getElementById("cellphone").value = "";
	}
}

function validaCampos (){
	var c1 = document.getElementById("rut").value;
	var c2 = document.getElementById("name").value;
	var c3 = document.getElementById("lastname").value;
	var c4 = document.getElementById("email").value;
	var c5 = document.getElementById("phone").value;
	var c6 = document.getElementById("cellphone").value;
	var c7 = document.getElementById("npropiedad").value;
	var c8 = document.getElementById("user").value;
	var c9 = document.getElementById("pass").value;


	if (c1.length == 0 || c1 == null || c1 == "") {
		alert("debe ingresar un rut");
		return false;
	}else if(c2.length == 0 || c2 == null || c2 == ""){
		alert("debe ingresar un nombre");
		return false;
	}else if (c3.length == 0 || c3 == null || c3 == ""){
		alert("debe ingresar un apellido");
		return false;
	}else if (c4.length == 0 || c4 == null || c4 == ""){
		alert("debe ingresar un correo");
		return false;
	}else if (c5.length == 0 || c5 == null || c5 == ""){
		alert("debe ingresar un fono");
		return false;
	}else if (c6.length == 0 || c6 == null || c6 == ""){
		alert("debe ingresar un celular");
		return false;
	}else if (c7.length == 0 || c7 == null || c7 == ""){
		alert("debe ingresar un numero de propiedad");
		return false;
	}else if (c8.length == 0 || c8 == null || c8 == ""){
		alert("debe ingresar un nombre de usuario");
		return false;
	}else if (c9.length == 0 || c9 == null || c9 == ""){
		alert("debe ingresar una contraseña");
		return false;
	}
}