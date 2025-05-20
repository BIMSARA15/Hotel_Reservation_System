<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Hotel</title>
    <link rel="stylesheet" href="./addhotels2.css">

</head>
<body>

<div class="wave4">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
    </div>

<section class="hotel" id="hotel">

<form action="./insertfinalh.php" method="post">
   <h3>Add a Hotel</h3>
   <div class="flex">
      <div class="box">
        <p>Hotel Name <span>*</span></p>
        <input type="text" name="name" class="input" required > 
            </div>
            <div class="box">
            <p>Hotel ID <span>*</span></p>
            <input type="text" name="id" class="input" required >
              </input>
               </div>
               <div class="box">
            <p>Hotel Email <span>*</span></p>
            <input type="email" name="mail" class="input" required >
              </input>
               </div>
               <div class="box">
            <p>Hotel Number <span>*</span></p>
            <input type="number" name="number" class="input" required >
              </input>
               </div>
               <div class="box">
            <p>Hotel website Link <span>*</span></p>
            <input type="text" name="site" class="input" required >
              </input>
               </div>
   <input type="submit" value="Add Hotel" name="add" class="btn">
</form>
</section>



<!--

--!>