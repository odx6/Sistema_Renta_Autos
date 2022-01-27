jQuery(document).ready(function () {
	
 var name=jQuery('input:text[name=NOMR]').val();
 //validar nombre
 //juery("#name").focus();
 	jQuery("#name").on("maoseenter focusout",function(){
 		
 		if(jQuery('input:text[name=NOMR]').val()=="" || cambiarNombre(jQuery('input:text[name=NOMR]').val())==false){
 				jQuery("#name").focus();
 				jQuery("#SpanNombre").text('Error al ingresar campo asegurate que sea un nombre(s) validos  ');
 				jQuery("#Conteiner_Name").css("border-color","red");
 				jQuery("#name").css("border-color","red");
 				jQuery("#Icon").removeClass('form_incorrect');
 				jQuery("#Icon").addClass("fas fa-exclamation-triangle");
 				jQuery("#Icon").css("color", "red");

 				
 		}else{
 			jQuery("#Apellidos").focus();
 			jQuery("#SpanNombre").text('');
 				jQuery("#Conteiner_Name").css("border-color","green");
 				jQuery("#name").css("border-color","green");
 				jQuery("#Icon").removeClass('fas fa-exclamation-triangle');
 				jQuery("#Icon").addClass("fas fa-check-circle");
 				jQuery("#Icon").css("color", "green");
 		}
 		//jQuery("#name").focus();
 	})

  // validar apellidos
jQuery("#Apellidos").on("maoseenter focusout",function(){
 		
 		if(jQuery('input:text[name=APR]').val()=="" || cambiarNombre(jQuery('input:text[name=APR]').val())==false){
 			jQuery("#Apellidos").focus();
 			jQuery("#SpanAP").text('Error al ingresar campo asegurate que sea un Apellido(s) validos  ');
 				jQuery("#Conteiner_AP").css("border-color","red");
 				jQuery("#Apellidos").css("border-color","red");
 				jQuery("#Icon1").removeClass('form_incorrect');
 				jQuery("#Icon1").addClass("fas fa-exclamation-triangle");
 				jQuery("#Icon1").css("color", "red");
 		}else{
 			jQuery("#curp").focus();
 			jQuery("#SpanAP").text('');
 				jQuery("#Conteiner_AP").css("border-color","green");
 				jQuery("#Apellidos").css("border-color","gren");
 				jQuery("#Icon1").removeClass('fas fa-exclamation-triangle');
 				jQuery("#Icon1").addClass("fas fa-check-circle");
 				jQuery("#Icon1").css("color", "green");

 		}
 	})
 
// VALIDAR CURP Y EDAD 
jQuery("#curp").on("maoseenter focusout",function(){
 		
 		if(jQuery('input:text[name=CUR]').val()=="" || validateCurp(jQuery('input:text[name=CUR]').val())==false || edad(jQuery('input:text[name=CUR]').val())==false){
 			//jQuery("#curp").val('');
 			jQuery("#curp").focus();
 			jQuery("#SpanCurp").text('Error al ingresar campo asegurate que sea una curp valida ');
 				jQuery("#Conteiner_CP").css("border-color","red");
 				jQuery("#curp").css("border-color","red");
 				jQuery("#Icon2").removeClass('form_incorrect');
 				jQuery("#Icon2").addClass("fas fa-exclamation-triangle");
 				jQuery("#Icon2").css("color", "red");
 				
 		
 		}else{
			jQuery("#direction").focus();
			jQuery("#SpanCurp").text('');
 				jQuery("#Conteiner_CP").css("border-color","green");
 				jQuery("#curp").css("border-color","green");
 				jQuery("#Icon2").removeClass('fas fa-exclamation-triangle');
 				jQuery("#Icon2").addClass("fas fa-check-circle");
 				jQuery("#Icon2").css("color", "green");
 				
 		}
 	})
//validar que curp no este registrado
jQuery("#curp").on("maoseenter focusout",function(){
	
	var DNI =jQuery("#curp").val();
	jQuery.ajax({
		type:"POST",
		url:"servicios/validateBDCurp.php",
		data:('DNI='+DNI),
		success: function(respuesta){

		 
		 if(respuesta=='La curp ya se encuentra registrada'){
		 	jQuery("#curp").val('');
 			jQuery("#curp").focus();
 			jQuery("#SpanCurp").text('La :'+DNI+' CURP se encuentra registrada en el sistema');
 				jQuery("#Conteiner_CP").css("border-color","red");
 				jQuery("#curp").css("border-color","red");
 				jQuery("#Icon2").removeClass('form_incorrect');
 				jQuery("#Icon2").addClass("fas fa-exclamation-triangle");
 				jQuery("#Icon2").css("color", "red");
 				

		 }else{
		 	jQuery("#direction").focus();
		 	jQuery("#SpanCurp").text('');
 				jQuery("#Conteiner_CP").css("border-color","green");
 				jQuery("#curp").css("border-color","green");
 				jQuery("#Icon2").removeClass('fas fa-exclamation-triangle');
 				jQuery("#Icon2").addClass("fas fa-check-circle");
 				jQuery("#Icon2").css("color", "green");


		 }
	}
	})
})
// validate direccion 
jQuery("#direction").on("maoseenter focusout",function(){
 		if(jQuery('input:text[name=DIR]').val()=="" || direction(jQuery('input:text[name=DIR]').val())==false ){
 			jQuery("#direction").focus();
 			jQuery("#SpanDC").text('la direccion no es valida');
 				jQuery("#Conteiner_DR").css("border-color","red");
 				jQuery("#direction").css("border-color","red");
 				jQuery("#Icon3").removeClass('form_incorrect');
 				jQuery("#Icon3").addClass("fas fa-exclamation-triangle");
 				jQuery("#Icon3").css("color", "red");

 		}else{
 			jQuery("#phone").focus();
 			jQuery("#SpanDC").text('');
 				jQuery("#Conteiner_DR").css("border-color","green");
 				jQuery("#direction").css("border-color","green");
 				jQuery("#Icon3").removeClass('fas fa-exclamation-triangle');
 				jQuery("#Icon3").addClass("fas fa-check-circle");
 				jQuery("#Icon3").css("color", "green");
 		}
 	})
jQuery("#phone").on("maoseenter focusout",function(){
 		
 		if(jQuery('input:text[name=TER]').val()=="" || phone(jQuery('input:text[name=TER]').val())==false ){
 			jQuery("#phone").focus();
 			jQuery("#SpanTE").text('El telefono no es valido ejemplo:951-566-1514');
 				jQuery("#Conteiner_TE").css("border-color","red");
 				jQuery("#phone").css("border-color","red");
 				jQuery("#Icon4").removeClass('form_incorrect');
 				jQuery("#Icon4").addClass("fas fa-exclamation-triangle");
 				jQuery("#Icon4").css("color", "red");
 		}else{
 			jQuery("#correo").focus();
 			jQuery("#SpanTE").text('');
 				jQuery("#Conteiner_TE").css("border-color","green");
 				jQuery("#phone").css("border-color","green");
 				jQuery("#Icon4").removeClass('fas fa-exclamation-triangle');
 				jQuery("#Icon4").addClass("fas fa-check-circle");
 				jQuery("#Icon4").css("color", "green");
 		}
 	})


// validate email
jQuery("#correo").on("maoseenter focusout",function(){
 		
 		if(jQuery('input:text[name=CORREOR]').val()=="" || validateEmail(jQuery('input:text[name=CORREOR]').val())==false ){
 			jQuery("#correo").focus();
 			jQuery("#SpanCO").text('El correo no es valido ');
 				jQuery("#Conteiner_CO").css("border-color","red");
 				jQuery("#correo").css("border-color","red");
 				jQuery("#Icon5").removeClass('form_incorrect');
 				jQuery("#Icon5").addClass("fas fa-exclamation-triangle");
 				jQuery("#Icon5").css("color", "red");

 		}else{
 			jQuery("#password").focus();
 			jQuery("#SpanCO").text('');
 				jQuery("#Conteiner_CO").css("border-color","green");
 				jQuery("#correo").css("border-color","green");
 				jQuery("#Icon5").removeClass('fas fa-exclamation-triangle');
 				jQuery("#Icon5").addClass("fas fa-check-circle");
 				jQuery("#Icon5").css("color", "green");
 		}
 	})

jQuery("#correo").on("maoseenter focusout",function(){
	var CORREO =jQuery("#correo").val();
	jQuery.ajax({
		type:"POST",
		url:"servicios/validateEmail.php",
		data:('CORREO='+CORREO),
		success: function(respuesta){

		 
		 if(respuesta=='EL correo ya se encuentra registrado !'){
		 	jQuery("#correo").val('');
 			jQuery("#correo").focus();
 			jQuery("#SpanCO").text('El correo :'+CORREO+' ya se encuentra registrado');
 				jQuery("#Conteiner_CO").css("border-color","red");
 				jQuery("#correo").css("border-color","red");
 				jQuery("#Icon5").removeClass('form_incorrect');
 				jQuery("#Icon5").addClass("fas fa-exclamation-triangle");
 				jQuery("#Icon5").css("color", "red");
		 }else{

 			jQuery("#password").focus();
 			jQuery("#SpanCO").text('');
 				jQuery("#Conteiner_CO").css("border-color","green");
 				jQuery("#correo").css("border-color","green");
 				jQuery("#Icon5").removeClass('fas fa-exclamation-triangle');
 				jQuery("#Icon5").addClass("fas fa-check-circle");
 				jQuery("#Icon5").css("color", "green");

		 }
	}
	})
})

// validate password
jQuery("#password").on("maoseenter focusout",function(){
 		
 		if(jQuery('input:password[name=CONTRASEÑAR]').val()=="" || password(jQuery('input:password[name=CONTRASEÑAR]').val())==false ){
  			
 			
 			jQuery("#password").focus();
 			jQuery("#SpanPS").text('La contraseña no es valida ');
 				jQuery("#Conteiner_PS").css("border-color","red");
 				jQuery("#password").css("border-color","red");
 				jQuery("#Icon6").removeClass('form_incorrect');
 				jQuery("#Icon6").addClass("fas fa-exclamation-triangle");
 				jQuery("#Icon6").css("color", "red");
 		
 		}else{
 			jQuery("#password2").focus();
 			jQuery("#SpanPS").text('');
 				jQuery("#Conteiner_PS").css("border-color","green");
 				jQuery("#password").css("border-color","green");
 				jQuery("#Icon6").removeClass('fas fa-exclamation-triangle');
 				jQuery("#Icon6").addClass("fas fa-check-circle");
 				jQuery("#Icon6").css("color", "green");
 			
 		}
 	})
//validate pasword 2 

jQuery("#password2").on("maoseenter focusout",function(){
 		
 		if(jQuery('input:password[name=CONTRASEÑA2R]').val()=="" || password(jQuery('input:password[name=CONTRASEÑA2R]').val())==false || jQuery('input:password[name=CONTRASEÑAR]').val()!= jQuery('input:password[name=CONTRASEÑA2R]').val()){
  			jQuery("#password").val('');
  			jQuery("#password2").val('');
  			jQuery("#SpanPS2").text('Las contraseñas no coiciden ');
 				jQuery("#Conteiner_PS2").css("border-color","red");
 				jQuery("#password2").css("border-color","red");
 				jQuery("#Icon7").removeClass('form_incorrect');
 				jQuery("#Icon7").addClass("fas fa-exclamation-triangle");
 				jQuery("#Icon7").css("color", "red");
 			jQuery("#password").focus();
 		
 		}else{
 			jQuery("#SpanPS2").text('');
 				jQuery("#Conteiner_PS2").css("border-color","green");
 				jQuery("#password2").css("border-color","green");
 				jQuery("#Icon7").removeClass('fas fa-exclamation-triangle');
 				jQuery("#Icon7").addClass("fas fa-check-circle");
 				jQuery("#Icon7").css("color", "green");

 		}
 	})
});


