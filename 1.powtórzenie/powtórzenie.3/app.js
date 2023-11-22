var json = [];

async function getCountries() {
    const data = await fetch("https://restcountries.com/v2/all");
    json = await data.json();

    displayCountries(json);
}

function displayCountries(countries) {
    const xpp = document.getElementById("xpp");
    xpp.innerHTML = "";

    for (let i = 0; i < countries.length; i++) {
        const div_blok = document.createElement("div");
        const div_flaga = document.createElement("div");
        const flaga = document.createElement("img");
        flaga.classList.add("main_flaga");
        flaga.setAttribute("src", countries[i].flag);

        const div_nazwa = document.createElement("div");
        div_nazwa.innerText = countries[i].name;

        const div_stolica = document.createElement("div");
        div_stolica.innerText = countries[i].capital;

        const div_populacja = document.createElement("div");
        div_populacja.innerText = countries[i].population;

        div_blok.classList.add("blok");
        div_flaga.classList.add("flaga");
        div_nazwa.classList.add("nazwa");
        div_stolica.classList.add("stolica");
        div_populacja.classList.add("populacja");

        div_blok.setAttribute("id", i);

        div_blok.appendChild(div_flaga);
        div_blok.appendChild(div_nazwa);
        div_blok.appendChild(div_stolica);
        div_blok.appendChild(div_populacja);

        div_flaga.appendChild(flaga);

        xpp.appendChild(div_blok);
    }
}

function filterCountries() {
    const europeCheckbox = document.getElementById("EuropeCheckbox");
    const asiaCheckbox = document.getElementById("AsiaCheckbox");
    const africaCheckbox = document.getElementById("AfricaCheckbox");
    const americasCheckbox = document.getElementById("AmericasCheckbox");
    const oceaniaCheckbox = document.getElementById("OceaniaCheckbox");

    const selectedContinents = [];

    if (europeCheckbox.checked) {
        selectedContinents.push("Europe");
    }
    if (asiaCheckbox.checked) {
        selectedContinents.push("Asia");
    }
    if (africaCheckbox.checked) {
        selectedContinents.push("Africa");
    }
    if (americasCheckbox.checked) {
        selectedContinents.push("Americas");
    }
    if (oceaniaCheckbox.checked) {
        selectedContinents.push("Oceania");
    }

    const filteredCountries = json.filter(country => {
        return (
            selectedContinents.length === 0 ||
            selectedContinents.includes(country.region)
        );
    });

    displayCountries(filteredCountries);
}

function searchCountries() {
    const searchInput = document.getElementById("search");
    const searchText = searchInput.value.toLowerCase();

    const filteredCountries = json.filter(country => {
        return country.name.toLowerCase().startsWith(searchText);
    });

    displayCountries(filteredCountries);
}

document.getElementById("search").addEventListener("input", searchCountries);
