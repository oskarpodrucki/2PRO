var json = []

async function getData(){
    const data = await fetch("https://192.168.15.10/wordpressOSKAR/wp-json/wc/v3/products")
    const json = await data.json()
    console.log(json)

    for (let i in json) {

        const div = document.createElement("div");
        div.setAttribute("class", "produkt");
        div.setAttribute("name", i);

        const div_name = document.createElement("div");
        div_name.setAttribute("class", "post");
        div_name.innerHTML = "zxc"

        const div_price = document.createElement("div");
        div_price.setAttribute("class", "komentator");
        div_price.innerHTML = "zxc"

        const div_minus = document.createElement("button");
        div_minus.setAttribute("class", "tresc");
        div_minus.innerHTML = "zxc"

        const div_plus = document.createElement("button");
        div_plus.setAttribute("class", "tresc");
        div_plus.innerHTML = "zxc"

        const div_approve = document.createElement("button");
        div_approve.setAttribute("class", "tresc");
        div_approve.innerHTML = "zxc"

        div.appendChild(div_name);
        div.appendChild(div_price);
        div.appendChild(div_minus);
        div.appendChild(div_plus);
        div.appendChild(div_approve);

        document.getElementById("container").appendChild(div);
    }
}


 
getData();