/*a) La contraseña debe contener 8 caracteres especiales o más.
b) Debe de contener al menos 1 letra minúscula.
c) La contraseña debe contener  al menos 1 letra mayúscula.
d) Tiene que  tener al menos 1 número en su estructura.
ejemplo 12acbAB@*/
function password(password){
  let regex =/^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$/gm;
 
return regex.test(password);

}

function cambiarNombre(nombre){
  
 let regex = /^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/gmi;
return regex.test(nombre);

}
function validateCurp(curp){

 let regex = /^[A-Z]{1}([AEIOU]{1})([A-Z]{2})([0-9]{2})(0[1-9]{1}|1[0-2]{1})([0-2]{1}[1-9]{1}|3(0|1))([HM]{1})(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)([B-DF-HJ-NP-TV-Z]{3})([0-9A-Z]{1})([0-9]{1}$)/;
return regex.test(curp);

}

//function validate age
function edad(valor){
    if(valor.length==18){
    var year; 
    	 console.log(valor.substring(4, 6));
        var birth =parseInt(valor.substring(4, 6));

        if((valor.substring(4, 6)).startsWith('0')){year=(new Date().getYear()-100)-birth; }
        else{year=new Date().getYear()-birth;}

       // EXTRAE EL AÑO ACTUAl
        console.log(year);
        if(year>=18 && year<=60){
         
          return true;
        }

        
    }
    return false;
    }
    // validate phone
// validate 
function phone(nombre){
  
 let regex =/^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
return regex.test(nombre);

}
function validateEmail(email){
  
 let regex =/^[\w]+@{1}[\w]+\.[a-z]{2,3}$/;
return regex.test(email);

}
function direction(nombre){
  
 let regex = /^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/gmi;
return regex.test(nombre);

}