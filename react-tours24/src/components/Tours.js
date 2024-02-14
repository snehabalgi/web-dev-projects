import React from "react"
import tours from "../data-tour"
import Tour from "./Tour"
import { useState } from "react"
const Tours = () => {
  return (
    <section className="tour-section">
      <div className="tour-title">
        <h1 style={{ fontSize: "2.5rem", fontWeight: "bolder" }}> Our Tours</h1>
        <div className="underline"></div>
      </div>
      <div>
        {tours.map((tours) => {
          return <Tour key={tours.id} {...tours}></Tour>
        })}
      </div>
    </section>
  )
}

export default Tours
