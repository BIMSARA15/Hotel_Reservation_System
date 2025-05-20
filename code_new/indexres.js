function changeView() {
    
    var signUpBox = document.getElementById("signUpBox");
    var signInBox = document.getElementById("signInBox");

    signUpBox.classList.toggle("display-not");
    signInBox.classList.toggle("display-not");
}




function signUp() {
    

    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var pid= document.getElementById("pid");
    var password = document.getElementById("password");
    var mobile = document.getElementById("mobile");
    var gender = document.getElementById("gender");
    var al_1 = document.getElementById("adress-line-01");
    var al_2 = document.getElementById("adress-line-02");
    var al_3 = document.getElementById("adress-line-03");
    var city = document.getElementById("city");
    var pcode = document.getElementById("postal-code");
    var country = document.getElementById("country");

    var form = new FormData();
    form.append("f", fname.value);
    form.append("l", lname.value);
    form.append("e", email.value);
    form.append("pid", pid.value);
    form.append("p", password.value);
    form.append("m", mobile.value);
    form.append("g", gender.value);
    form.append("a1", al_1.value);
    form.append("a2", al_2.value);
    form.append("a3", al_3.value);
    form.append("city", city.value);
    form.append("pcode", pcode.value);
    form.append("c", country.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.status == 200 && request.readyState == 4) {
            var response = request.responseText;

            if (response == "Success") {
                document.getElementById("msg").innerHTML = "Registration Success !";
            } else {
                document.getElementById("msg").innerHTML = response;
                swal("Error", response, "error");
            }

        }
    }

    request.open("POST", "signUpProcess.php", true);
    request.send(form);
}

function jj(){
    alert("ll");
}

function signIn(){
  
    var email = document.getElementById("email2");
    var password = document.getElementById("password2");
    var rememberme = document.getElementById("rememberme");
    

    var form = new FormData();
    form.append("e", email.value);
    form.append("p", password.value);
    form.append ("r",rememberme.checked);


    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.status == 200 && request.readyState == 4) {
            var response = request.responseText;
            alert(response);
            if (response == "success") {
                document.getElementById("msg2").innerHTML = "Login Success!";
                document.getElementById("msg2").className = "text-oggy-3";
                window.location = "userdashbord.php";
              
            } else {
                document.getElementById("msg2").innerHTML = response;
            }
        }
    }

    request.open("POST", "signInProcess.php", true);
    request.send(form);

}

function adminSignIn() {
   // alert("dfghj");
    var email = document.getElementById("adminUsername");
    var password = document.getElementById("adminPassword");
   


    var form = new FormData();
    form.append("e", email.value);
    form.append("p", password.value);
    

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.status == 200 && request.readyState == 4) {
            var response = request.responseText;
          
       alert(response);
         if (response == "success") {
            //alert("asdfghjk");
            document.getElementById("msgsdiv").innerHTML = "Login Success!";
            document.getElementById("msgsdiv").className = "text-oggy-3";
            window.location = "admin.php";
        } else {
            document.getElementById("msgsdiv").innerHTML = response;
        }
        }
    }
   

    request.open("POST", "adminSignInProcess.php", true);
    request.send(form);

}

function resetPassword() {

    var email = document.getElementById("email3");
    var newpassword = document.getElementById("new-password");
    var retypepassword = document.getElementById("new-password2");
    var verificationcode = document.getElementById("verification-code");

    

    var form = new FormData();
    form.append("e", email.value);
    form.append("n", newpassword.value);
    form.append("r", retypepassword.value);
    form.append("v", verificationcode.value);

  

    var request = new XMLHttpRequest();
    
    request.onreadystatechange = function () {
        if (request.status == 200 && request.readyState == 4) {
                var response = request.responseText;
            if (response == "success") {
                alert("Password updated successfully.");
                window.location = "signInUp.php";

            } else {
                alert(response);
            }

        }
    }

    request.open("POST", "resetPasswordProcess.php", true);
    request.send(form);

}


function forgotPassword() {
    alert();
    document.getElementById("alerts").innerHTML = "Processing Please wait";
    var email = document.getElementById("email3").value;

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.status == 200 && request.readyState == 4) {
            var response = request.responseText;
            if (response == "success") {
                document.getElementById("alerts").innerHTML = "Email sent check your inbox. Really check your inbox!!. it works!!";
            } else {
                document.getElementById("alerts").innerHTML = response;
            }
        }
    }

    request.open("GET", "forgetPasswordProcess.php?e=" + email, true);
    request.send();

}