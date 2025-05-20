<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add a Hotel</title>
   <style>
      * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;

      }
      body {
         background-color: #00022e;
      }

      .wave4 {
         position: relative;
         top: 0;
         left: 0;
         width: 100%;
         overflow: hidden;
         line-height: 0;
         top: 0px;
      }

      .wave4 svg {
         position: relative;
         display: block;
         width: calc(122% + 1.3px);
         height: 160px;
         z-index: 6;
      }

      .wave4 .shape-fill {
         fill: #FAE6B1;
      }

      .hotel form {
         position: relative;
         top: 200px;
         border: .1rem solid rgba(220, 198, 156, .3);
         padding: 2rem;
      }

      .hotel form .flex {
         display: flex;
         flex-wrap: wrap;
         gap: 1.5rem;
      }

      .hotel form h3 {
         background-color: #DCC69C;
         color: #2B1103;
         font-size: 2.5rem;
         margin-bottom: 2rem;
         border-radius: .5rem;
         padding: 1.2rem;
         text-align: center;
         text-transform: capitalize;
      }

      .hotel form .flex .box {
         flex: 1 1 40rem;
      }

      .hotel form .flex .box p {
         font-size: 1.8rem;
         color: #DCC69C;
      }

      .hotel form .flex .box .input {
         padding: 1rem 0;
         margin: 1rem 0;
         border-bottom: .1rem solid rgba(220, 198, 156, .3);
         background: #2B1103;
         color: #fff;
         font-size: 1.8rem;
         width: 100%;
      }

      .hotel form .flex .box input[type="date"]::-webkit-calendar-picker-indicator {
         filter: invert(1);
      }

      .btn {
         display: inline-block;
         cursor: pointer;
         padding: 1rem 3rem;
         border: .1rem solid rgba(220, 198, 156, .3);
         ;
         font-size: 1.8rem;
         color: #DCC69C;
         text-align: center;
         text-transform: capitalize;
         transition: .2s linear;
         margin-top: 1rem;
         background-color: #2B1103;
         position: relative;
         left: 0%;
      }

      .btn:hover {
         border-radius: 5rem;
         background-color: #DCC69C;
         color: #2B1103;
      }
   </style>

</head>

<body>

<div class="wave4">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
         <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
   </div>

   <section class="hotel" id="hotel">

      <form action="./updatehfinal.php" method="post">
         <h3>Add a Hotel</h3>
         <div class="flex">
            <div class="box">
               <p>Hotel Name <span>*</span></p>
               <input type="text" name="name" class="input" required>
            </div>
            <div class="box">
               <p>Hotel ID <span>*</span></p>
               <input type="text" name="id" class="input" required>
               </input>
            </div>
            <div class="box">
               <p>Hotel Email <span>*</span></p>
               <input type="email" name="mail" class="input" required>
               </input>
            </div>
            <div class="box">
               <p>Hotel Number <span>*</span></p>
               <input type="number" name="number" class="input" required>
               </input>
            </div>
            <div class="box">
               <p>Hotel website Link <span>*</span></p>
               <input type="text" name="site" class="input" required>
               </input>
            </div>
            <input type="submit" value="Update Hotel" name="update" class="btn">
      </form>
   </section>



   <!--