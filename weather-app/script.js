const url = "https://open-weather13.p.rapidapi.com/city/landon"
const options = {
  method: "GET",
  headers: {
    "X-RapidAPI-Key": "ab3e20d2f0mshb9fcb6e4616d506p1c6380jsn0b924b6a63a2",
    "X-RapidAPI-Host": "open-weather13.p.rapidapi.com",
  },
}

try {
  const response = await fetch(url, options)
  const result = await response.text()
  console.log(result)
} catch (error) {
  console.error(error)
}
