import React from "react"
import { BrowserRouter as Router, Route, Routes } from "react-router-dom"
import Home from "./pages/Home"
import Reviews from "./pages/Reviews"
import Questions from "./pages/Questions"
import Error from "./pages/Error"
import Navbar from "./components/Navbar"

function App() {
  return (
    <Router>
      <Navbar></Navbar>
      <Routes>
        <Route path="/" element={<Home></Home>}></Route>
        <Route path="/reviews" element={<Reviews></Reviews>}></Route>
        <Route path="/questions" element={<Questions></Questions>}></Route>
        <Route path="*" element={Error}></Route>
      </Routes>
    </Router>
  )
}

export default App
