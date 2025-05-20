<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Helios</title>
    <link rel="stylesheet" href="./nilaweli_hotel2.css">

</head>
<body>
<header>
    <?php include "header.php" ?>
   </header>
    <section class="nila" id="nilab">
        <h1>Hotel Helios </h1>
        </section>
        <div class="wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <section class="cony">
            <div class="slide-wrapper2">
                
                    <div class="slider2">
                        <img id="slide2-1" src="./img/nilaweli hotel2.jpg" />
                        <img id="slide2-2" src="./img/nilaweli hotel1 (5).jpg">
                        <img id="slide2-3" src="./img/nilaweli hotel1 (6).jpg" />
                        <img id="slide2-4" src="./img/nhotel (1).jpg" />
                        <img id="slide2-5" src="./img/nhotel (2).jpg" />
                      
              
        
    
                <div class="slider-nav2">
                    <a href="#slide2-1" onclick="slides2('slider2-1')"></a>
                    <a href="#slide2-2" onclick="slides2('slider2-2')"></a>
                    <a href="#slide2-3" onclick="slides2('slider2-3')"></a>
                    <a href="#slide2-4" onclick="slides2('slider2-4')"></a>
                    <a href="#slide2-5" onclick="slides2('slider2-5')"></a>

                   
                </div>
                </div>
            </div>
            <script src="./js library/library.js"></script>
<script>
    const c = document.querySelector(".nila");
    const tl2 = gsap.timeline({paused: true}); // Pausing the timeline by default
   
    function slides2(name) {
        var backDiv = document.getElementById("nilab");
        if (name == "slider2-1") {
            backDiv.style.backgroundImage = "url('./img/nilaweli hotel2.jpg')";
        } else if (name == "slider2-2") {
            backDiv.style.backgroundImage = "url('./img/nilaweli hotel1 (5).jpg')";
        } else if (name == "slider2-3") {
            backDiv.style.backgroundImage = "url('./img/nilaweli hotel1 (6).jpg')";
        } else if (name == "slider2-4") {
            backDiv.style.backgroundImage = "url('./img/nhotel (1).jpg')";
        }  else if (name == "slider2-5") {
            backDiv.style.backgroundImage = "url('./img/nhotel (2).jpg')";
        }    else {
            alert("Invalid!!");
        }
        tl2.fromTo(c, {opacity:0}, {opacity:1, duration: 1.25}).play(); // Playing the animation when triggered
       
    }
</script>

