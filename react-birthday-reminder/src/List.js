import React from "react"
import data from "./data"

const List = ({ people }) => {
  return (
    <>
      {people.map((person) => {
        const { id, name, age, image } = person
        return (
          <article key={id} className="person">
            <div>
              <img src={image} alt={name}></img>
            </div>
            <div style={{ display: "inline-block" }}>
              <h4>{name}</h4>
              <p>{age} years</p>
            </div>
          </article>
        )
      })}
    </>
  )
}
export default List
