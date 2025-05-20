<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serendib Reservations</title>
    <link rel="stylesheet" href="hom page.css">
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container-oggy">
        <div style=" font-family: Quicksand;">
            <!-- padding -->
            <div>
                <!-- navigetion -->
                <nav class="navbar">
                    <div class="logo">Serendib Resevations</div>
                    <ul class="nav-links">
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="destinations.php">Destinations</a></li>
                        <li><a href="contact us.php">Contact</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div style="width: 100%; display: flex; flex-direction: row; padding: 0.5%;">
            <!-- padding -->
            <div style="height: 100vh; flex: 2; display: flex; flex-direction: column;">
                <!-- column for logo -->
                <div style="flex: 5; ">
                    <!-- padding -->
                </div>
                <div style="flex: 5;" class="logo-oggy">
                </div>
                <div style="flex: 1; justify-content: center;">
                    <!-- text -->
                    <h1 class="text-oggy" style="text-align: center;">Welcome to Serendib Reservations</h1>
                </div>
                <div style="flex: 5; ">
                    <!-- padding -->
                </div>
            </div>
            <div style="flex: 3; height: 100vh; display: flex; flex-direction: column;">
                <!-- column for signupform -->
                <div style="flex: 1;">
                    <!-- padding -->
                </div>
                <div style="flex: 5; " id="signUpBox" class="">
                    <!-- div for signupform -->
                    <div style=" display: flex; flex-direction: column; background-color: #31525B; border-radius: 5%; padding: 0.5%;  background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(49, 82, 91, 0.314) 50%);">
                        <div style="flex: 1; padding-top:1% ; align-items: center;">
                            <p class="text-oggy-2">Create New Account</p>
                        </div>

                        <div class="text-oggy-3" style="  height: 20px; " id="msg">
                            <!--alerts-->
                        </div>
                        <div style="padding: 0.5%; padding-left: 5%; padding-bottom: 0.5%;">
                            <!-- first name and last name  -->
                            <div style="display: flex; flex-direction: row; justify-content: baseline; align-items: baseline; ">
                                <div style="width: 100%; display: flex; flex-direction: column;">
                                    <label style="flex: 1;" class="text-oggy-3">First name</label>
                                    <input style="flex: 1;" class="text-oggy-3" type="text" id="fname" />
                                </div>
                                <div style="width: 100%; display: flex; flex-direction: column; padding-left: 20%;">
                                    <label style="flex: 1;" class="text-oggy-3">Last name</label>
                                    <input style="flex: 1;" class="text-oggy-3" type="text" id="lname" />
                                </div>
                            </div>

                        </div>

                        <div style="padding: 0.5%; display: flex; flex-direction: column;  padding-left: 5%;">
                            <!-- email  -->
                            <label style="flex: 1; " class="text-oggy-3">Email</label>
                            <input width="80%" type="email" class="text-oggy-3" placeholder="ex:- john@gmail.com" id="email" />
                        </div>

                        <div style="padding: 0.5%; display: flex; flex-direction: column;  padding-left: 5%;">
                            <!-- email  -->
                            <label style="flex: 1; " class="text-oggy-3">Passport ID</label>
                            <input width="80%" type="email" class="text-oggy-3" placeholder="ex:- Cxxxxxxxx" id="pid" />
                        </div>

                        <div style="padding: 0.5%; display: flex; flex-direction: column;  padding-left: 5%; padding-left: 5%; padding-bottom: 0.5%;">
                            <!-- pw  -->
                            <label style="flex: 1;" class="text-oggy-3">Password</label>
                            <input type="password" style="flex: 1;" class="text-oggy-3" placeholder="ex:- **********" id="password" />
                        </div>
                        <div style="padding-left: 5%; ">
                            <!-- mobile and gender  -->
                            <div style="display: flex; flex-direction: row; justify-content: baseline; align-items: baseline; ">
                                <div style="width: 100%; display: flex; flex-direction: column;">
                                    <label style="flex: 1;" class="text-oggy-3">Mobile</label>
                                    <input style="flex: 1;" class="text-oggy-3" type="text" placeholder="ex:- +94-xxxxxxxxx" id="mobile" />
                                </div>
                                <div style="width: 100%; display: flex; flex-direction: column; padding-left: 20%;">
                                    <label style="flex: 1;" class="text-oggy-3">Gender</label>
                                    <select id="gender">
                                        <option class="text-oggy-3" disabled selected value>Enter your gender</option>
                                        <?php

                                        include "connection.php";

                                        $rs = Database::search("SELECT * FROM `gender`");
                                        $n = $rs->num_rows;

                                        for ($x = 0; $x < $n; $x++) {
                                            $d = $rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo $d["gender_id"]; ?>"><?php echo $d["gender_name"]; ?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style=" padding: 0.5%; padding-top: 2%; ">
                            <!-- adress  -->
                            <label style="flex: 1;" class="text-oggy-3">Address</label>
                            <div style="display: flex; flex-direction: row; justify-content: baseline; align-items: baseline; ">
                                <div style="width: 100%; display: flex; flex-direction: column;">
                                    <label style="flex: 1;" class="text-oggy-3">Address line 01</label>
                                    <input style="flex: 1;" class="text-oggy-3" type="text" id="adress-line-01" />
                                </div>
                                <div style="width: 100%; display: flex; flex-direction: column; padding-left: 20%;">
                                    <label style="flex: 1;" class="text-oggy-3">Address line 02</label>
                                    <input style="flex: 1;" class="text-oggy-3" type="text" id="adress-line-02" />
                                </div>
                            </div>
                            <div style="display: flex; flex-direction: row; justify-content: baseline; align-items: baseline; ">
                                <div style="width: 100%; display: flex; flex-direction: column;">
                                    <label style="flex: 1;" class="text-oggy-3">Address line 03</label>
                                    <input style="flex: 1;" class="text-oggy-3" type="text" id="adress-line-03" />
                                </div>
                                <div style="width: 100%; display: flex; flex-direction: column; padding-left: 20%;">
                                    <label style="flex: 1;" class="text-oggy-3">City</label>
                                    <input style="flex: 1;" class="text-oggy-3" type="text" id="city" />
                                </div>
                            </div>

                            <div style=" display: flex; flex-direction: row; ">
                                <div style="width: 100%;  display: flex; flex-direction: column;">
                                    <label style="flex: 1;" class="text-oggy-3">Postal code</label>
                                    <input style="flex: 1; width: 100%;" class="text-oggy-3" type="text" id="postal-code" />
                                </div>
                                <div style="width: 100%; display: flex; flex-direction: column; padding-left: 20%;">
                                    <label style="flex: 1;" class="text-oggy-3">Country</label>
                                    <select id="country">
                                        <option class="text-oggy-3" disabled selected value>Enter your Country</option>
                                       <?php



                                        $rs = Database::search("SELECT * FROM `country`");
                                        $n = $rs->num_rows;

                                        for ($x = 0; $x < $n; $x++) {
                                            $d = $rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo $d["cid"]; ?>"><?php echo $d["country"]; ?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                            </div>


                            <div style="padding: 0.5%; padding-bottom: 0.5%; padding-left: 10%; padding-right: 10%;">
                                <!-- sign up sign in box  -->
                                <div style="display: flex; flex-direction: column;">
                                    <button onclick="signUp();">Sign Up</button>
                                </div>

                                <div style="display: flex; flex-direction: column;">
                                    <button onclick=" changeView();">Already have an account? Sign In</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div style="flex: 5; padding-top:19% " class="display-not" id="signInBox">
                    <!-- div for signIn form -->
                    <div style=" display: flex; flex-direction: column; background-color: #31525B; border-radius: 5%; padding: 0.5%;  background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(49, 82, 91, 0.314) 50%);">
                        <div style="flex: 1; padding-top:1% ; align-items: center;">
                            <p class="text-oggy-2">Sign In</p>
                        </div>

                        <div class="text-oggy-3" style="  height: 20px; " id="msg2">
                            <!--alerts-->
                        </div>
                        <div style="padding: 0.5%; padding-left: 5%; padding-bottom: 0.5%;">
                            <!-- padding  -->

                        </div>

                        <div style="padding: 0.5%; display: flex; flex-direction: column; padding-right: 5%;  padding-left: 5%;">
                            <!-- email  -->
                            <label style="flex: 1; " class="text-oggy-3">Email</label>
                            <input width="80%" type="email" class="text-oggy-3" placeholder="ex:- john@gmail.com" id="email2" />
                        </div>


                        <div style="padding: 0.5%; display: flex; flex-direction: column;  padding-left: 5%; padding-right: 5%; padding-bottom: 0.5%;">
                            <!-- pw  -->
                            <label style="flex: 1;" class="text-oggy-3">Password</label>
                            <input type="password" style="flex: 1;" class="text-oggy-3" placeholder="ex:- **********" id="password2" />
                        </div>
                        <div>
                            <div style="display: flex;  flex-direction:row; margin-top: 2%">
                                <input style=" margin-left: 10%; " type="checkbox" id="rememberme">
                                <h3>Remember me</h3>
                            </div>
                            <div style="padding-left:80%">

                                <a href="forgotPassword.php">forgot password?</a>
                            </div>
                        </div>

                        <div style=" padding: 0.5%; padding-top: 2%; ">

                            <div style="padding: 0.5%; padding-bottom: 0.5%; padding-left: 10%; padding-right: 10%;">
                                <!-- sign up sign in box  -->
                                <div style="display: flex; flex-direction: column;">
                                    <button onclick="signIn();">Sign In</button>
                                </div>

                                <div style="display: flex; flex-direction: column;">
                                    <button onclick="changeView();">Dont have an account? Sign up</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div style="flex: 1; padding-bottom: 10%;">
                    <!-- padding -->
                </div>


            </div>
        </div>
    </div>
    <script src="indexres.js"></script>
</body>

</html>