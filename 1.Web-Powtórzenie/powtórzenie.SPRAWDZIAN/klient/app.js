console.log(localhost)

async function getProducts(){
    const data = await fetch("http://localhost:3000/database/get")
    const json = await data.json()
    console.log(json)


    document.getElementById("content").innerHTML = ""

    const div = document.createElement("div")

    for (var i = 0; i <= json.length - 1; i++) {

        const div = document.createElement("div")
        div.classList.add("produkt")

        const nazwa = document.createElement("h1")
        nazwa.innerHTML = json[i].name

        const cena = document.createElement("h1")
        cena.innerHTML = json[i].price

        div.appendChild(nazwa)
        div.appendChild(cena)

        document.getElementById("content").appendChild(div)

}
}

async function productsMIN(){

    const dataMIN = await fetch("http://localhost:3000/database/min")
    const jsonMIN = await dataMIN.json()
    console.log(jsonMIN)

    document.getElementById("content").innerHTML = ""

    const div = document.createElement("div")

    for (var i = 0; i <= jsonMIN.length - 1; i++) {

        const div = document.createElement("div")
        div.classList.add("produkt")

        const nazwa = document.createElement("h1")
        nazwa.innerHTML = jsonMIN[i].name

        const cena = document.createElement("h1")
        cena.innerHTML = jsonMIN[i].price

        div.appendChild(nazwa)
        div.appendChild(cena)

        document.getElementById("content").appendChild(div)

}
}

async function productsMAX(){

    const dataMAX = await fetch("http://localhost:3000/database/MAX")
    const jsonMAX = await dataMAX.json()
    console.log(jsonMAX)


    document.getElementById("content").innerHTML = ""

    const div = document.createElement("div")

    for (var i = 0; i <= jsonMAX.length - 1; i++) {

        const div = document.createElement("div")
        div.classList.add("produkt")

        const nazwa = document.createElement("h1")
        nazwa.innerHTML = jsonMAX[i].name

        const cena = document.createElement("h1")
        cena.innerHTML = jsonMAX[i].price

        div.appendChild(nazwa)
        div.appendChild(cena)

        document.getElementById("content").appendChild(div)
    }
}


async function sendProduct(){
    const name = document.getElementById("nazwa").value
    const price = document.getElementById("cena").value
    
    const url = `http://localhost:3000/database/add/${name}/${price}`
    
    await fetch(url)
    
    console.log(name + price)
}
