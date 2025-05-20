<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css"> <!-- Linking CSS file -->
    <style>
        body{
    width: 100%;
    height: 100vh;
    height:300px;
    margin: 0;
    padding: 0;
    background-color: #31525B;
}

.container-oggy {
    background-image: url('img/back2.jpg');
    background-size: cover; 
    background-position: center; 
    height: 100vh; 
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #222;
    padding: 20px;
    color: #fff;
    font-family:Quicksand;
  }
  
  .logo {
    font-size: 24px;
    font-weight: bold;
  }

  .logo:hover{
    color: #FFA101;
  }
  
  .nav-links {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  .nav-links li {
    display: inline;
    margin-left: 20px;
  }
  
  .nav-links li a {
    text-decoration: none;
    color: #fff;
    transition: color 0.3s ease;
  }
  
  .nav-links li a:hover {
    color: #FFA101; 
  }

  .logo-oggy{
    background-image: url('img/logo.png'); 
    background-position: center; 
    background-size: contain;
    background-repeat: no-repeat;
    justify-content: center;
  }
  @font-face {
    font-family: "Honey";
    src: url("img/HoneyScript-Light.ttf");
}
  .text-oggy{
   font-family: Honey;
   font-size: 50px;
   letter-spacing: 2px;
   padding: 5px;
   align-items: center;
  }

  @font-face {
    font-family: "Quicksand";
    src: url("img/Quicksand-Medium.ttf");
}

.text-oggy-2{
    font-family: Quicksand;
    font-size: 30px;
    letter-spacing: 2px;
    padding: 5px;
    font-weight: bolder;
   }

   .text-oggy-3{
    font-family: Quicksand;
    font-size: 15px;
    letter-spacing: 0.5px;
    padding: 1px;
    font-weight: bold;
   }

   .signup-form {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    width: 300px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.form-input {
    margin-bottom: 15px;
}
.form-input label {
    font-weight: bold;
}
.form-input input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.form-input select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.form-button {
    text-align: center;
}
.form-button button {
    background-color:#ccc;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}
.form-link {
    text-align: center;
    margin-top: 10px;}
  
.display-not{
    display: none;
    content-visibility:hidden
}


    </style>
</head>
<body>
    <header>
       <?php include "header.php";?>
        

    </header>

    <main>
     <div class="elements">   <!-- Mission Section -->
    <section id="mission" class="about-section Element01">
        <h2>Mission</h2>
        <p>To provide seamless and memorable booking experiences, offering convenience, reliability, and personalized service to every guest.</p>
    </section>

    <!-- Vision Section -->
    <section id="vision" class="about-section Element02">
        <h2>Vision</h2>
        <p>To To be the premier online platform for hotel reservations, recognized for our innovative technology, exceptional customer service, and commitment to exceeding guest expectations.</p>
    </section>

    <!-- Values Section -->
    <section id="values" class="about-section Element03">
        <h2>Values</h2>
        <ul>
            <li>Empowerment</li>
            <li>Innovation</li>
            <li>Collaboration</li>
            <li>Integrity</li>
            <li>Community</li>
        </ul>
    </section>

        <!-- Team Section -->
        <section id="team" class="about-section">
            <h2>Our Team</h2>
            <div class="team-member">
                <img src="img/pic-3.png" alt="Team Member 1">
                <h3>Bandara</h3>
                <p>CEO</p>
            </div>
            <div class="team-member">
                <img src="img/pic-1.png" alt="Team Member 2">
                <h3>Chandrapala</h3>
                <p>Marketing Manager</p>
            </div>
    
        </section>
    </div> 
    </main>

    <script src="script.js"></script> <!-- Linking JavaScript file -->
</body>
</html>
