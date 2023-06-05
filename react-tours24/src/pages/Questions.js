import React, { useState } from "react"
import data from "../data-questions"
import Quest from "../components/Quest"

export default function Questions() {
  const [questions, setQuestions] = useState(data)
  return (
    <main>
      <div className="container">
        <h3>Frequently Asked Questions</h3>
        <section className="info">
          {questions.map((questions) => {
            return <Quest key={questions.id} {...questions}></Quest>
          })}
        </section>
      </div>
    </main>
  )
}
