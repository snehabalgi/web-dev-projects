import React, { useState } from "react"

const Tour = ({ id, image, info, price, name }) => {
  const [readMore, setReadMore] = useState(false)
  return (
    <article className="single-tour">
      <img src={image} alt={name}></img>
      <footer>
        <div className="tour-info">
          <h4 style={{ fontSize: "1.5rem", color: "#c74623" }}>{name}</h4>
          <h4 className="tour-price">$ {price}</h4>
        </div>
        <p>
          {readMore ? info : `${info.substring(0, 200)}...`}
          <button onClick={() => setReadMore(!readMore)}>
            {readMore ? "show less" : "read more"}
          </button>
        </p>
      </footer>
    </article>
  )
}

export default Tour
