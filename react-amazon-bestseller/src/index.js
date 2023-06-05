import React from "react"
import ReactDOM from "react-dom/client"
//if not in the same folder put two dots

import "./index.css"
import { books } from "./books"
import Book from "./Book"

const Booklist = () => {
  return (
    <React.Fragment>
      <h1 style={{ fontSize: "3rem" }}>Amazon Best Sellers</h1>
      <section className="booklist">
        {books.map((book, index) => {
          return <Book {...book} key={book.id} number={index}></Book>
        })}
      </section>
    </React.Fragment>
  )
}

const root = ReactDOM.createRoot(document.getElementById("root"))
root.render(<Booklist></Booklist>)
