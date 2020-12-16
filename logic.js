//all buttons
const saveButton = document.getElementById("saveButton")
const updateButton = document.getElementById("updateButton")
const deleteButton = document.getElementById("deleteButton")
saveButton.addEventListener("click", save )
updateButton.addEventListener("click", update)
deleteButton.addEventListener("click", remove)



//make request
async function makeRequest(path, method, body){
    try{
        const response = await fetch(path,{
            method,
            body
        })
        console.log(response)
        return await response.json()
    }catch(err){
        console.log(err)
    }
}

//day
function getDay(){
    let date = document.getElementById("input").value
    let day = date.split('-')

    return parseInt(day[2])
}
//month
function getMonth(){
    let date = document.getElementById("input").value
    let month = date.split('-')

    return parseInt(month[1])
}
// save
async function save (){
    
    
    let month = getMonth()
    let day = getDay()

    let body = new FormData()
    body.set("month", month)
    body.set("day", day)
    let collectInput = await makeRequest("./server/addHoroscope.php", "POST", body)
    /* console.log("Body",body)
    console.log("inputnumber",inputNumber) */
    console.log("collectinput",collectInput)
    /* console.log("day",day)
    console.log("month",month) */
    await viewer()
    
}
// update
async function update (){
    
    let month = getMonth()
    let day = getDay()

    let body = new FormData()
    body.set("month", month)
    body.set("day", day)
    let collectInput = await makeRequest("./server/updateHoroscope.php", "POST", body)
    /* console.log("Body",body)
    console.log("inputnumber",inputNumber) */
    console.log("collectinput",collectInput)
    /* console.log("day",day)
    console.log("month",month) */
    await viewer()
    
}
//delete
async function remove (){
    const collectInput = await makeRequest("./server/deleteHoroscope.php", "DELETE")
    
    console.log(collectInput)

}
//view */
async function viewer (){
    const saveInput = document.getElementById("result")
    const collectInput = await makeRequest("./server/viewHoroscope.php", "GET")
    saveInput.innerHTML = collectInput
    console.log(collectInput)
}

