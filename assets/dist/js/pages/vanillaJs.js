    
    const month = document.querySelector('.month')
    const weekDays = document.querySelector('.weekDays-col')
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const d = new Date()
function editMonths(){
    console.log(month,"MONth")
    month.textContent = `${d.getFullYear()} ${months[d.getMonth()]}`

}
editMonths();


function addWeekDays(){
    const totalDays  = new Date(d.getFullYear(),d.getMonth()+1,0).getDate();  
    console.log(totalDays,"ss")
    for (let index = 0; index < totalDays; index++) {
    const newDate = new Date(2021,d.getMonth(),index+1).toString();
        weekDays.innerHTML +=`<th>${newDate.slice(0,4)}</th>`
    }
}
addWeekDays();
// <th>Sun</th>