
function loginvalidation (){
    let user = document.getElementById("email");
    let clave = document.getElementById("password");
    let btn = document.getElementById("ingresar");    
    
        if (user.value === '' || clave.value === ''){
            alert("Todos los campos son Obligatorios")
            
        }
        else (
            alert("Bienvenido")
        )          
}

/*var checkbox = document.getElementById('perfil');
checkbox.addEventListener( 'change', function() {
    if(this.checked) {
       alert('checkbox esta seleccionado');
    }
});*/

let Checked = null;

function uncheck(){
    let checkbox1 = document.getElementById("perfil1");
    let checkbox2 = document.getElementById("perfil2");
    checkbox1.onclick = function(){
    if(checkbox1.checked != false){
       checkbox2.checked =null;
    }
}
checkbox2.onclick = function(){
    if(checkbox2.checked != false){
        checkbox1.checked=null;
    }
  }
}

function registervalidation(){   

    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let clave1 = document.getElementById("password1");
    let clave2 = document.getElementById("password2");
    let pais = document.getElementById("country");
    let ciudad = document.getElementById("city");
    let perfil = document.getElementById("perfil");
    

    if (name.value === '' || email.value === '' || clave1.value === '' || clave2.value === '' || pais.value === '' || ciudad.value === '' || perfil.value=== ''){
        alert ("Todos los Campos son Obligatorios")
    }
    else (
        alert("Bienvenido a la Pagina")
    )
}