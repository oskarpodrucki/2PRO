function green() {
    //zmiana koloru
    document.getElementById("kwadrat").style.backgroundColor = "green"
}

function red() {
    //zmiana koloru
    document.getElementById("kwadrat").style.backgroundColor = "red"
}

let liczbak = 0; // Inicjalizacja licznika
let wynik = 0; // Inicjalizacja zmiennej wyniku

function addKwadrat() {
    // Zmiana koloru
    document.getElementById("kwadrat").style.backgroundColor = "lightyellow"

    // Tworzenie kwadratu
    const div = document.createElement("div");
    div.classList.add("addedkwadrat");
    div.innerText = liczbak++;

    // Nadanie id kwadrata
    const uniqueId = liczbak; // Wykorzystujemy bieżący czas w milisekundach jako ID
    div.id = uniqueId;

    // Dodawanie obsługi zdarzenia kliknięcia do nowego kwadratu
    div.addEventListener("click", function (e) {
        div.style.backgroundColor = "purple";
        div.classList.add("shadow-inset-center")

        setTimeout(function () {
            const liczbaZeSrodka = parseInt(div.innerText); // Pobranie liczby ze środka kwadratu
            wynik += liczbaZeSrodka; // Dodaj tę liczbę do wyniku
            document.getElementById("sum").innerHTML = "Wynik to: " + wynik; // Wyświetl wynik na stronie
            document.getElementById("kwadrat").removeChild(div);
        }, 450);
    });

    // Dodawanie kwadratu do kwadratu
    document.getElementById("kwadrat").appendChild(div);
}

function clearKwadrat() {

    var div = document.getElementById('kwadrat');


    while (div.firstChild) {
        
        div.removeChild(div.firstChild);

    }

    liczbak = 0;

    document.getElementById("sum").innerHTML = "W Y C Z Y S Z C Z O N O" ; // Wyświetl wynik na stronie

    console.log("K W A D R A T Y   U S U N I Ę T E")


}

