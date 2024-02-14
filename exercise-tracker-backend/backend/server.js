const express = require("express")
const cors = require("cors")
const mongoose = require("mongoose")

require("dotenv").config() // to have our environment variables in the dotenv file

//creating express server
const app = express()
const port = process.env.PORT || 5000

//middleware
app.use(cors())
//allows us to parse json bcoz server will be sending and receiving JSON
app.use(express.json())

const uri = process.env.ATLAS_URI
mongoose.connect(uri, {})
const connection = mongoose.connection
connection.once("open", () => {
  console.log("MongoDB database connection established successfully")
})

const exercisesRouter = require("./routes/exercises")
const usersRouter = require("./routes/users")

app.use("/exercises", exercisesRouter)
app.use("/users", usersRouter)

//starts server on a certain port
app.listen(port, () => {
  console.log(`server is running on port: ${port}`)
})
