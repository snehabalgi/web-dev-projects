let cards= []
let sum = 0
let hasBlackJack= false
let isAlive= false
let message= ""
let messageEl=document.getElementById("message-el")
let sumEl=document.getElementById("sum-el")
let cardsEl=document.getElementById("cards-el")

//creating an object
let player={
   namee:prompt("please enter yor name: ", ""),
   chips:0
}
let playerEl=document.getElementById("player-el")
playerEl.textContent= player.namee+": $"+player.chips

function getRandomCard(){
  let randomeNumber=Math.floor((Math.random()*13))+1
  if(randomeNumber===1){
    return 11
  }
  else if(randomeNumber>10){
    return 10
  }
  else{
    return randomeNumber
  }
}

function startGame(){
  isAlive=true
  let firstCard= getRandomCard()
  let secondCard= getRandomCard()
  sum= firstCard + secondCard
  cards=[firstCard, secondCard]
  renderGame()
}

function renderGame(){
  cardsEl.textContent= "Cards: "
  for(let i=0;i<cards.length;i++){
    cardsEl.textContent+=cards[i] + " "
  }
  sumEl.textContent="Sum: "+ sum
  if(sum<=20){
    message="Do you want to draw another card?"
    isAlive=true
  }
  else if(sum===21){
    message="woohoo!!! you got a BLACKJACK!!!"
    hasBlackJack= true
    isAlive=true
    player.chips=200
    playerEl.textContent= player.namee+": $"+player.chips
  }
  else{
    message="Yor're out of the game!!!"
    isAlive=false
  }
  messageEl.textContent=message
}

function newCard(){
  if(isAlive==true && hasBlackJack==false && cards.length<3){
    let thirdCard= getRandomCard()
    sum += thirdCard
    cards.push(thirdCard)
    renderGame()
  }
  else{
    message="Yor're out of the game!!!"
  }
  
}


