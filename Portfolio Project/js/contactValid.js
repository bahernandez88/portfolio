"use strict";

/**
  Author: Brian Hernandez
  Date: 3/14/2019
  ------------------Function------------------
    submit()
        Runs the various validation functions
 */
//set up event listener and anon function for event handlers of onclick for submit button
 window.addEventListener("load", function(){
                                    document.getElementById("subButton").onclick = submit;
                                    //validate as the user enters input
                                    document.getElementById("why").oninput = validReasons;
                                    //validate as the user enters input
                                    document.getElementById("firstName").oninput = validFirst;
                                    //validate as the user enters input
                                    document.getElementById("lastName").oninput = validLast;
                                    //validate as the user enters input
                                    document.getElementById("email").oninput = validEmail;




 });
 //submit function tied to submit button
function submit(){
  //fires the validity checker reasons checkbox
  validReasons();
  //fires the validity checker for first name
  validFirst();
  //fires the validity checker for last name
  validLast();
  //fires the validity checker for email block
  validEmail();
};
function validReasons(){
  //store element in var
  var reasons = document.getElementById("why");
//look for missing value
  if(reasons.validity.valueMissing){
    //if value is missing show custom message
    reasons.setCustomValidity("Please let us know why you are contacting us");
    //remove custom message
  }else{
    reasons.setCustomValidity("");
  }
}
function validFirst(){
  var firstName = document.getElementById("firstName");
  //look for missing value
  if(firstName.validity.valueMissing){
    //if value is missing show custom message
    firstName.setCustomValidity("Please enter your first name");
    //remove custom message
  }else{
    firstName.setCustomValidity("");
  }
}
function validLast(){
  var lastName = document.getElementById("lastName");
  //look for missing value
  if(lastName.validity.valueMissing){
    //if value is missing show custom message
    lastName.setCustomValidity("Please enter your last name");
    //remove custom message
  }else{
    lastName.setCustomValidity("");
  }
}
function validEmail(){
  
  var email = document.getElementById("email");
  //look for missing value
  if(email.validity.valueMissing){
    //if value is missing show custom message
    email.setCustomValidity("Please enter your email address");
    //if value is present, test the value against the regular expression given, if it fails show custom message
  }else if (/^([a-z]||\d|\.?){2,}\@(([a-z]|\.?[a-z]?){2,})\.(com|edu|org|net)$/i.test(email.value)===false){
    email.setCustomValidity("Plase follow the given format for emails");
    //remove custom message
  }else{
    email.setCustomValidity("");
  }
}



