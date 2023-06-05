const router = require("express").Router()
let User = require("../models/user.model")

//first route where if localhost:5000/users/
//then it is a get request
router.route("/").get((req, res) => {
  User.find() //gets all the users from mongodb userbase
    .then((users) => res.json(users)) //users are returned in json format
    .catch((err) => res.status(400).json("Error: " + err))
})

//handles post request
router.route("/add").post((req, res) => {
  const username = req.body.username

  const newUser = new User({ username })

  newUser
    .save() //new user saved to the database
    .then(() => res.json("User added!")) //user added returned in json
    .catch((err) => res.status(400).json("Error: " + err))
})

module.exports = router
