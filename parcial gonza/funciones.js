function getMunicipios() {
    fetch("datosCensales.json")
        .then(function (response) {
            return response.json()
        })
        .then(function (data) {

            const loc = "localidades-censales"

            let idM = document.getElementById("idMuni").value
            let idP = document.getElementById("idProv").value
            let resul = document.getElementById("resultado")
            let resulR = document.getElementById("resulError")
            let respuestaV = document.getElementById("respuestaVacia")
            let respuesta = false

            console.log(data[loc])

            console.log("El id del municipio es:", idM)
            console.log("El id de la provincia es:", idP)

            data[loc].forEach(function (element) {
                let auxIdM = element.municipio.id
                let auxIdP = element.provincia.id

                if ((auxIdM === idM) & (auxIdP === idP)) {
                    if (element.municipio.nombre !== null) {
                        respuesta = true
                        resul.innerHTML = `
                            <li><label>Provincia: ${element.provincia.nombre}</label></li>
                            <li><label>Municipio: ${element.municipio.nombre}</label></li>
                            <li><label>Latitud: ${element.centroide.lat}</label></li>
                            <li><label>Longitud: ${element.centroide.lon}</label></li>
                            `
                    }
                    else {
                        resul.innerHTML = `
                            <li><label>Provincia: ${element.provincia.nombre}</label></li>
                            <li><label>Municipio: ${element.departamento.nombre}</label></li>
                            <li><label>Latitud: ${element.centroide.lat}</label></li>
                            <li><label>Longitud: ${element.centroide.lon}</label></li>
                            `
                    }
                }
                else {
                    if (auxIdP === idP) {
                        respuesta = true
                        resulR.innerHTML = `
                        <p>Se muestra solamente el nombre de la provincia debido a que el id del Municipio es erroneo</p>
                        <li><label>Provincia: ${element.provincia.nombre}</label></li>
                        `
                    }
                }
                if (respuesta !== true) {
                    respuestaV.innerHTML = `
                    Los datos no son exactos
                    `
                }

            })
        })
}
