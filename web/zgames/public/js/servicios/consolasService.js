//tiene las operaciones tipicas para comunicarse con el controlador

//getConsolas
const getConsolas = async (filtro="todos") =>{
    if(filtro=="todos"){
        resp = await axios.get("api/consolas/get")
    }else{
        resp = await axios.get(`api/consolas/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};
//crearConsola

const crearConsola = async(consola)=>{//arrow functions

    //Estructura de petición post al servidor con axios
    let resp = await axios.post("api/consolas/post", consola, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};

const eliminarConsola = async(id)=>{
    try{
        let resp = await axios.post("api/consolas/delete",{id},{
            headers:{
                "Content-Type": "application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
}