<!DOCTYPE html>
<html>

<head>
    <title>
        Sigiri Hotels
    </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Puppies+Play&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
            height: 300px;
            margin: 0;
            padding: 0;
            background-color: #31525B;

        }
        *::selection{
    background-color:#2B1103;
    color:aliceblue;
 }
 
 *::-webkit-scrollbar{
    height: .5rem;
    width: 1rem;
 }
 
 *::-webkit-scrollbar-track{
    background-color: transparent;
 }
 
*::-webkit-scrollbar-thumb{
    background-color:white;
    border-radius: 5rem;
 }

        #back {
            height: max-content;
            background-image: url("./img/sigiriya2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            padding: 0;
            margin-top: 0;
            object-fit: fill;
            height: 800px;
            position: relative;
            top: -15px;
            background-attachment: fixed;
            height: 870px;
        }

        .text {

            position: relative;
            top: 100px;
            left: 40px
        }

        .text h1 {
            font-size: 410px;
            color: whitesmoke;
            font-family: "Puppies Play", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .kandynav {
            background: linear-gradient(to top, rgba(35, 34, 34, 0.8) 0%, rgba(0, 0, 0, 0.314) 50%);
            width: 820px;
            border-radius: 30px;
            right: 23%;
            z-index: 60;
        }

        .kandynav ul {
            list-style: none;
            padding: 0;
            margin-top: 15px;
        }

        .kandynav li {
            justify-content: space-between;
            align-items: center;
            display: inline-block;
            list-style: none;
            padding: 26px 30px;
            transition: .5s linear;

        }

        .kandynav a {
            text-decoration: none;
            display: block;
            padding: 15px;
            font-size: 17px;
            color: aliceblue;
        }

        .kandynav li:hover {
            background-color: #FFA101;
            border-radius: 30%;
            transform: translateY(-10px);



        }

        .kandynav a:hover {
            color: #31525B;
            font-weight: bold;
        }

        .slider {

            display: flex;
            width: 550px;
            height: 450px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scroll-behavior: smooth;
            background-position: center;
            box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
            border-radius: 30px;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .slider::-webkit-scrollbar {
            display: none;
        }

        .slider-wrapper {
            position: relative;
            max-width: 48rem;
            margin: 0 auto;
        }

        .container {
            position: relative;
            top: -55vh;
            left: 58vw;

        }

        .slider img {
            flex: 1 0 100%;
            scroll-snap-align: start;
            object-fit: cover;
        }

        .slider-nav {
            display: flex;
            justify-content: center;
            position: absolute;
            bottom: 1.25rem;
            left: 0;
            right: 0;
            margin: auto;
            z-index: 1;
            height: 80px
        }

        .slider-nav a {

            width: 0.5rem;
            height: 0.5rem;
            border-radius: 50%;
            background-color: white;
            opacity: 0.75;
            transition: opacity ease 250ms;
            margin: 0 0.25rem;
            cursor: pointer;
            position: relative;
            left: -450px;
            top: 60px;
        }

        #back {
            animation-name: slideBackground;
            animation-duration: 1s;
            animation-timing-function: ease;
        }

        @keyframes slideBackground {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 100% 0;
            }
        }

        .slider-nav a:hover {
            opacity: 1;
        }

        .wave {
            position: relative;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
            top: -98px;

        }

        .wave svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 85px;
            transform: rotateY(180deg);
        }

        .wave .shape-fill {
            fill: #FAE6B1;
        }

        .container2 {
            background-color: #FAE6B1;
            padding-top: 0;
            margin-top: 0;
            position: relative;
            top: -98px
        }

        .wave2 {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            top: -98px
        }

        .wave2 svg {
            position: relative;
            display: block;
            width: calc(122% + 1.3px);
            height: 123px;
            z-index: 1;
        }

        .wave2 .shape-fill {
            fill: #FAE6B1;
        }

        .container2 h1 {
            height: 300px;
            font-size: 80px;
            text-align: center;
            position: relative;
            top: 120px
        }

        .gen {
            height: max-content;
            background-image: url("./img/sigiriya3.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            padding: 100;
            margin: 10;
            object-fit: fill;
            position: relative;
            height: 800px;
            top: -219px;
            overflow-y: hidden;
            overflow-x: hidden;
            display: flex;
            background-attachment: fixed;
            filter: blur(0px);
        }

        .gen::after {
            content: "";
            width: 100%;
            height: 100%;
            position: relative;
            position: absolute;
            background: black;
            opacity: 0.5;
            top: 0.5px;
            right: 0px
        }

        .gen h1 {
            position: relative;
            color: #FFA101;
            top: 40px;
            right: -100px;
            font-size: 150px;
            z-index: 5;
        }

        #para5 {
            color: white;
            position: relative;
            top: 150px;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
            z-index: 1;
            width: 600px;
            font-family: Arial, Helvetica, sans-serif;
            right: -80px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8)80%, rgba(0, 0, 0, 0.8)5%);
            border-radius: 30px;
            padding: 40px;
            padding-bottom: 80px;
        }

        .bttn5 {
            font-size: 50px;
            height: 500px;
            width: 600px;
            position: relative;
            top: 150px;
            right: -80px;
            z-index: 50;
            font-size: 30px;
            background-image: url('./img/sigiri_hotel1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-weight: bold;
            color: transparent;
            transition: .5s linear;
            margin-right: 20px;
            border: 2px solid white;
        }

        .bttn5:hover {
            background-color: #FFA101;
            border-radius: 30px;
            background-image: none;
            color: #31525B;
            font-weight: bold;
            border-color: transparent;
            cursor: pointer;
        }

        .bttn6 {
            height: 500px;
            width: 600px;
            position: relative;
            top: 150px;
            right: -180px;
            z-index: 50;
            margin-left: 20px;
            font-size: 30px;
            background-image: url('./img/sigiri_hotel2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-weight: bold;
            color: transparent;
            transition: .5s linear;
            border: 2px solid white;
           
        }



        .bttn6:hover {
            background-color: #FFA101;
            border-radius: 30px;
            background-image: none;
            transition: .5s linear;
            color: #31525B;
            font-weight: bold;
            border-color: transparent;
            cursor: pointer;
        }

        .social-menu ul {
            position: absolute;
            top: 250px;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 0;
            margin: 0;
            display: flex;
        }

        .social-menu ul li {
            list-style: none;
            margin: 0 10px;
        }

        .social-menu ul li .fa {
            color: #000000;
            font-size: 25px;
            line-height: 50px;
            transition: .5s;
        }

        .social-menu ul li .fa:hover {
            color: #ffffff;
        }

        .social-menu ul li a {
            position: relative;
            display: block;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: white;
            text-align: center;
            transition: 0.5s;
            transform: translate(0, 0px);
            box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.5);
        }

        .social-menu ul li a:hover {
            transform: rotate(0deg) skew(0deg) translate(0, -10px);
        }


        .c1 {
            background-image: url("./img/facebook.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-color: transparent;
            background-position: center;
        }

        .c2 {
            background-image: url("./img/linkdin.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-color: transparent;
            background-position: center;

        }

        .c3 {
            background-image: url("./img/X.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-color: transparent;
            background-position: center;

        }

        .c4 {
            background-image: url("./img/inta.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-color: transparent;
            background-position: center;

        }

        .nav2 {
            border: .1rem solid rgba(220, 198, 156, .3);
            width: 910px;
            border-radius: 30px;
            right: -33%;
            z-index: 60;
            position: relative;
        }

        .nav2 ul {
            list-style: none;
            padding: 0;
            margin-top: 15px;
            border: .1rem solid rgba(220, 198, 156, .3);
        }

        .nav2 li {
            justify-content: space-between;
            align-items: center;
            display: inline-block;
            list-style: none;
            padding: 26px 30px;
            transition: .5s linear;
            border: .1rem solid rgba(220, 198, 156, .3);

        }

        .nav2 a {
            text-decoration: none;
            display: block;
            padding: 15px;
            font-size: 20px;
            color: aliceblue;
            border: .1rem solid rgba(220, 198, 156, .3);
        }

        .nav2 li:hover {
            background-color: rgb(43, 17, 3);
            border-radius: 30%;
            transform: translateY(-10px);



        }

        .nav2 a:hover {
            color: #DCC69C;
            font-weight: bold;
        }

        .wave7 {
            position: relative;
            bottom: 0;
            top: -328px;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;

            z-index: 5;
        }

        .wave7 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 119px;
        }

        .wave7 .shape-fill {
            fill: #DCC69C;
        }

        .footer {
            background-color: #DCC69C;
            z-index: 10;
            position: relative;
            top: -329px;
            height: 300px
        }
    </style>
</head>

<body>
    <section id="back" class="backbb">
        <center>
            <div style="padding-top: 10%;">

            </div>
        </center>
        <span class="text">
            <h1>Sigiriya</h1>
        </span>
        <section class="container">
            <div class="slide-wrapper">
                <div class="slider">
                    <img id="slide-1" src="./img/sigiriya2.jpg" />
                    <img id="slide-2" src="./img/sigiri1.jpg">
                    <img id="slide-3" src="./img/sigiriya3.jpg" />
                    <img id="slide-4" src="./img/sigiriya4.jpg" />
                    <img id="slide-5" src="./img/sigiriya5.jpg" />
                    <img id="slide-6" src="./img/sigriya6.jpg" />


                    <div class="slider-nav">
                        <a href="#slide-1" onclick="slides('slider-1')"></a>
                        <a href="#slide-2" onclick="slides('slider-2')"></a>
                        <a href="#slide-3" onclick="slides('slider-3')"></a>
                        <a href="#slide-4" onclick="slides('slider-4')"></a>
                        <a href="#slide-5" onclick="slides('slider-5')"></a>
                        <a href="#slide-6" onclick="slides('slider-6')"></a>
                        <a href="#slide-7" onclick="slides('slider-7')"></a>
                    </div>
                </div>
            </div>


            <script src="./js library/library.js"></script>
            <script>
                const b = document.querySelector(".backbb");
                const tl = gsap.timeline({
                    paused: true
                }); // Pausing the timeline by default

                function slides(name) {
                    var backDiv = document.getElementById("back");
                    if (name == "slider-1") {
                        backDiv.style.backgroundImage = "url('./img/sigiriya2.jpg')";
                    } else if (name == "slider-2") {
                        backDiv.style.backgroundImage = "url('./img/sigiri1.jpg')";
                    } else if (name == "slider-3") {
                        backDiv.style.backgroundImage = "url('./img/sigiriya3.jpg')";
                    } else if (name == "slider-4") {
                        backDiv.style.backgroundImage = "url('./img/sigiriya4.jpg')";
                    } else if (name == "slider-5") {
                        backDiv.style.backgroundImage = "url('./img/sigiriya5.jpg')";
                    } else if (name == "slider-6") {
                        backDiv.style.backgroundImage = "url('./img/sigriya6.jpg')";
                    } else {
                        alert("Invalid!!");
                    }

                    tl.fromTo(b, {
                        opacity: 0
                    }, {
                        opacity: 1,
                        duration: 1
                    }).play(); // animation when triggered
                }
            </script>

            </script>
            </div>
        </section>
    </section>
    <div class="wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>


    <section class="container2">
        <h1>Our Top Hotels are </h1>
    </section>
    <div class="wave2">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="gen" id="genb">

        <a href="sigiri_hotel1.php"><button id="btn5" class="bttn5" a href="#"> Sigiri Stay </button></a>

        <a href="sigiri_hotel2.php"><button id="btn5" class="bttn6" a href="#"> Hotel Viyamba </button></a>

    </div>
    <div class="wave7">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="footer">
    <div class="nav2">
        <ul>

        <li><a href="homepage.php"> Home</a></li>
        <li><a href="destinations.php"> Destinations</a></li>
        <li><a href="aboutus.php"> About Us</a></li>

</ul>
</div>

   <div class="social-menu">
        <ul>
        <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="c1"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.linkedin.com/learning-login/" class="c2"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://twitter.com/i/flow/login" class="c3"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.instagram.com/accounts/login/" class="c4"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
    
</body>

</html>