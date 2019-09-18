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
                                    document.getElementById("why").oninput = validReasons;
                                    document.getElementById("firstName").oninput = validFirst;
                                    document.getElementById("lastName").oninput = validLast;
                                    document.getElementById("email").oninput = validEmail;

                                    //document.getElementById("subButton").onclick = submit;
                                    //validate as the user enters input
                                    document.getElementById("signFirst").oninput = validFirst;
                                    //validate as the user enters input
                                    document.getElementById("signLast").oninput = validLast;
                                    //validate as the user enters input
                                    document.getElementById("signEmail").oninput = validEmail;




 });
//submit function tied to submit button
function submit(){
  //fires the validity checker for reasons option box
  validReasons();
  //fires the validity checker for first name
  validFirst();
//fires the validity checker for last name
  validLast();
  //fires the validity checker for email name
  validEmail();
};
function validReasons(){
  var reasons = document.getElementById("why");

  if(reasons.validity.valueMissing){
    reasons.setCustomValidity("Please let us know why you are contacting us");
  }else{
    reasons.setCustomValidity("");
  }
}
function validFirst(){
  var firstName = document.getElementById("firstName");
  var signFirst = document.getElementById("signFirst");

  if(firstName.validity.valueMissing){
    firstName.setCustomValidity("Please enter your first name");
  }else if(signFirst.validity.valueMissing){
    firstName.setCustomValidity("Please enter your first name");
  }else{
    firstName.setCustomValidity("");
  }
}
function validLast(){
  var lastName = document.getElementById("lastName");
  var signLast = document.getElementById("signLast");

  if(lastName.validity.valueMissing){
    lastName.setCustomValidity("Please enter your last name");
  }else if(signLast.validity.valueMissing){
    signLast.setCustomValidity("Please enter your last name");
  }else{
    lastName.setCustomValidity("");
  }
}
function validEmail(){
  var email = document.getElementById("email");
  var signEmail = document.getElementById("signEmail");

  if(email.validity.valueMissing){
    email.setCustomValidity("Please enter your email address");
  }else if(signEmail.validity.valueMissing){
    signEmail.setCustomValidity("Please enter your email address");
  }else if (/^([a-z]||\d|\.?){2,}\@(([a-z]|\.?[a-z]?){2,})\.(com|edu|org|net)$/i.test(email.value)===false){
    email.setCustomValidity("Plase follow the given format for emails");
  }else if (/^([a-z]||\d|\.?){2,}\@(([a-z]|\.?[a-z]?){2,})\.(com|edu|org|net)$/i.test(signEmail.value)===false){
    email.setCustomValidity("Plase follow the given format for emails");
  }else{
    email.setCustomValidity("");
  }
}



