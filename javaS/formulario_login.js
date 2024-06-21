function validar() {
    var usuario, password;

    usuario = document.getElementById("usuario").value;
    password = document.getElementById("pass").value;

if( usuario === "" || password === "" ){
   alert("todos los campos son obligatorios");
   return false;
   }

else if(usuario.length>20){
    alert("El usuario es muy largo");
    return false;
}    

else if(password.length>15){
    alert("La contrasena es muy larga");
    return false;
}
}