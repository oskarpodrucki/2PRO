const express = require('express')

app = express();

app.use(express.urlencoded({ extended: true }))
app.use(express.json())


var person = { name: `${process.env.name}`, surname: `${process.env.surname}` }


app.get('/', (req, res) =>
    res.json(person)
)

app.listen(5000,
    () => console.log(`⚡️ Server działa na porcie: 5000`));