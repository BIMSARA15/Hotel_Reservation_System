<!DOCTYPE html>
<html>

<head>
   <title>
      Add a reservation
   </title>
   <style>
      * {
         padding: 0;
         margin: 0;
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
         height: 123px;
         z-index: 6;
      }

      .wave4 .shape-fill {
         fill: #FAE6B1;
      }

      .reservation form {
         position: relative;
         top: 10px;
         border: .1rem solid rgba(220, 198, 156, .3);
         padding: 2rem;
      }

      .reservation form .flex {
         display: flex;
         flex-wrap: wrap;
         gap: 1.5rem;
      }

      .reservation form h3 {
         background-color: #DCC69C;
         color: #2B1103;
         font-size: 2.5rem;
         margin-bottom: 2rem;
         border-radius: .5rem;
         padding: 1.2rem;
         text-align: center;
         text-transform: capitalize;
      }

      .reservation form .flex .box {
         flex: 1 1 40rem;
      }

      .reservation form .flex .box p {
         font-size: 1.8rem;
         color: #DCC69C;
      }

      .reservation form .flex .box .input {
         padding: 1rem 0;
         margin: 1rem 0;
         border-bottom: .1rem solid rgba(220, 198, 156, .3);
         background: #2B1103;
         color: #fff;
         font-size: 1.8rem;
         width: 100%;
      }

      .reservation form .flex .box input[type="date"]::-webkit-calendar-picker-indicator {
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
         left: 40%;
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

   <section class="reservation" id="reservation">

      <form action="./updatereservatonf.php" method="post">
         <h3>Update a reservation</h3>
         <div class="flex">
            <div class="box">
               <p>reservation ID <span>*</span></p>
               <input type="text" name="id" class="input" required>
               </input>
            </div>
            <div class="box">
               <p>Passport number <span>*</span></p>
               <input type="text" name="pass" class="input" required>
               </input>
            </div>
            <div class="box">
               <p>Hotel Name <span>*</span></p>
               <select name="Name" class="input" required>
                  <option value="Hotel Kandurata">Hotel Kandurata</option>
                  <option value="Hotel Araliya">Hotel Araliya</option>
                  <option value="Hotel Ocean">Hotel Ocean</option>
                  <option value="Hotel Helios">Hotel Helios</option>
                  <option value="Hotel Viyamba">Hotel Viyamba</option>
                  <option value="Sigiri Stay">Sigiri Stay</option>

               </select>
            </div>
            <div class="box">
               <p>Location <span>*</span></p>
               <select name="location" class="input" required>
                  <option value="Kandy">Kandy</option>
                  <option value="Sigirya">Sigirya</option>
                  <option value="Nilaweli">Nilaweli</option>
               </select>
            </div>
            <div class="box">
               <p>Check in <span>*</span></p>
               <input type="date" name="check_in" class="input" required>
            </div>
            <div class="box">
               <p>Check out <span>*</span></p>
               <input type="date" name="check_out" class="input" required>
            </div>
            <div class="box">
               <p>Adults <span>*</span></p>
               <select name="adults" class="input" required>
                  <option value="1">1 adult</option>
                  <option value="2">2 adults</option>
                  <option value="3">3 adults</option>
                  <option value="4">4 adults</option>
                  <option value="5">5 adults</option>
                  <option value="6">6 adults</option>
               </select>
            </div>
            <div class="box">
               <p>Childs <span>*</span></p>
               <select name="childs" class="input" required>
                  <option value="-">0 child</option>
                  <option value="1">1 child</option>
                  <option value="2">2 childs</option>
                  <option value="3">3 childs</option>
                  <option value="4">4 childs</option>
                  <option value="5">5 childs</option>
                  <option value="6">6 childs</option>
               </select>
            </div>
            <div class="box">
               <p>Rooms <span>*</span></p>
               <select name="rooms" class="input" required>
                  <option value="1">1 room</option>
                  <option value="2">2 rooms</option>
                  <option value="3">3 rooms</option>
                  <option value="4">4 rooms</option>
                  <option value="5">5 rooms</option>
                  <option value="6">6 rooms</option>
               </select>
            </div>
         </div>
         <input type="submit" value="Update reservation" name="check" class="btn">
      </form>
   </section>
</body>

</html>