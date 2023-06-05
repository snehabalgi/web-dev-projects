// NOTES: using local storage to put items as key values pairs so that even if you exist the browser it remains in the storage for that you have to store the values from the local storage into a variable
//IMPORTANT TO REMEMBER:
//1. JSON>stringify()
//2.JSON.parse()

//NEW THINGS LEARNT: Truthy vs falsy values
//falsy values: null, unfdefined, NaN, "",false,0

let myLeads=[]
const inputEl=document.getElementById("input-el")
const inputBtn=document.getElementById("input-btn")
const deleteBtn=document.getElementById("delete-btn")
const ulEl=document.getElementById("ul-el")
const tabBtn=document.getElementById("tab-btn")
const leadsFromLocalStorage=JSON.parse(localStorage.getItem("myLeads"))


if(leadsFromLocalStorage){
  myLeads=leadsFromLocalStorage
  render(myLeads)
}

tabBtn.addEventListener("click",function(){

  chrome.tabs.query({active:true, currentWindow:true}, function(tabs){
    myLeads.push(tabs[0].url) //almost the same as console.log(Object.values(tabs[0]))
    localStorage.setItem("myLeads",JSON.stringify(myLeads))
    render(myLeads)
  })
})

function render(leads){
  let listItems=""
  for(let i=0; i < leads.length; i++){
    listItems+=`
        <li>
          <a href=' ${leads[i]} ' target='_blank'>
          ${leads[i]}
          </a>
        </li>
    `
  }
  ulEl.innerHTML=listItems
}

deleteBtn.addEventListener("click",function(){
  localStorage.clear()
  myLeads=[]
  render(myLeads)
})

inputBtn.addEventListener("click",function(){
  myLeads.push(inputEl.value)
  inputEl.value=" "  
  localStorage.setItem("myLeads", JSON.stringify(myLeads) )
  render(myLeads)
})

//OR
    //const li=document.createElement("li")
    //li.textContext=myLeads[i]
    //ulEl.append(li)

    
