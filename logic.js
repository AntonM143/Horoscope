window.addEventListener("load", initsite)
//initsite
function initsite(){

}
//func makes requst wants path method body
async function makeRequest(path, method, body){
    try{
        const response = await fetch(path, {
        method,
        body
        })
        console.log(response)
        return await response.json()
        
    }catch(err) {
        console.log(err)
    }   
}

//func that views
async function viewDate () {

}

//func updateBtn, refresh
function updateBtn () {
    const update = document.getElementById("input").value
    updateDate(update)
}

//func that updates
async function updateDate (update) {

}

//func saveBtn, saves
function saveBtn () {
    const date = document.getElementById("input").value
    postDate(date) 

}

//func that posts
async function postDate (date){
    const body = new FormData ()
    body.set("listHoroscope", date)

    const response = await makeRequest("./php/addHoroscope.php","POST", body)
    console.log(response)
}

//func deletebtn, removes 
function deleteBtn (){
    const resultH1 = document.getElementById("result")
    resultH1.innerHTML = ""
    deleteDate()
}

//func that deletes
async function deleteDate (){
    
}

//func that refreshes the page
function refresh(){
    window.location.reload()
}
let test = fetch("./php/list.php")
        
        
        console.log(test)