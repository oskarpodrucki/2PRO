const PORT = 3000
const express = require("express")
const cors = require("cors")
const mysql = require("mysql")

const app = express()

app.use(cors())

const con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "spr.pp"
})

con.connect(function (err) {
    if (err) {
        console.log(err)
    } else {
        console.log("połączono z bazą")
    }
})

app.listen(PORT, function () {
    console.log("działa na porcie: " + PORT)
})

//http://localhost:3000/database/get
app.get("/database/get", function (req, res) {
    const sql_ask = `SELECT * FROM produkty;`

    con.query(sql_ask, function (err, results) {
        if (err) {
            console.log(err)
            res.status(500).json({ error: 'Błąd serwera' })
        } else {
            console.log("dane wyświetlone")
            res.json(results)
        }
    })
})

//http://localhost:3000/database/add/zmywarka/5
app.get("/database/add/:name/:how_much", function (req, res) {
    const name = req.params.name
    const how_much = req.params.how_much

    const sql_ask = `INSERT INTO produkty (name, how_much) VALUES (?, ?);`

    con.query(sql_ask, [name, how_much], function (err, results) {
        if (err) {
            console.log(err)
            res.status(500).json({ error: 'Błąd serwera' })
        } else {
            console.log("dane wprowadzone do bazy")
            res.json({ message: 'Dane dodane do bazy' })
        }
    })
})

// sortowanie MIN _ MAX
//http://localhost:3000/database/min
//http://localhost:3000/database/max

app.get("/database/min", function (req, res){

    const sql_ask = 'SELECT * FROM `produkty` ORDER BY how_much;'

    con.query(sql_ask, function(err, results){
        if (err) {
            console.log(err)
            res.status(500).json({ error: 'Błąd serwera' })
        } else {
            console.log("dane wyświetlone od najmniejszej wartości")
            res.json(results)
        }
    })
})

app.get("/database/max", function (req, res){

    const sql_ask = 'SELECT * FROM `produkty` ORDER BY how_much DESC;;'

    con.query(sql_ask, function(err, results){
        if (err) {
            console.log(err)
            res.status(500).json({ error: 'Błąd serwera' })
        } else {
            console.log("dane wyświetlone od największje wartości")
            res.json(results)
        }
    })
})