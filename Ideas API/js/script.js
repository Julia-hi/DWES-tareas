"use strict"
let xmlHttp;

$(()=>{
    //crear el objeto
    xmlHttp=crearConexion();
  
    
    if (xmlHttp != undefined){
        //funcionalidad
       // mostrarMensaje();
      //  $("#boton").on("click" ,mostrarMensaje);
      $("#listar").on("click", listar);
    }else{
        Swal.fire("El navegador no soporta AJAX. Debe actualizar el navegador");
    }
})

// let mostrarMensaje=()=>{
//     //preparar el objeto xmlHttp
//     xmlHttp.open("GET", "Ayuda.php", true);
//     xmlHttp.onreadystatechange=()=>{
//        if (xmlHttp.readyState==4 && xmlHttp.status==200) {
//            $("#mensaje").text(xmlHttp.responseText);
//        }
//     };

//     xmlHttp.send(); //comienza la petición de respuesta al servidor

// }

//  let listar=()=>{
//     xmlHttp.open ("GET", "http://localhost/ideas/listar.php", true);
//     console.log("estoy aqui");
//     xmlHttp.open ("POST", "http://localhost/ideas/index.php?listar", true);
//     xmlHttp.send();
//  }

let listar=()=>{
    xmlHttp.open ("GET", "http://localhost/ideas/listar.php", true);
    xmlHttp.onreadystatechange=()=>{
        if (xmlHttp.readyState == 4 && xmlHttp.status==200){ //comunicación ok
          //volcar la información a la tabla
          let datos=JSON.parse(xmlHttp.responseText);
          console.log(datos);
       
  
      }
   };
    xmlHttp.send();
}