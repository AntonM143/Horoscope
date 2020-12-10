window.addEventListener("load", initsite)

//initsite
function initsite(){

}


//func makes requst wants path method body
async function makeRequest(path, method, body){
    try{
        let response = await fetch(path, {
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

/* //func updateBtn, refresh
function updateBtn () {
    const update = document.getElementById("input").value
    updateDate(update)
} */

//func that updates
async function updateDate (update) {

}

//func saveBtn, saves
function saveBtn () {
    let date = document.getElementById("input").value
    console.log(date)
    postDate(date)  

}
saveBtn()

//func that posts
async function postDate (date){
    let body = new FormData ()
    body.set("date", date)
    console.log(body)

    const response = await makeRequest("./php/addHoroscope.php","POST", body)
    console.log(response)
}


//func that deletes
async function deleteDate (){
    
    
}

//func that decides if the buttons gonna show or not
function buttons(buttonOne, buttonTwo, buttonThree){
    const saveBtn = document.getElementById("saveBtn")
    const updateBtn = document.getElementById("updateBtn")
    const deleteBtn = document.getElementById("deleteBtn")

    saveBtn.style.display = buttonOne
    updateBtn.style.display = buttonTwo
    deleteBtn.style.display = buttonThree
}
