let count = 0
let saveEl= document.getElementById("save-el")
function increment(){
   count+=  1
   document.getElementById("counter-el").innerText=count 
 }
function save(){
  //let countStr=count + " - "
  //saveEl.textContent+= countStr //considers all the non human readable elements like spaces that werent getting considered previously. Eg: previous entries:2- 5- 4- 5 instead of 2 - 3 - 4
  let countStr = " " + count + " + "
  saveEl.innerText+= countStr
  count=0
  document.getElementById("count-el").textContent=count
}
