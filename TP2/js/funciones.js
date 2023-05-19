const aux = document.getElementById("idCh")
const aux1 = document.getElementById("idCh2")
function getCharacters() {
    fetch('https://rickandmortyapi.com/api/character/')
        .then(function (response) {
            return response.json()
        }
        )
        .then(function (data) {
            if (aux.value > data.info.count || aux1.value > data.info.count) {
                alert("Usted esta ingresando un id mayor al maximo de personajes.")
            }
        })
    fetch("https://rickandmortyapi.com/api/character/" + aux.value + "," + aux1.value)
        .then(function (response) {
            return response.json()
        })
        .then(function (data) {
            //mostrar los atributos del Ch con un "li"
            let element = document.getElementById("resultado")
            element.innerHTML = `
            <li><label>Nombre:${data[0].name}</label></li>
            <li><label>Estado:${data[0].status}</label></li>
            <li><label>Especie:${data[0].species}</label></li>
            <li><label>Localidad:${data[0].location.name}</label></li>
            <img src=${data[0].image}>

            <li><label>Nombre:${data[1].name}</label></li>
            <li><label>Estado:${data[1].status}</label></li>
            <li><label>Especie:${data[1].species}</label></li>
            <li><label>Localidad:${data[1].location.name}</label></li>
            <img src=${data[1].image}> 
            `
        })
        .catch(function (error) {
            console.error("Error", error)
        })
}