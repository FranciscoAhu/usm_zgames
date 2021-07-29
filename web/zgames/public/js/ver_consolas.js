const cargarMarcas = async ()=>{
    let filtroCbx = document.querySelector("#filtro-cbx");
    let marcas = await getMarcas();
    marcas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        option.value = m;
        filtroCbx.appendChild(option);
    })
}

const iniciarEliminacion = async function(){
    let id = this.idConsola;
    let resp = await Swal.fire({title:"Esta seguro?", text:"Esta operación es irreversible", icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarConsola(id)){
            let consolas = await getConsolas();
            cargarTabla(consolas);
            Swal.fire("Consola Eliminada", "Consola eliminada exitosamente", "info");
        }else{
            Swal.fire("Error","No se pudo atender la solicitud","error");
        }
    }else{
        Swal.fire("Cancelado","Cancelado a petición del usuario", "info");
    }
};

const cargarTabla = (consolas)=>{
    //1º Obtener una referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-consola");
    tbody.innerHTML = "";
    //2º Recorrer todas las consolas
    
    for(let i=0; i < consolas.length; ++i){
        //3º Por cada consola generar una fila
        let tr = document.createElement("tr");
        //4º Generar por cada atributo de la consola, un td
        let tdNombre = document.createElement("td");
        tdNombre.innerText= consolas[i].nombre;
        let tdMarca = document.createElement("td");
        tdMarca.innerText = consolas[i].marca;
        let tdAnio = document.createElement("td");
        tdAnio.innerText = consolas[i].anio;
        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText= "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idConsola = consolas[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonEliminar);
        //5º Agregar los td al tr
        tr.appendChild(tdNombre);
        tr.appendChild(tdMarca);
        tr.appendChild(tdAnio);
        tr.appendChild(tdAcciones);
        //6º Agregar el tr al cuerpo de la tabla 
        tbody.appendChild(tr);
    }
};
//El listener change sirve para cuando quieres ejecutar algo cuando el valor cambia
document.querySelector("#filtro-cbx").addEventListener("change", async ()=>{
    let filtro = document.querySelector("#filtro-cbx").value;
    let consolas = await getConsolas(filtro);
    cargarTabla(consolas);
});

document.addEventListener("DOMContentLoaded", async ()=>{
    //Aqui voy a cargar la tabla de consolas, porque si entra aqui
    //lo que haga en esta parte estoy seguro que se esta ejecutando
    //cuando la pagina esta totalmente cargada
    await cargarMarcas();
    let consolas = await getConsolas();
    cargarTabla(consolas);
});
