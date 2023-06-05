import React from "react"
import ReviewComp from "../components/Review-comp"
export default function Reviews() {
  return (
    <main>
      <section className="reviewContainer">
        <div className="reviewTitle">
          <h2
            className="our-reviews"
            style={{
              textAlign: "center",
              fontSize: "2.5rem",
              marginBottom: "0",
              paddingBottom: "0",
            }}
          >
            Our reviews
          </h2>
          <div className="underline"></div>
        </div>
        <ReviewComp></ReviewComp>
      </section>
    </main>
  )
}
