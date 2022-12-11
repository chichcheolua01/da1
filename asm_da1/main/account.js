const liAcc1 = document.querySelector("#liAcc1")
const liAcc2 = document.querySelector("#liAcc2")
const liAcc3 = document.querySelector("#liAcc3")
const liAcc4 = document.querySelector("#liAcc4")
const queryString = window.location.search; 
const urlParams = new URLSearchParams(queryString);
const act = urlParams.get('act')
if (act =="account") {
    liAcc1.classList.remove("hover:bg-white")
    liAcc1.classList.add("bg-white")
}
if (act =="update_email") {
    liAcc2.classList.remove("hover:bg-white")
    liAcc2.classList.add("bg-white")
}
if (act =="update_password") {
    liAcc3.classList.remove("hover:bg-white")
    liAcc3.classList.add("bg-white")
}
if (act =="receipts") {
    liAcc4.classList.remove("hover:bg-white")
    liAcc4.classList.add("bg-white")
}