document.getElementById("validationform").onsubmit = validate;

// function to validate for form data

function validate() {
    let valid = true;
    // clear all errors
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    let firstname = document.getElementById("fname").value;
    if (firstname === "") {
        let errfname = document.getElementById("errfname");
        errfname.style.visibility = "visible";
        errfname.innerHTML = "\u26A0 Field is required";//adding the alarm sign
        valid = false;
    }

       let lastname = document.getElementById("lname").value;
       if (lastname === "") {
           let errlname = document.getElementById("errlname");
           errlname.style.visibility = "visible";
           errlname.innerHTML = "\u26A0 Field is required";
           valid = false;
       }


       // Email validation
       let  mail = document.getElementById("mail");
       let email = document.getElementById("email").value;
       let error = document.getElementById("erremail");
       // let dot = email.includes(".");
       //let at = email.includes("@");
       let format = new RegExp("^([a-zA-Z0-9_\\-\\.]+)@([a-zA-Z0-9_\\-\\.]+)\\.([a-zA-Z]{2,5})$");

       if(mail.checked === true){

           if(email ===""){
               error.style.visibility = "visible";
               error.innerHTML = "\u26A0 Field is Required";
               valid = false;
           }

           if (email !=="") {
               if ( !email.match(format)){
                   error.style.visibility = "visible";
                   error.innerHTML = "\u26A0 Invalid Email Format";
                   valid = false;
               }
           }

       }
        /*
           // Linkedin validation
       let linked = document.getElementById("linked").value;
       let errorlink = document.getElementById("err-linked");
       if (linked !== "") {
           if(!linked.startsWith("https") || !linked.startsWith("http") ){
               errorlink.style.visibility = "visible";
               errorlink.innerHTML = "\u26A0 https is missing !";
           } else if(!linked.includes(".")){
               errorlink.style.visibility = "visible";
               errorlink.innerHTML = "\u26A0  '.'  is missing !";
           }
           valid = false;

       }
            */
       // how we met
       let how = document.getElementById("how").value;
       let errhow = document.getElementById("errhow");
       if (how === "none") {
           errhow.style.visibility = "visible";
           errhow.innerHTML = "\u26A0 Field is required";
           valid = false;
       }

    return valid;
}
