function validar() {
    var app, apm, nombre, calle, num, col, municipio, estado, cp, tel, correo, usuario, password, passwordC, expresion;
    
    app = document.getElementById("app").value;
    apm = document.getElementById("apm").value;
    nombre = document.getElementById("nombre").value;
    calle = document.getElementById("calle").value;
    num = document.getElementById("num").value;
    col = document.getElementById("colonia").value;
    municipio = document.getElementById("municipio").value;
    estado = document.getElementById("estado").value;
    cp = document.getElementById("postal").value;
    tel = document.getElementById("tel").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    password = document.getElementById("pass").value;
    passwordC = document.getElementById("passC").value;
    expresion = /\w+@\w+\.+[a-z]/;
//    fecha = document.getElementById("fechaN").value;
//    genero = document.getElementById("genero").value;

if( app === "" || apm === "" || nombre === "" || calle === "" || num === "" || col === "" || municipio === "" || estado === "" || cp === "" || tel === "" || correo === "" || usuario === "" || password === "" || passwordC === ""){
   alert("Todos los campos son obligatorios");
   return false;
   }

else if(app.length>15){
   alert("El Apellido paterno es muy largo");
    return false;
   }
    
else if(apm.length>15){
   alert("El Apellido materno es muy largo");
    return false;
   }
    
else if(nombre.length>30){
   alert("El nombre es muy largo");
    return false;
   }
    
else if(calle.length>30){
    alert("La calle es demasiado larga");
    return false;
   }
    
else if(isNaN(num)){
   alert("El numero ingresado no es un numero");
    return false;
   }
    
else if(num.length>5){
    alert("El numero es demasiado largo");
    return false;
   }
    
else if(col.length>30){
    alert("La colonia es demasiado larga");
    return false;
   }
    
else if(isNaN(cp)){
   alert("El codigo postal ingresado no es un numero");
    return false;
   }
    
else if(cp.length>10){
    alert("El codigo postal es demasiado largo");
    return false;
   }
    
else if(isNaN(tel)){
   alert("El telefono ingresado no es un numero");
    return false;
   }
    
else if(tel.length>10){
    alert("El telefono es demasiado largo");
    return false;
   }
    
else if(!expresion.test(correo)){
   alert("El correo no es valido");
    return false;
   }
    
else if(correo.length>100){
    alert("El Correo es demasiado largo");
    return false;
   }
    
else if(usuario.length>20){
    alert("El usuario es demasiado largo");
    return false;
   }
    
else if(password.length>15){
    alert("La contrasena es demasiado larga");
    return false;
   }
    
else if(passwordC !== password){
    alert("La contrasena no es igual");
    return false;
   }
}
