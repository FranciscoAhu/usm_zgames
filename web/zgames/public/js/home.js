const cargarMarcas = async()=>{
    
    let marcas = await getMarcas();
    
    let marcaSelect = document.querySelector("#marca-select");
    marcas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        marcaSelect.appendChild(option);
    })
};

document.addEventListener("DOMContentLoaded", ()=>{    
    cargarMarcas();
});

document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let marca = document.querySelector("#marca-select").value.trim();
    let anio = document.querySelector("#anio-txt").value.trim();

    let errores = [];
    if(nombre === ""){
        errores.push("Debe ingresar un nombre");
    }else{
        let consolas = await getConsolas();
        let consolaEncontrada = consolas.find(c=>c.nombre.toLowerCase() === nombre.toLowerCase());
        if(consolaEncontrada != undefined){
            errores.push("La consola ya existe");
        }
    }
    
    if(isNaN(anio)){
        errores.push("El año debe ser numérico");
    }else if(+anio < 1958){
        errores.push("El año es incorrecto");
    }

    if(errores.length == 0){
        let consola = {};
        consola.nombre = nombre;
        consola.marca = marca;
        consola.anio = anio;
    
        let res = await crearConsola(consola);
        await Swal.fire("Consola creada", "Consola creada exitosamente", "info");
        //la linea que viene después del SwalFire se va a ejecutar después de que le usuario aprete el ok
        //Redirigir a otra página
        window.location.href = "ver_consolas";
        //abrir nueva pestaña
        //window.open("www.google.cl","_blank");
    }else{
        Swal.fire({
            title: "Errores de validación",
            icon: "warning",
            html: errores.join("<br />")
        })
    }

});