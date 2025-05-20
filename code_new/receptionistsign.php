
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign In</title>
    <style>
        @font-face {
            font-family: "Quicksand";
            src: url("img/Quicksand-Medium.ttf");
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            font-family: Quicksand;
        }

        .container {
            width: 50%;
            margin: 100px auto;
            background-color: #fff;
            padding: 5%;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);

        }

        .signin-form h2 {
            text-align: center;
            margin-bottom: 20px;
            padding: 0.2%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .text-oggy-3 {
            font-family: Quicksand;
            font-size: 15px;
            letter-spacing: 0.5px;
            padding: 1px;
            font-weight: bold;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="signin-form">
            <h2>Receptionist Sign In Portal</h2>
            <div id="msgsdiv"  class="text-oggy-3" style="height:40px; width:40%; ">
            </div>
            <div class="form-group">
                <label for="username">Email Adress: </label>
                <input type="text" id="adminUsername" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" id="adminPassword" name="password" placeholder="Enter your password">
            </div>
            <button type="submit" onclick="adminSignIn()">Sign In</button>
    </div>
    </div>


    <script>
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
            window.location = "receptionistdashboard.php";
        } else {
            document.getElementById("msgsdiv").innerHTML = response;
        }
        }
    }
   

    request.open("POST", "recSignIn.php", true);
    request.send(form);

}
    </script>
</body>

</html>