</script> 
 </section>
        <section class="container2">
            <div class="box-container">

                <div class="box">
                   <img src="img/icon-1.png" alt="">
                   <h3>food & drinks</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
                </div>
          
                <div class="box">
                   <img src="img/icon-2.png" alt="">
                   <h3>outdoor dining</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
                </div>
          
                <div class="box">
                   <img src="img/icon-3.png" alt="">
                   <h3>Sea view</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
                </div>

                <div class="box">
                   <img src="img/icon-4.png" alt="">
                   <h3>decorations</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
                </div>
          
                <div class="box">
                   <img src="img/icon-5.png" alt="">
                   <h3>swimming pool</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
                </div>
                <div class="box">
                    <img src="img/icon-6.png" alt="">
                    <h3>Beach</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt?</p>
                 </div>
           
            
          
             </div>
         </section>   
         <div class="wave2">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <section class="food">
            <h1>Our Food</h1>
            </section>
            <div class="wave4">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>
            <section class="foodb" id="foodbb">
                <section class="cony2">
                    <div class="slide-wrapper3">
                        <div class="slider3">
                            <img id="slide3-1" src="./img/nfood (5).jpg" />
                            <img id="slide3-2" src="./img/nfood (6).jpg">
                            <img id="slide3-3" src="./img/nfood (7).jpg" />
                            <img id="slide3-4" src="./img/nfood (8).jpg" />

            
                        <div class="slider-nav3">
                            <a href="#slide3-1" onclick="slides3('slider3-1')"></a>
                            <a href="#slide3-2" onclick="slides3('slider3-2')"></a>
                            <a href="#slide3-3" onclick="slides3('slider3-3')"></a>
                            <a href="#slide3-4" onclick="slides3('slider3-4')"></a>
                           
                          
                        </div>
                        </div>
                    </div>
                    <script src="./js library/library.js"></script>
        <script>
            const d = document.querySelector(".foodb");
            const tl3 = gsap.timeline({paused: true}); // Pausing the timeline by default
    
            function slides3(name) {
                var backDiv = document.getElementById("foodbb");
                if (name == "slider3-1") {
                    backDiv.style.backgroundImage = "url('./img/nfood (5).jpg')";
                   document.getElementById("para3").innerHTML="Lorem ipsum dolor sit amet consectetur adipisicing elit. Et tempora ea eius nesciunt nostrum vitae iure minima ullam dolorem dolores sequi error qui accusamus, aut maxime laudantium est necessitatibus? Aperiam!";
                } else if (name == "slider3-2") {
                    backDiv.style.backgroundImage = "url('./img/nfood (6).jpg')";
                    document.getElementById("para3").innerHTML="iure minima ullam dolorem dolores sequi error qui accusamus, aut maxime laudantium est necessitatibu";
                } else if (name == "slider3-3") {
                    backDiv.style.backgroundImage = "url('./img/nfood (7).jpg')";
                    document.getElementById("para3").innerHTML="Lorem ipsum dolor sit amet consectetur adipisicing elit. Et tempora ea eius nesciunt nostrum vitae iure minima ullam dolorem dolores sequi error qui accusamus, aut maxime laudantium est necessitatibus? Aperiam!";
                } else if (name == "slider3-4") {
                    backDiv.style.backgroundImage = "url('./img/nfood (8).jpg')";
                    document.getElementById("para3").innerHTML="iure minima ullam dolorem dolores sequi error qui accusamus, aut maxime laudantium est necessitatibu";
                }  else {
                    alert("Invalid!!");
                }
                
                tl3.fromTo(d, {opacity:0}, {opacity:1, duration: 1}).play(); // Playing the animation when triggered
            }
        </script>

    </script> 
         </section>
         <section class="item">
               <div id="para3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Et tempora ea eius nesciunt nostrum vitae iure minima ullam dolorem dolores sequi error qui accusamus, aut maxime laudantium est necessitatibus? Aperiam!
                </div>
                </section>
         </section>
         <div class="wavek">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <section class="book">
            <h1>Ready to Book?</h1>
            </section>
            <div class="wavek2">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
            </div>




    <section class="reservation" id="reservation">

        <form action="./kprocess.php" method="post">
           <h3>make a reservation</h3>
           <div class="flex">
              <div class="box">
                <p>Hotel Name <span>*</span></p>
                 <select name="Name" class="input" required>
                    <option value="Hotel Helios">Hotel Helios</option>
                   </select>
                    </div>
                    <div class="box">
                    <p>Passport number <span>*</span></p>
                    <input type="text" name="pass" class="input" required >
                      </input>
                       </div>
                       <div class="box">
                           <p>Location <span>*</span></p>
                            <select name="location" class="input" required>
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
           <input type="submit" value="check availability" name="check" class="btn">
        </form>
</section>
<div class="wave5">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
</div>

<section class="reviews" id="reviews">
    <di class="textr">Our Reviews</di>
    <div class="reviewcon">
    <div class="slide-wrapper4">
                
        <div class="slider4">
            <div id="slide4-1">
                <img src="img/pic-1.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates blanditiis optio dignissimos eaque aliquid explicabo.</p>
             </div>
             <div id="slide4-2">
                <img src="img/pic-2.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates blanditiis optio dignissimos eaque aliquid explicabo.</p>
             </div>
             <div id="slide4-3">
                <img src="img/pic-3.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates blanditiis optio dignissimos eaque aliquid explicabo.</p>
             </div>
             <div id="slide4-4">
                <img src="img/pic-4.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates blanditiis optio dignissimos eaque aliquid explicabo.</p>
             </div>
             <div id="slide4-5">
                <img src="img/pic-5.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates blanditiis optio dignissimos eaque aliquid explicabo.</p>
             </div>
             <div id="slide4-6">
                <img src="img/pic-6.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates blanditiis optio dignissimos eaque aliquid explicabo.</p>
             </div>
  


    <div class="slider-nav4">
        <a href="#slide4-1" ></a>
        <a href="#slide4-2" ></a>
        <a href="#slide4-3" ></a>
        <a href="#slide4-4" ></a>
        <a href="#slide4-5" ></a>
        <a href="#slide4-6" ></a>
       
    </div>
    </div>
</div>


        </section>
        <div class="wave6">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <section class="conact">
            <h1>Not sure yet?</h1>
            </section>
            <div class="wave7">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                </svg>
                </div>
                <section class="visit">
                    <img class="mandala" src="./img/Mandala-removebg-preview.png">
                    <button class="mandalacl"><h1> Visit Us</h1> </button>
                    </section>
                    <div class="wave8">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                        </svg>
                        </div>
                        <section class="footer">
                            <div class="nav2">
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
                            </section>

</body>
</html>


 