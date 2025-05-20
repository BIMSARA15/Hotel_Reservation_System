<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serendib Reservations</title>
    <style>
        header{
            background:#333;
        }
        footer{
            right:10px;
            width:100%;
            position:relative;
            top:-220px;
            background:#333;
        }
        body{
            height:500px;
        }
         .wave2 {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            top: -190px
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
        
        .wave7 {
            position: relative;
            bottom: 0;
            top:-420px;
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
            fill: #333;
        }
        .container2 {
            background-color: #FAE6B1;
            padding-top: 0;
            margin-top: 0;
            position: relative;
            top: -100px
        }    
         .container2 h1 {
            height: 300px;
            font-size: 80px;
            text-align: center;
            position: relative;
            top: 80px
        }

        .gen {
            height: max-content;
            background-image: url("./img/kandy4.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            padding: 100;
            margin: 10;
            object-fit: fill;
            position: relative;
            height: 800px;
            top: -310px;
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
        .bttn5 {
            font-size: 50px;
            height: 400px;
            width: 400px;
            position: relative;
            top: 150px;
            right: -80px;
            z-index: 50;
            font-size: 30px;
            background-image: url('./img/back1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-weight: bold;
            color: transparent;
            transition: .5s linear;
            margin-right: 20px;
            border: 2px solid white;
            /* Use border property to set border color */
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
            height: 400px;
            width: 400px;
            position: relative;
            top: 150px;
            right: -100px;
            z-index: 50;
            margin-left: 20px;
            font-size: 30px;
            background-image: url('./img/sigiriya2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            /* Change this to an initial background color */
            font-weight: bold;
            color: transparent;
            transition: .5s linear;
            border: 2px solid white;
            /* Use border property to set border color */
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

        .bttn7 {
            height: 400px;
            width: 400px;
            position: relative;
            top: 150px;
            right: -135px;
            z-index: 50;
            margin-left: 20px;
            font-size: 30px;
            background-image: url('./img/nilaveli6.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            /* Change this to an initial background color */
            font-weight: bold;
            color: transparent;
            transition: .5s linear;
            border: 2px solid white;
            /* Use border property to set border color */
        }



        .bttn7:hover {
            background-color: #FFA101;
            border-radius: 30px;
            background-image: none;
            transition: .5s linear;
            color: #31525B;
            font-weight: bold;
            border-color: transparent;
            cursor: pointer;
        }

        </style>
</head>

<body>
    <header>
        <?php include "header.php" ?>
    </header>
    <section class="pickone">
        <section class="container2">
            <h1>Select your Destination </h1>
        </section>
        </div>
        <div class="wave2">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
        <div class="gen" id="genb">
    
        <a href="./kandy.php"><button id="btn5" class="bttn5"> Kandy </button></a>
        <a href="./sigiri.php"><button id="btn5" class="bttn6" > Sigiriya </button></a>
        <a href="./nilaweli.php"><button id="btn7" class="bttn7" > Nilaweli </button></a>
    
        </div>
        <div class="wave7">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

    </section>

    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>