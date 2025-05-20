<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Admin Dashboard</title>
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Allura&family=Julee&family=Kings&family=Protest+Revolution&family=Puppies+Play&family=Quintessential&family=Rock+Salt&family=Waiting+for+the+Sunrise&display=swap');

      :root {
         --main-color: #2B1103;
         --sub-color: #666;
         --white: #fff;
         --border: .1rem solid var(--sub-color);
      }

      * {
         font-family: 'Montserrat', sans-serif;
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         outline: none;
         border: none;
         text-decoration: none;
      }

      body {
         background-image: url('./img/adminback.webp');
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
      }

      html {
         font-size: 62.5%;
         overflow-x: hidden;
         scroll-behavior: smooth;
         scroll-padding-top: 2rem;
      }

      section {
         padding: 3rem 2rem;
         max-width: 1200px;
         margin: 0 auto;
      }

      .heading {
         margin-bottom: 2rem;
         text-align: center;
         text-transform: capitalize;
         color: #2B1103;
         font-size: 120px;
         font-family: "Allura", cursive;
         font-weight: 500;
         font-style: normal;
      }

      .btn {
         display: inline-block;
         position: relative;
         cursor: pointer;
         padding: 1rem 3rem;
         font-size: 1.8rem;
         color: var(--white);
         text-align: center;
         text-transform: capitalize;
         transition: .5s linear;
         margin-top: 1rem;
         border: .1rem solid var(--sub-color);
         background-color: #2B1103;
         top: 100px;
         height: 50px;
         padding-top: 10px;
         align-items: justify;
      }

      .btn:hover {
         border-radius: 5rem;
         background-color: #FFA101;
      }



      .dashboard .box-container {
         position: relative;
         top: 7.4rem;
         display: flex;
         align-items: flex-start;
         justify-content: center;
         gap: 1.5rem;

      }

      .dashboard .box-container .box {
         height: 400px;
         text-align: center;
         border-radius: .5rem;
         border: var(--border);
         background-color: #2B1103;
         padding: 2rem;
         transition-duration: .5s;
      }

      .dashboard .box-container h3 {
         font-size: 50px;
         color: #2B1103;
         padding-bottom: 1rem;
      }

      .dashboard .box-container .lotus {
         background-image: url('./img/lotus.png');
         background-repeat: no-repeat;
         background-size: cover;
         height: 200px;
         border-radius: .5rem;
      }

      .dashboard .box-container .box:hover {
         background-color: bisque;
      }

      .grid .box-container {
         display: grid;
         grid-template-columns: repeat(auto-fit, 35rem);
         align-items: flex-start;
         justify-content: center;
         gap: 1.5rem;
      }

      .grid .box-container .box {
         border-radius: .5rem;
         padding: 2rem;
         padding-top: 1rem;
         border: var(--border);
         overflow-x: hidden;
      }

      .grid .box-container .box p {
         line-height: 1.5;
         padding: .5rem 0;
         font-size: 1.8rem;
         color: var(--sub-color);
         white-space: pre-line;
         text-overflow: ellipsis;
         overflow-x: hidden;
      }

      .grid .box-container .box p span {
         color: #2B1103;
      }

      /* media queries  */
     

      @media (max-width:450px) {

         html {
            font-size: 55%;
         }

         .header .flex .logo {
            font-size: 2rem;
         }

         .dashboard .box-container {
            grid-template-columns: 1fr;
         }

         .grid .box-container {
            grid-template-columns: 1fr;
         }

      }
   </style>

</head>

<body>

   <section class="dashboard">

      <h1 class="heading"> Admin dashboard</h1>

      <div class="box-container">

         <div class="box">

            <h3></h3>
            <div class="lotus"></div>
            <a href="hotels.php" class="btn">Manage hotels</a>
         </div>

         <div class="box">

            <h3></h3>
            <div class="lotus"></div>
            <a href="./bookings.php" class="btn">view bookings</a>
         </div>

         <div class="box">

            <h3></h3>
            <div class="lotus"></div>
            <a href="viewstaff.php" class="btn">view Employees</a>
         </div>

         <div class="box">

            <h3></h3>
            <div class="lotus"></div>
            <a href="adminmsg.php" class="btn">view messages</a>
         </div>
      </div>
   </section>
</body>

</html>