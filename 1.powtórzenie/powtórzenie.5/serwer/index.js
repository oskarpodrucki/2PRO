const express = require('express');
const cors = require('cors');
const mysql = require('mysql');
const app = express();
const port = 3008;

// Konfiguracja połączenia z bazą danych MySQL
const db = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: "",
  database: 'bazadanych'
});

db.connect((err) => {
  if (err) {
    console.error('Błąd połączenia z bazą danych: ' + err.message);
  } else {
    console.log('Połączono z bazą danych');
  }
});

app.use(cors());

app.get('/', function (req, res) {
  console.log(port);
});

app.get('/imie', function (req, res) {
  res.json({ 'Imię': 'Oskar', 'Nazwisko': 'Podrucki' });
});

app.listen(port, function () {
  console.log('Serwer działa na porcie ' + port);
});

app.get('/add/:imie/:nazwisko/:ocena', function (req, res) {
  const imie = req.params.imie;
  const nazwisko = req.params.nazwisko;
  const ocena = parseFloat(req.params.ocena); // Parsowanie oceny na liczbę zmiennoprzecinkową

  // Wstawienie danych do tabeli "uczniowie"
  const query = 'INSERT INTO uczniowie (imie, nazwisko, ocena) VALUES (?, ?, ?)';
  db.query(query, [imie, nazwisko, ocena], (err, result) => {
    if (err) {
      console.error('Błąd podczas wstawiania danych do bazy danych: ' + err.message);
      res.status(500).json({ error: 'Wystąpił błąd podczas zapisywania danych' });
    } else {
      console.log('Dane zostały pomyślnie zapisane do bazy danych');
      res.json({ message: 'Dane zostały pomyślnie zapisane do bazy danych' });
    }
  });
});