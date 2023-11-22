// WSTAWIANIE DANYCH

function getPin() {
    var pin = document.getElementById("numer_karty").value
    console.log(pin)
    document.getElementById("bank_pin").innerHTML = pin
}


function getDate() {
    document.getElementById("data_karty").addEventListener("change", function () {
        var input = this.value;
        var podzielone = input.split('-'); // Podziel datę na części
        var rok = podzielone[0].slice(-2); // Pobierz ostatnie dwie cyfry roku
        var miesiac = podzielone[1]; // Pobierz miesiąc

        var dataSformatowana = miesiac + ' / ' + rok;
        console.log(dataSformatowana);
        console.log(input);
        document.getElementById("bank_waznosc").innerHTML = dataSformatowana;
    });
}



function getOwner() {
    var owner = document.getElementById("wlasciciel").value
    console.log(owner)
    document.getElementById("bank_wlasciciel").innerHTML = owner
}

// ZMIENIANIE KOLORU

function changeRed(){
    document.getElementById("karta_main").style.backgroundImage = 'url("red.png")';
}

function changeBlue(){
    document.getElementById("karta_main").style.backgroundImage = 'url("blue.png")';
}

function changeGreen(){
    document.getElementById("karta_main").style.backgroundImage = 'url("green.png")';
}