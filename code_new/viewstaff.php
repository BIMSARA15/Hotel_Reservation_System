<!DOCTYPE html>
<html>

<head>
   <title>
      Staff Acounts
   </title>
</head>
<style>
   * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
   }

   body {
      background-color: #00022e;
      overflow-x: hidden;
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
      left: 0%;
   }

   .btn:hover {
      border-radius: 5rem;
      background-color: #DCC69C;
      color: #2B1103;
   }

   table {
      width: 100%;
      position: relative;
      top: 80px;
      height: 120px;
      border-collapse: separate;
      /* Separate borders */
      border-spacing: 5px;
      /* Add spacing between cells */
   }

   td {
      background: linear-gradient(90deg, rgba(165, 164, 161, 0.5) 15%, rgba(255, 255, 255, 0.4) 49%, rgba(144, 141, 141, 0.5) 100%);
      padding: 10px;
      /* Add padding to cells */
      border-radius: 30px;
      text-align: center;
      font-size: 15px;
      width: 150px;
      font-weight: bold;
   }

   .bttn1,
   .bttn2 {
      position: relative;
      text-decoration: none;
      border: none;
      /* Remove border */
      cursor: pointer;
      width: 100%;
      /* Set width to 100% */
      height: 100%;
      /* Set height to 100% */
      background-color: #2B1103;
      color: white;
      transition: .5s linear;
      font-size: 20px;

   }

   .bttn1:hover,
   .bttn2:hover {
      border-radius: 30px;
      /* Apply border radius on hover */
      background-color: #FFA101;
   }

   .crud {
      padding: 0;
      background-color: transparent;
   }

   .bttn1 {
      transition: .5s linear;
   }

   .bttn1:hover {
      border-radius: 30px;
      /* Apply border radius on hover */
      background-color: #49ab81;
      font-weight: bold;
      color: white;
   }

   .bttn2 {

      transition: .5s linear;
   }

   .bttn2:hover {
      border-radius: 30px;
      /* Apply border radius on hover */
      background-color: #C90076;
      font-weight: bold;
      color: white;
   }

   th {
      font-size: 20px;
      background: linear-gradient(90deg, rgba(44, 195, 222, 1) 15%, rgba(16, 175, 124, 1) 100%);
      border-radius: 30px;
      ;

   }

   h1 {
      text-align: center;
      font-size: 100px;
      color: black;
   }
</style>

<body>
   <div class="wave4">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
         <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
   </div>

   <section class="reservation" id="reservation">

      <form action="./staffadd.php" method="post">
         <h3>Add a Staff Account</h3>
         <div class="flex">
            <div class="box">
               <p>Employee ID <span>*</span></p>
               <input type="text" name="id" class="input" required>
               </input>
            </div>
            <div class="box">
               <p>Password <span>*</span></p>
               <input type="password" name="pass" class="input" required>
               </input>
            </div>

            <div class="box">
               <p>Re-enter password<span>*</span></p>
               <input type="password" name="re-pass" class="input" required>
            </div>
            <div class="box">
               <p>Department <span>*</span></p>
               <select name="dname" class="input" required>
                  <option value="Exterenal Hotel representative">Exterenal Hotel representative</option>
                  <option value="Reception">Reception</option>
                  <option value="Admin">Admin</option>
               </select>
            </div>
            <div class="box">
               <p>First Name<span>*</span></p>
               <input type="text" name="fname" class="input" required>
            </div>
            <div class="box">
               <p>Last Name<span>*</span></p>
               <input type="text" name="lname" class="input" required>
            </div>
            <div class="box">
               <p>contact number<span>*</span></p>
               <input type="number" name="num" class="input" required>
            </div>
            <div class="box">
               <p>Email<span>*</span></p>
               <input type="email" name="mail" class="input" required>
            </div>
            <div class="box">
               <p>Hotel <span>*</span></p>
               <select name="hotel" class="input" required>
                  <option value="Hotel Kandurata">Hotel Kandurata</option>
                  <option value="Hotel Araliya">Hotel Araliya</option>
                  <option value="Hotel Ocean">Hotel Ocean</option>
                  <option value="Hotel Helios">Hotel Helios</option>
                  <option value="Hotel Viyamba">Hotel Viyamba</option>
                  <option value="Sigiri Stay">Sigiri Stay</option>
                  <option value="-">None</option>
               </select>
            </div>
            <br><br><br>
            <input type="submit" value="Add account" name="check" class="btn">
      </form>
   </section>
   <table>
      <tr>
         <th>Employee ID</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Email</th>
         <th>Contact Number</th>
         <th>Password</th>
         <th>Department </th>
         <th>Hotel </th>
      </tr>
      <?php
      require('./config.php');
      $query = "SELECT * FROM staff_acc";
      $res = mysqli_query($con, $query);
      if (mysqli_num_rows($res) > 0) {
         while ($row = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td>" . $row['acc_id'] . "</td>";
            echo "<td>" . $row['fname'] . "</td>";
            echo "<td>" . $row['lname'] . "</td>";
            echo "<td>" . $row['mail'] . "</td>";
            echo "<td>" . $row['num'] . "</td>";
            echo "<td>" . $row['pass'] . "</td>";
            echo "<td>" . $row['dep'] . "</td>";
            echo "<td>" . $row['hotel'] . "</td>";
            echo "<td class='crud'>";
            $id = $row['acc_id'];
            echo "<button class='bttn2' onclick=\"location.href='deleteacc.php?id=$id'\">Delete</button>";
            echo "</td>";
         }
      } else {
         echo "<tr><td colspan='7'>Empty set</td></tr>";
      }

      ?>
   </table>

</body>

</html>