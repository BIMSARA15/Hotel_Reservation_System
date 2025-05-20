<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Reset.css">
    <link rel="stylesheet" href="./Style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Philosopher|Nunito|Ubuntu|Fira+Sans|Cinzel');

        * a:hover {
            cursor: pointer;
        }

        :root {
            --headfont: "Ariel";
            --parafont: "Ubuntu";
            --parafont2: "Nunito";
            --maincolor: rgb(251, 251, 241);
            --backcolor: #ffffff;
            --compcolor: #000000;
        }

        body {

            margin: 0;
            padding: 0;
            background-color: var(--maincolor);
        }


        .form {
            width: 50%;
            border-left: 0.1pt solid;
            border-right: 0.1pt solid;
            border-image: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.9) 10%, rgba(0, 0, 0, 0.9) 90%, transparent) 1;
            padding: 1%;
            padding-top: 2%;
        }

        .main-form {
            width: 98%;
            padding: 1%;
        }

        .main-form span {
            font-family: var(--headfont);
            font-size: clamp(1em, 2.5vw, 1.3em);
        }

        .form h3 {
            font-family: var(--headfont);
            font-size: clamp(1.3em, 4vw, 1.6em);
        }

        .sub-form {
            position: relative;
            width: 100%;
        }

        .sub-form .row50 {
            display: flex;
            gap: 20px;
        }

        .data-box {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
            width: 50%;
        }

        .sub-form .row100 .data-box {
            width: 100%;
        }

        .data-box span {
            color: var(--compcolor);
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .data-box input {
            padding: 10px;
            font-size: 1.1em;
            outline: none;
            border: 0.1pt solid var(--compcolor);
            resize: none;
            border-radius: 10px;
        }

        ::placeholder {
            opacity: 0.3;
            font-size: clamp(0.8em, 2.5vw, 1.1em);
        }

        .data-box input {
            padding: 10px;
            font-size: 1.1em;
            outline: none;
            border: 0.1pt solid var(--compcolor);
            resize: none;
        }

        .data-box label {
            padding: 10px;
            font-size: clamp(0.8em, 2.5vw, 1.1em);
            outline: none;
            border: 0.1pt solid var(--compcolor);
            resize: none;
        }

        .data-box select {
            padding: 10px;
            font-size: 1.1em;
            outline: none;
            border: 0.1pt solid var(--compcolor);
            resize: none;
            border-radius: 10px;
        }

        .textarea-1 {
            padding: 10px;
            font-size: 1.1em;
            outline: none;
            border: 0.1pt solid var(--compcolor);
            resize: vertical;
            min-height: 220px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 10px;
        }

        .textarea {
            padding: 10px;
            font-size: 1.1em;
            outline: none;
            border: 0.1pt solid var(--compcolor);
            resize: vertical;
            min-height: 50px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 10px;
        }

        .data-box input[type="submit"] {
            background-color: #4b4132;
            color: var(--backcolor);
            border: none;
            font-size: clamp(0.8em, 1.2vw, 1.2em);
            max-width: 100%;
            font-weight: 500;
            cursor: pointer;
            padding: 10px 10px;
            border-radius: 5px;
            text-align: center;
            font-family: var(--headfont);
        }

        .data-box input[type="submit"]:hover {
            box-shadow: 0 5px 35px rgba(0, 0, 0, 0.15);
            background-color: #B1A181;
            color: #4b4132;
            transition: 0.6s all;
            cursor: pointer;
        }

        .main-container {
            display: flex;
            width: 100%;
            gap: 1%;
        }

        .dp-box {
            height: 20%;
            width: 20%;
            padding: 2%;

            text-align: center;
        }

        .dp-box img {
            display: inline-block;
            width: 95%;
            height: 95%;
            border-radius: 50%;
            max-width: 100%;
            max-height: 100%;
        }

        .dp-box button {
            margin-top: 10px;
            background-color: #4b4132;
            border-radius: 5px;
            width: 80%;
            font-weight: 500;
            height: 5vh;
            font-size: clamp(0.8em, 1.2vw, 1.2em);
            color: whitesmoke;
        }

        .dp-box button:hover {
            background-color: #B1A181;
            color: #4b4132;
            transition: 0.6s all;
        }

        .msg-box {
            width: 30%;
            height: 100vh;
            text-align: center;
            padding-top: 2%;
        }

        .dp-box p {
            font-family: var(--headfont);
            font-size: clamp(1em, 1.3vw, 1.3em);
            letter-spacing: 1pt;
            line-height: 30px;

        }

        @media (max-width:950px) {
            .sub-form .row50 {
                display: flex;
                gap: 0;
                flex-direction: column;
            }

            .data-box {
                width: 100%;
            }

            .main-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
            }

            .form {
                width: 100%;
            }

            .dp-box {
                width: 100%;
                border-bottom: 0.1pt solid;
                border-image: linear-gradient(to right, transparent, rgba(0, 0, 0, 0.9) 10%, rgba(0, 0, 0, 0.9) 90%, transparent) 1;
            }

            .dp-box img {
                display: inline-block;
                width: 50%;
                height: 50%;
                border-radius: 50%;
                max-width: 40%;
                max-height: 40%;
            }
        }

        /*** The new CSS Reset - version 1.2.0 (last updated 23.7.2021) ***/

        /* Remove all the styles of the "User-Agent-Stylesheet", except for the 'display' property */
        *:where(:not(iframe, canvas, img, svg, video):not(svg *)) {
            all: unset;
            display: revert;
        }

        /* Preferred box-sizing value */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        /*
  
        ol,
        ul {
            list-style: none;
        }

        /* For images to not be able to exceed their container */
        img {
            max-width: 100%;
        }

        /* Removes spacing between cells in tables */
        table {
            border-collapse: collapse;
        }

        /* Revert the 'white-space' property for textarea elements on Safari */
        textarea {
            white-space: revert;
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="dp-box">
            <p class="greeting">
                Welcome
            </p>
            <p class="first-last-name">
                First name Last Name
            </p>
            <img src="./profile-circle-icon-1023x1024-ucnnjrj1.png" alt="profile icon">
            <p class="e-mail">E-mail address</p>
           
        </div>
        <section class="form">
            <h3>Profile Settings</h3>
            <form class="main-form">
                <section class="sub-form">
                    <section class="row50">
                        <section class="data-box">
                            <span>First Name</span>
                            <input type="text" placeholder="First Name" required>
                        </section>
                        <section class="data-box">
                            <span>Last Name</span>
                            <input type="text" placeholder="Last Name" required>
                        </section>
                    </section>
                    <section class="row50">
                        <section class="data-box">
                            <span>Email</span>
                            <input type="email" placeholder="johndoe@email.com" required>
                        </section>
                        <section class="data-box">
                            <span>Contact Number</span>
                            <input type="number" placeholder="+94 -- --- ----" required>
                        </section>
                    </section>

                    <section class="row100">
                        <section class="data-box">
                            <span>Password</span>
                            <input type="number" placeholder="">
                        </section>
                    </section>
                    <section class="row100">
                        <section class="data-box">
                            <span>Registered Date</span>
                            <input type="text">
                        </section>
                    </section>
                    <section class="row100">
                        <section class="data-box">
                            <span>Address Line 01</span>
                            <textarea class="textarea" placeholder=""></textarea>
                        </section>
                    </section>
                    <section class="row100">
                        <section class="data-box">
                            <span>Address Line 02</span>
                            <textarea class="textarea" placeholder=""></textarea>
                        </section>
                    </section>
                    <section class="row100">
                        <section class="data-box">
                            <span>Address Line 03</span>
                            <textarea class="textarea" placeholder=""></textarea>
                        </section>
                    </section>
                    <section class="row100">
                        <section class="data-box">
                            <span>City</span>
                            <textarea class="textarea" placeholder=""></textarea>
                        </section>
                    </section>
                    <section class="row50">
                        <section class="data-box">
                            <span>City</span>
                            <input type="text" placeholder="City">
                            </select>
                        </section>
                        <section class="data-box">
                            <span>Postal Code</span>
                            <input type="number" placeholder="20000">
                        </section>
                    </section>
                    <section class="row100">
                        <section class="data-box">
                            <span>Country</span>
                            <textarea class="textarea" placeholder=""></textarea>
                        </section>
                    </section>
                    <section class="row100">
                        <section class="data-box">
                            <span>Gender</span>
                            <select name="Gender" id="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </section>
                    </section>
                    <section class="row100">
                        <section class="data-box">
                            <input type="submit" value="Update My Profile">
                        </section>
                    </section>
                </section>
            </form> <!--end of the form-->
        </section>
        <div class="msg-box">
            ###advertiesments
        </div>

    </div>
    </section>
</body>

</html>