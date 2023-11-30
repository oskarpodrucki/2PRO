// endpoint generujący wszystkie kontynety na serwerze

async function createCheckBoxes(){

    const data = await fetch(baseurl + "/aplikacja/kontynenty")
    const json = await data.json()
    console.log(json)

    // document.getElementById("todo").innerHTML = ""

    // const div = document.createElement("div")

    // for (var i = 0; i <= json.length - 1; i++) {

    //     const div = document.createElement("div")
    //     div.classList.add("tododiv")
    //     div.setAttribute("id", i)

    //     const nazwa = document.createElement("h1")
    //     nazwa.innerHTML = json[i].name

    //     const czas = document.createElement("h1")
    //     czas.innerHTML = "Dni do końca: " + json[i].days

    //     const done = document.createElement("button")
    //     done.setAttribute("id", "button1")
    //     done.setAttribute("onclick", "changedone()")


    //     div.appendChild(nazwa)
    //     div.appendChild(czas)
    //     div.appendChild(done)

    //     if (json[i].done == true) {
    //         div.classList.add("done")
    //     } else {
    //         div.classList.add("notdone")
    //     }

    //     document.getElementById("todo").appendChild(div)
    // }
}

async function maxPopulation() {
    const dataP = await fetch(baseurl + "/aplikacja/populacja");
    const jsonP = await dataP.json();
    console.log(jsonP);

    // Znajdź maksymalną wartość w tablicy obiektów JSON
    const maxpop = jsonP.reduce((max, current) => Math.max(max, current.population), 0);
    console.log(maxpop);

    document.getElementById("temp").max = maxpop
}


const value = document.querySelector("#value");
const input = document.querySelector("#temp");
value.textContent = input.value
input.addEventListener("input", (event) => {
  value.textContent = event.target.value;
});
