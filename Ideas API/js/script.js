"use strict"
let xmlHttp;


$(()=>{
    //crear el objeto
    xmlHttp=crearConexion();
    
    
    if (xmlHttp != undefined){
        
        // if (data.redirect) {
        //     // data.redirect contains the string URL to redirect to
        //     window.location.replace(data.redirect);
        //   }
      $("#insertar").on("click", mostrarForm);
      $(".opcion").on("click", limpiarResult);
      $("#inicio").on("click", mostrarInicio, limpiarResult);
    }else{
        alert("El navegador no soporta AJAX. Debe actualizar el navegador");
    }
})

let mostrarForm=()=>{
    $('.result').remove(); 
    $("#insert-campo").prop('hidden', false);
    
}

let limpiarResult=()=>{
    $('.result').remove(); 
    $("#insert-campo").prop('hidden', true)
    
   
}

let mostrarInicio=()=>{
    
    window.location.replace("http://localhost/ideas/index.php");
    $('.result').remove(); 
}

