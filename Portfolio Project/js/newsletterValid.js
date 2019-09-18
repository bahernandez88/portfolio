"use strict";
/**
    Author: Brian Hernandez
    Date: 3/14/2019
  ------------------Function------------------
    submit()
        Runs the various validation functions
    validFirst()
        Validates whether the first name box is empty or not
    validLast()
        Validates whether the last name box is empty or not

 */
//set up event listener and anon function for event handlers of onclick for submit button
 window.addEventListener("load", function(){
    document.getElementById("subButton").onclick = submit;
    //validate as the user enters input
    document.getElementById("signFirst").oninput = validFirst;
    //validate as the user enters input
    document.getElementById("signLast").oninput = validLast;
    //validate as the user enters input
    document.getElementById("signEmail").oninput = validEmail;




 });
//submit function tied to submit button
function submit(){
    //fires the validity checker for first name
    validFirst();
    //fires the validity checker for last name
    validLast();
    //fires the validity checker for email block
    validEmail();

}
//validity checker for first name
function validFirst(){
    //get the first name input block
    var firstName = document.getElementById("signFirst");
    
    //look for missing value
    if(firstName.validity.valueMissing){
        //if value is missing show custom message
        firstName.setCustomValidity("Please enter your first name");
    }else{
        //remove custom message
        firstName.setCustomValidity("");
    }
}

//validity checker for last name
function validLast(){
    //get the last name input block
    var lastName = document.getElementById("signLast");
    //check for missing input
    if(lastName.validity.valueMissing){
        //if value is missing show custom message
        lastName.setCustomValidity("Please enter your last name")
        //remove custom message
    }else{
        lastName.setCustomValidity("");
    }
}
//validity checker for email block
function validEmail(){
    //store email input block in variable
    var email = document.getElementById("signEmail");
    //check for missing input
    if(email.validity.valueMissing){
        //if value is missing show custom message
        email.setCustomValidity("Please enter your email")
        //if value is present, test the value against the regular expression given, if it fails show custom message
    }else if(/^([a-z]||\d|\.?){2,}\@(([a-z]|\.?[a-z]?){2,})\.(com|edu|org|net)$/i.test(email.value)===false){
        email.setCustomValidity("Please enter a valid email address in the given format")
        //remove custom message
    }else{
        email.setCustomValidity("");
    }

}


