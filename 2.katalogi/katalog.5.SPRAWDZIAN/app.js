var json = []

//http://localhost/wordpressOSKAR/wp-json/wc/v3/orders
async function getDATA() {

    const data = await fetch("http://localhost/wordpressOSKAR/wp-json/wc/v3/orders", ({
        method: "GET",
        headers: {
            "content-type": `application/json`,
            "Authorization": `BASIC ${btoa('oskar:OsK13579.')}` 
        }    
    }))
const json = await data.json()
console.log(json)

for (let i in json) {

    const div = document.createElement("div")
    div.setAttribute("class", "productDiv")


    const div_who = document.createElement("h1")
    div_who.setAttribute("class", "H1")
    div_who.innerHTML = json[i].billing.first_name

    const div_what = document.createElement("h1")
    div_what.setAttribute("class", "H1")
    div_what.innerHTML = json[i].customer_id

    const div_how_much = document.createElement("h1")
    div_how_much.setAttribute("class", "H1")
    div_how_much.innerHTML = json[i].id

    const div_status = document.createElement("h1")
    div_status.setAttribute("class", "H1")
    div_status.innerHTML = json[i].status

    const div_status_yes = document.createElement("button")
    div_status_yes.setAttribute("class", "statusButton")
    div_status_yes.innerHTML = "Zrealizowane"
    div_status_yes.addEventListener("click", ()=> {
        changeStatus(json[i].id, "completed")
        document.location.reload()
    })

    const div_status_no = document.createElement("button")
    div_status_no.setAttribute("class", "statusButton")
    div_status_no.innerHTML = "Nie zrealizowane"
    div_status_no.addEventListener("click", ()=> {
        changeStatus(json[i].id, "processing")
        document.location.reload()
    })

    div.appendChild(div_who)
    div.appendChild(div_what)
    div.appendChild(div_how_much)
    div.appendChild(div_status)
    div.appendChild(div_status_yes)
    div.appendChild(div_status_no)

    document.getElementById("content").appendChild(div)
}

}

getDATA();

async function addOrder(){

    const who = document.getElementById("who").value

    const url = new URL(`http://localhost/wordpressOSKAR/wp-json/wc/v3/orders`)

    const params = {
        "billing.first_name": who
    }

    for(let i in params){
        url.searchParams.append(i, params[i])
    }

    console.log(url)

    const data = await fetch(url,{
        method: "POST",
        headers: {
            authorization: `Basic ${btoa("oskar:OsK13579.")}`

        }
    })

}


async function changeStatus(id, status){

    const url = new URL(`http://localhost/wordpressOSKAR/wp-json/wc/v3/orders/${id}`)

    const params = {
        status: status
    }

    for(let i in params){
        url.searchParams.append(i, params[i])
    }

    console.log(url)

    const data = await fetch(url,{
        method: "POST",
        headers: {
            authorization: `Basic ${btoa("oskar:OsK13579.")}`

        }
    })

}

