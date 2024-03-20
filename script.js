let company = document.getElementById("company");
let fullname = document.getElementById("fullname");
let email = document.getElementById("email");
let phone = document.getElementById("phone");
let service = document.getElementById("service");

function onChangeCompany(event) {
    console.log(event.target.value);
}

company.addEventListener("change", onChangeCompany);