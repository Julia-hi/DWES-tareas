"use strict"
let xmlHttp;

$(()=>{
    //crear el objeto
    xmlHttp=crearConexion();
  
    
    if (xmlHttp != undefined){
      $("#insertar").on("click", mostrarForm);
    }else{
        alert("El navegador no soporta AJAX. Debe actualizar el navegador");
    }
})

let mostrarForm=()=>{
    $('.result').remove(); 
    $("#insert-campo").prop('hidden', false)
}