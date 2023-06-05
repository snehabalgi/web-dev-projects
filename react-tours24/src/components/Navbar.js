import React from "react"
import { Link } from "react-router-dom"

function Navbar() {
  return (
    <nav className="navbar">
      <div className="nav-center" style={{ paddingLeft: "3rem" }}>
        <div>
          <Link to="/">
            <img
              src="./travel-bag.png"
              alt="Tours 24"
              style={{ height: "90px" }}
            ></img>
          </Link>
          <div
            style={{
              display: "inline-block",
              verticalAlign: "top",
              padding: "20px",
              fontWeight: "bolder",
              fontSize: "2.25rem",
            }}
          >
            <span style={{ color: "#c74623" }}>TOURS 24</span>
          </div>
          <div style={{ float: "right" }}>
            <ul style={{ display: "flex" }} className="links">
              <li>
                <Link to="/">Home</Link>
              </li>
              <li>
                <Link to="/questions">FAQs</Link>
              </li>
              <li>
                <Link to="/reviews">Reviews</Link>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  )
}
export default Navbar
