// <th>Sun</th>
const xdMonth = document.querySelector(".xdmonth");
const xdYear = document.querySelector(".xdyear");
const xdDay = document.querySelector(".xdday");
const days = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
];
const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];
const d = new Date();

function editMonths() {
  console.log(xdMonth, "MONth");
  xdYear.textContent = d.getFullYear();
  xdMonth.textContent = months[d.getMonth()];
  xdDay.textContent = days[d.getDay()];
}
editMonths();

// // <th>Sun</th>
// function addWeekDays() {
//   const totalDays = new Date(d.getFullYear(), d.getMonth() + 1, 0).getDate();
//   const newDate = new Date(2021, d.getMonth(),d.getDay()).toString().slice(0,4);
//   console.log(totalDays,new Date(2021, d.getMonth(),d.getDay()).toString(), "ss");
// console.log(days[d.getDay()])
//   }
// addWeekDays()
