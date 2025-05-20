<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./contact us.css">
    
    <title>Contact Us</title>
</head>
<body class="back" id="back">
  <header>
    <?php include "header.php"; ?>
    
  </header>
    
       
           <section class="feedback" id="feedback">

            
<section class="contact">
                <div class="row">
             
                   <form action="contactback.php" method="post">
                      <h3 id="topic">Need assistance ? Contact Us</h3>
                      <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
                      <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
                      <input type="number" name="number" required maxlength="10" min="0" max="9999999999" placeholder="enter your number" class="box">
                      <textarea name="msg" class="box" required maxlength="1000" placeholder="enter your message" cols="30" rows="10"></textarea>
                      <input type="submit" value="send message" name="send" class="btn">
                   </form>
             
                   <div class="faq">
                      <h3 class="title">frequently asked questions</h3>
                      <div class="box active">
                         <h3>how to cancel?</h3>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus sunt aspernatur excepturi eos! Quibusdam, sapiente.</p>
                      </div>
                      <div class="box">
                         <h3>is there any vacancy?</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ipsam neque quaerat mollitia ratione? Soluta!</p>
                      </div>
                      <div class="box">
                         <h3>what are payment methods?</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ipsam neque quaerat mollitia ratione? Soluta!</p>
                      </div>
                      <div class="box">
                         <h3>how to claim coupons codes?</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ipsam neque quaerat mollitia ratione? Soluta!</p>
                      </div>
                      <div class="box">
                         <h3>what are the age requirements?</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ipsam neque quaerat mollitia ratione? Soluta!</p>
                      </div>
                   </div>
             
                </div>
                <script>

                    document.querySelectorAll('.contact .row .faq .box h3').forEach(faqBox => {
   faqBox.onclick = () =>{
      faqBox.parentElement.classList.toggle('active');
      setTimeout(() => {
         parentElement.classList.toggle('transition');
      }, 50);
   }
});
                    </script>

        </form>
        <section class="cony">
            <div class="slide-wrapper2">
                
    
                <div class="slider-nav2">
                    <a href="#slide2-1" onclick="slides2('slider2-1')"></a>
                    <a href="#slide2-2" onclick="slides2('slider2-2')"></a>
                    <a href="#slide2-3" onclick="slides2('slider2-3')"></a>
                    <a href="#slide2-4" onclick="slides2('slider2-4')"></a>
                    <a href="#slide2-5" onclick="slides2('slider2-5')"></a>
                    <a href="#slide2-6" onclick="slides2('slider2-6')"></a>
                    <a href="#slide2-7" onclick="slides2('slider2-7')"></a>
                </div>
                </div>
            </div>
            <script src="./js library/library.js"></script>
<script>
    const c = document.querySelector(".feedback");
    const tl2 = gsap.timeline({paused: true}); // Pausing the timeline by default
   
    function slides2(name) {
        var backDiv = document.getElementById("feedback");
        if (name == "slider2-1") {
            backDiv.style.backgroundImage = "url('./img/kandy4.jpg')";
        } else if (name == "slider2-2") {
            backDiv.style.backgroundImage = "url('./img/general4.jpg')";
        } else if (name == "slider2-3") {
            backDiv.style.backgroundImage = "url('./img/general2.jpg')";
        } else if (name == "slider2-4") {
            backDiv.style.backgroundImage = "url('./img/feedback3.jpg')";
        }  else if (name == "slider2-5") {
            backDiv.style.backgroundImage = "url('./img/feedback1.jpg')";
        }  else if (name == "slider2-6") {
            backDiv.style.backgroundImage = "url('./img/feedback2.jpg')";
        }  else if (name == "slider2-7") {
            backDiv.style.backgroundImage = "url('./img/back4.jpg')";
        }else {
            alert("Invalid!!");
        }
        tl2.fromTo(c, {opacity:0}, {opacity:1, duration: 1.25}).play(); // Playing the animation when triggered
       
    }
</script>

</script> 
 </section>
 </section>
     </section>
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
              <li><a href="" class="c3"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.instagram.com/accounts/login/" class="c4"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
</body>
</html>