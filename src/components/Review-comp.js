import React, { useState } from "react"
import people from "../data-reviews"
import { FaChevronLeft, FaChevronRight, FaQuoteRight } from "react-icons/fa"

const ReviewComp = () => {
  const [index, setIndex] = useState(0)
  const { name, addr, image, text } = people[index]

  const checkNumber = (number) => {
    if (number > people.length - 1) {
      return 0
    }
    if (number < 0) {
      return people.length - 1
    }
    return number
  }

  const nextPerson = () => {
    setIndex((index) => {
      let newIndex = index + 1
      return checkNumber(newIndex)
    })
  }
  const prevPerson = () => {
    setIndex((index) => {
      let newIndex = index - 1
      return checkNumber(newIndex)
    })
  }
  const randomPerson = () => {
    setIndex((index) => {
      const length = people.length
      let newIndex = Math.floor(Math.random() * length)
      return newIndex
    })
  }

  return (
    <article
      className="review"
      style={{ paddingTop: "2rem", marginTop: "2rem" }}
    >
      <div className="img-container">
        <img src={image} alt={name} className="person-img"></img>
        <span className="quote-icon">
          <FaQuoteRight></FaQuoteRight>
        </span>
      </div>
      <h4 className="author">Name: {name}</h4>
      <p className="address">Based in: {addr}</p>
      <p className="info">{text}</p>
      <button className="prev-btn" onClick={prevPerson}>
        <FaChevronLeft></FaChevronLeft>
      </button>
      <button className="next-btn" onClick={nextPerson}>
        <FaChevronRight></FaChevronRight>
      </button>
      <button className="random-btn" onClick={randomPerson}>
        random
      </button>
    </article>
  )
}
export default ReviewComp
