// Państwa -> https://restcountries.com/v3.1/all
// 192.168.15.10:3008/

const axios = require('axios');
const express = require('express');
const cors = require('cors');
const mysql = require('mysql');
const app = express();
const PORT = 3008; 

app.use(cors());

// Połączenie z bazą danych MySQL
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'axios_countries',
});

db.connect(err => {
    if (err) {
        console.error('Błąd podczas połączenia z bazą danych: ' + err);
        return;
    }
    console.log('Połączono z bazą danych MySQL');
});

// Endpoint do pobierania kontynentów
// 192.168.15.10:3008/aplikacja/kontynenty
app.get('/aplikacja/kontynenty', function (req, res) {

    const query = `SELECT DISTINCT(continent) FROM kraje`

    db.query(query, (err, results) => {
        if (err) {
            console.log(err)
            res.status(500).json({ error: 'Błąd podczas pobierania danych' });
            return;
        }
        res.json(results)
        console.log(results)
    })
});

// Endpoint do pobierania krajów i populacji
// 192.168.15.10:3008/aplikacja/populacja
app.get('/aplikacja/populacja', function (req, res) {

    const query = `SELECT name, population FROM kraje`

    db.query(query, (err, results) => {
        if (err) {
            console.log(err)
            res.status(500).json({ error: 'Błąd podczas pobierania danych' });
            return;
        }
        res.json(results)
        console.log(results)
    })
});

// Uruchomienie serwera na określonym porcie
app.listen(PORT, () => {
    console.log(`Serwer działa na porcie ${PORT}`);
});


// app.get('/populacja/:population', function (req, res) {
//     const population = req.params.population; // Poprawione
//     // Zapytanie SQL do pobrania państw z danego kontynentu i posortowania ich alfabetycznie
//     const query = `SELECT * FROM kraje WHERE population <= ${population} ORDER BY name`;

//     db.query(query, [population], (err, results) => {
//         if (err) {
//             console.error('Błąd podczas pobierania danych z bazy danych: ' + err);
//             res.status(500).json({ error: 'Wystąpił błąd podczas pobierania danych' });
//             return;
//         }

//         // Wyniki z bazy danych zostaną przesłane jako odpowiedź JSON
//         res.json(results);
//     });
// });

// app.get('/kontynent/:name', function (req, res) {
//     const kontynent = req.params.name;
//     // Zapytanie SQL do pobrania państw z danego kontynentu i posortowania ich alfabetycznie
//     const query = `SELECT * FROM kraje WHERE continent = "${kontynent}" ORDER BY name`;

//     db.query(query, [kontynent], (err, results) => {
//         if (err) {
//             console.error('Błąd podczas pobierania danych z bazy danych: ' + err);
//             res.status(500).json({ error: 'Wystąpił błąd podczas pobierania danych' });
//             return;
//         }

//         // Wyniki z bazy danych zostaną przesłane jako odpowiedź JSON
//         res.json(results);
//     });
// });

// app.listen(PORT, () => {
//     console.log(`Serwer na porcie ${PORT}`);
// });


// axios.get("https://restcountries.com/v3.1/all").then(res => {
//     for (i = 0; i < res.data.length; i++) {
//         const nazwa = db.escape(res.data[i].name.common);
//         const populacja = db.escape(res.data[i].population);
//         const kontynent = db.escape(res.data[i].continents);
//         const stolica = db.escape(res.data[i].capital);
//         const powierzchnia = db.escape(res.data[i].area)

//         // Sprawdzenie, czy kraj już istnieje w tabeli
//         const selectQuery = `SELECT * FROM kraje WHERE name = ${nazwa}`;

//         db.query(selectQuery, function (err, rows, fields) {
//             if (err) {
//                 console.log(err);
//             } else {
//                 if (rows.length === 0) {
//                     // Kraj nie istnieje w tabeli, więc można go dodać
//                     const insertQuery = `INSERT INTO kraje (name,population,continent,capital,area) VALUES (${nazwa}, ${populacja}, ${kontynent}, ${stolica}, ${powierzchnia})`;
//                     db.query(insertQuery, function (err, result, fields) {
//                         if (err) {
//                             console.log(err);
//                         } else {
//                             console.log(`Dodano kraj: ${nazwa}`);
//                         }
//                     });
//                 } else {
//                     // Kraj już istnieje w tabeli, pomijamy go
//                     console.log(`Kraj ${nazwa} już istnieje w tabeli, pomijam.`);
//                 }
//             }
//         });
//     }
// });

// app.get('/country/:name', async (req, res) => {
//     try {
//         const countryName = req.params.name;
//         const response = await axios.get(`https://restcountries.com/v3.1/name/${countryName}`);

//         if (response.data.length === 0) {
//             return res.status(404).json({ message: 'Państwo nie znalezione' });
//         }

//         const countryData = response.data[0];
//         const population = countryData.population;
//         const continent = countryData.region;
//         const capital = countryData.capital;
//         const name = countryData.name.common;

//         res.json({ name, population, continent, capital });
//     } catch (error) {
//         console.error('Błąd:', error.message);
//         res.status(500).json({ message: 'Wystąpił błąd podczas pobierania danych' });
//     }
// });

// app.listen(PORT, () => {
//     console.log(`Serwer uruchomiony na porcie ${PORT}`);
// });