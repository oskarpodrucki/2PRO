async function getDATA() {
    const data = await fetch("http://localhost:3000/database/get")
    const json = await data.json()
    console.log(json)

    document.getElementById("content1").innerHTML = ""

    for (i = 0; i < json.length; i++) {

        const div = document.createElement("div")
        div.setAttribute("id", "box" + i)

        const name = document.createElement("h1")
        name.setAttribute("id", "name" + i)
        name.innerHTML = json[i].name

        const how_much = document.createElement("h1")
        how_much.setAttribute("id", "how_much" + i)
        how_much.innerHTML = json[i].how_much

        document.getElementById("content1").appendChild(div)
        document.getElementById("box" + i).appendChild(name)
        document.getElementById("box" + i).appendChild(how_much)

    }

}

async function filtrMIN() {
    const dataMIN = await fetch("http://localhost:3000/database/min")
    const jsonMIN = await dataMIN.json()
    console.log(jsonMIN)

    document.getElementById("content1").innerHTML = ""

    for (i = 0; i < jsonMIN.length; i++) {

        const divMIN = document.createElement("div")
        divMIN.setAttribute("id", "box" + i)

        const nameMIN = document.createElement("h1")
        nameMIN.setAttribute("id", "name" + i)
        nameMIN.innerHTML = jsonMIN[i].name

        const how_muchMIN = document.createElement("h1")
        how_muchMIN.setAttribute("id", "how_much" + i)
        how_muchMIN.innerHTML = jsonMIN[i].how_much

        document.getElementById("content1").appendChild(divMIN)
        document.getElementById("box" + i).appendChild(nameMIN)
        document.getElementById("box" + i).appendChild(how_muchMIN)

    }

}

async function filtrMAX() {
    const dataMAX = await fetch("http://localhost:3000/database/max")
    const jsonMAX = await dataMAX.json()
    console.log(jsonMAX)

    document.getElementById("content1").innerHTML = ""

    for (i = 0; i < jsonMAX.length; i++) {

        const divMAX = document.createElement("div")
        divMAX.setAttribute("id", "box" + i)

        const nameMAX = document.createElement("h1")
        nameMAX.setAttribute("id", "name" + i)
        nameMAX.innerHTML = jsonMAX[i].name

        const how_muchMAX = document.createElement("h1")
        how_muchMAX.setAttribute("id", "how_much" + i)
        how_muchMAX.innerHTML = jsonMAX[i].how_much

        document.getElementById("content1").appendChild(divMAX)
        document.getElementById("box" + i).appendChild(nameMAX)
        document.getElementById("box" + i).appendChild(how_muchMAX)

    }

}


function itemSend() {

    var name = document.getElementById("name").value
    var how_much = document.getElementById("how_much").value

    console.log(name)
    console.log(how_much)

    fetch(`http://localhost:3000/database/add/${name}/${how_much}`)

}

