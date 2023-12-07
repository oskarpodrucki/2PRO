const express = require("express")
const cors = require("cors")
const mysql = require("mysql2")

const app = express()
app.use(cors())

const port = 3000

var con = mysql.createConnection({
    host: process.env.host,
    user: "root",
    password: process.env.password,
    database: process.env.database
})

con.connect((err)=>{
    if(err){
        console.log(err)
    }else{
        console.log("Połączono z bazą")
    }
})


app.get("/baza", (req, res)=>{
    const sql = "SELECT * FROM task"

    con.query(sql, (error, results, fields)=>{
        if(error){
            console.log(error)
        }else{
            res.send(results)
        }
    })
})


app.listen(port, ()=>{
    console.log(`Aplikacja działa na porcie: ${port}`)
})