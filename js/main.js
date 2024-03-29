const form = document.querySelector("form");
const email = document.getElementById("email");
const emailError = document.querySelector("#mail + span.error");
var validRegex = /^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/;

function show() {
    document.getElementById('navbar').classList.toggle('active');
    document.getElementById('menu-btn').classList.toggle('active');
}

function validateForm() {
    let fName = document.forms["myForm"]["fname"].value;
    let lName = document.forms["myForm"]["lname"].value;
    let subject = document.forms["myForm"]["subject"].value;
    let message = document.forms["myForm"]["message"].value;
    if (fName === "" || lName === "") {
        alert("First and last names must be filled out");
        return false;
    } else if (subject === "") {
        alert("Please include a subject :)")
        return false;
    } else if (message === "") {
        alert("Please include a message")
        return false;
    } else if (email.value.match(validRegex)) {
        alert("Your message has been sent, I'll get back to you as soon as I can :)");
    } else {
        alert("Invalid email address!");
        return false;
    }
}