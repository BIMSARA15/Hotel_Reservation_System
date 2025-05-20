<!DOCTYPE html>
<html>

<head>
    <title> Serendib Reservation</title>
    <link rel="stylesheet" href="hom page.css">



</head>

<body>
    <section id="back" class="backbb">
        <?php include "header.php"?>
        <center>
          
            <script>
                let navbar = document.querySelector('.backbb .nav');

                document.querySelector('#menu-btn').onclick = () => {
                    navbar.classList.toggle('active');
                }

                window.onscroll = () => {
                    navbar.classList.remove('active');
                }
            </script>

            <div class="row">
                <form class="col" id="demo">
                    <p id="demo1"></p>
                    <p id="demo2"></p>


                </form>
                <script>
                    var i = 0;
                    var txt1 = "Looking for your next destination in Asia?";
                    var speed = 50;
                    var j = 0;
                    var txt2 = "You have come to the right place!";
                    var speed2 = 50;

                    function typeWriter1() {
                        if (i < txt1.length) {
                            document.getElementById("demo1").innerHTML += txt1.charAt(i);
                            i++;
                            setTimeout(typeWriter1, speed);
                        } else {
                            typing(); // Call the typing function after txt1 is printed
                        }
                    }

                    function typing() {
                        if (j < txt2.length) {
                            document.getElementById("demo2").innerHTML += txt2.charAt(j);
                            j++;
                            setTimeout(typing, speed2);
                        }
                    }

                    typeWriter1(); // Start printing text 1
                </script>


                <section class="container">
                    <div class="slide-wrapper">
                        <div class="slider">
                            <img id="slide-1" src="./img/back2.jpg" />
                            <img id="slide-2" src="./img/back1.jpg">
                            <img id="slide-3" src="./img/back4.jpg" />
                            <img id="slide-4" src="./img/back5.jpg" />
                            <img id="slide-5" src="./img/general3.jpg" />

                            <div class="slider-nav">
                                <a href="#slide-1" onclick="slides('slider-1')"></a>
                                <a href="#slide-2" onclick="slides('slider-2')"></a>
                                <a href="#slide-3" onclick="slides('slider-3')"></a>
                                <a href="#slide-4" onclick="slides('slider-4')"></a>
                                <a href="#slide-5" onclick="slides('slider-5')"></a>
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
                                backDiv.style.backgroundImage = "url('./img/back2.jpg')";
                            } else if (name == "slider-2") {
                                backDiv.style.backgroundImage = "url('./img/back1.jpg')";
                            } else if (name == "slider-3") {
                                backDiv.style.backgroundImage = "url('./img/back4.jpg')";
                            } else if (name == "slider-4") {
                                backDiv.style.backgroundImage = "url('./img/back5.jpg')";
                            } else if (name == "slider-5") {
                                backDiv.style.backgroundImage = "url('./img/general3.jpg')";
                            } else {
                                alert("Invalid!!");
                            }

                            tl.fromTo(b, {
                                opacity: 0
                            }, {
                                opacity: 1,
                                duration: 1
                            }).play(); // Playing the animation when triggered
                        }
                    </script>

                    </script>
            </div>
    </section>
    <div class="wave">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>


    <section class="container2">
        <h1>Our Top Destinations Are </h1>
    </section>
    <div class="wave2">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <section class="kandy" id="kandyb">
        <h1>Kandy </h1>
        <div id="para"> Nestled amidst Sri Lanka's emerald hills lies Kandy, a captivating city steeped in history and cultural charm. Immerse yourself in the grandeur of
            the Temple of the Tooth Relic, a UNESCO World Heritage Site,
            and witness vibrant cultural pageantry during
            the Esala Perahera festival. Explore the Royal Botanical Gardens,
            a paradise of exotic flora, or trek through lush tea plantations,
            savoring the island's famed Ceylon tea.
            Kandy offers a unique blend of cultural
            richness, stunning natural beauty, and a
            touch of colonial influence, making it an
            unforgettable experience for any visitor.
        </div>
        <a href="kandy.php"><button id="btn1" class="bttn" a href="#"> Book a Hotel </button></a>

        <section class="cony">
            <div class="slide-wrapper2">
                <div class="slider2">
                    <img id="slide2-1" src="./img/kandy.jpg" />
                    <img id="slide2-2" src="./img/back1.jpg">
                    <img id="slide2-3" src="./img/kandy4.jpg" />
                    <img id="slide2-4" src="./img/kandy2.jpg" />
                    <img id="slide2-5" src="./img/kandy3.jpg" />
                    <img id="slide2-6" src="./img/back4.jpg" />
                    <img id="slide2-7" src="./img/general2.jpg" />

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
                const c = document.querySelector(".kandy");
                const tl2 = gsap.timeline({
                    paused: true
                }); // Pausing the timeline by default

                function slides2(name) {
                    var backDiv = document.getElementById("kandyb");
                    if (name == "slider2-1") {
                        backDiv.style.backgroundImage = "url('./img/kandy.jpg')";
                    } else if (name == "slider2-2") {
                        backDiv.style.backgroundImage = "url('./img/back1.jpg')";
                    } else if (name == "slider2-3") {
                        backDiv.style.backgroundImage = "url('./img/kandy4.jpg')";
                    } else if (name == "slider2-4") {
                        backDiv.style.backgroundImage = "url('./img/kandy2.jpg')";
                    } else if (name == "slider2-5") {
                        backDiv.style.backgroundImage = "url('./img/kandy3.jpg')";
                    } else if (name == "slider2-6") {
                        backDiv.style.backgroundImage = "url('./img/back4.jpg')";
                    } else if (name == "slider2-7") {
                        backDiv.style.backgroundImage = "url('./img/general2.jpg')";
                    } else {
                        alert("Invalid!!");
                    }

                    tl2.fromTo(c, {
                        opacity: 0
                    }, {
                        opacity: 1,
                        duration: 1
                    }).play(); // Playing the animation when triggered
                }
            </script>

            </script>
        </section>
    </section>
    <div class="wave3">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
    <section class="container3">
        <h1>Exploring history? We're your vibe! </h1>
    </section>
    <div class="wave4">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <section class="sigiri" id="sigirib">
        <section class="cony2">
            <div class="slide-wrapper3">
                <div class="slider3">
                    <img id="slide3-1" src="./img/sigiriya2.jpg" />
                    <img id="slide3-2" src="./img/sigiriya3.jpg">
                    <img id="slide3-3" src="./img/sigiri1.jpg" />
                    <img id="slide3-4" src="./img/sigriya6.jpg" />
                    <img id="slide3-5" src="./img/sigiriya5.jpg" />
                    <img id="slide3-6" src="./img/sigiriya4.jpg" />
                    <img id="slide3-7" src="./img/general1.jpg" />

                    <div class="slider-nav3">
                        <a href="#slide3-1" onclick="slides3('slider3-1')"></a>
                        <a href="#slide3-2" onclick="slides3('slider3-2')"></a>
                        <a href="#slide3-3" onclick="slides3('slider3-3')"></a>
                        <a href="#slide3-4" onclick="slides3('slider3-4')"></a>
                        <a href="#slide3-5" onclick="slides3('slider3-5')"></a>
                        <a href="#slide3-6" onclick="slides3('slider3-6')"></a>
                        <a href="#slide3-7" onclick="slides3('slider3-7')"></a>
                    </div>
                </div>
            </div>
            <script src="./js library/library.js"></script>
            <script>
                const d = document.querySelector(".sigiri");
                const tl3 = gsap.timeline({
                    paused: true
                }); // Pausing the timeline by default

                function slides3(name) {
                    var backDiv = document.getElementById("sigirib");
                    if (name == "slider3-1") {
                        backDiv.style.backgroundImage = "url('./img/sigiriya2.jpg')";
                    } else if (name == "slider3-2") {
                        backDiv.style.backgroundImage = "url('./img/sigiriya3.jpg')";
                    } else if (name == "slider3-3") {
                        backDiv.style.backgroundImage = "url('./img/sigiri1.jpg')";
                    } else if (name == "slider3-4") {
                        backDiv.style.backgroundImage = "url('./img/sigriya6.jpg')";
                    } else if (name == "slider3-5") {
                        backDiv.style.backgroundImage = "url('./img/sigiriya5.jpg')";
                    } else if (name == "slider3-6") {
                        backDiv.style.backgroundImage = "url('./img/sigiriya4.jpg')";
                    } else if (name == "slider3-7") {
                        backDiv.style.backgroundImage = "url('./img/general1.jpg')";
                    } else {
                        alert("Invalid!!");
                    }

                    tl3.fromTo(d, {
                        opacity: 0
                    }, {
                        opacity: 1,
                        duration: 1
                    }).play(); // Playing the animation when triggered
                }
            </script>

            </script>
        </section>
        <section class="item">
            <h1>Sigiriya </h1>
            <div id="para3"> Sigiriya, beckons travelers with its captivating blend of history, nature,
                and architectural marvels. Rising majestically from the lush greenery, the ancient rock fortress of Sigiriya,
                also known as the Lion Rock, stands as a testament to the island's rich cultural heritage. Visitors are enthralled
                by the sheer ingenuity of its design, with intricate frescoes adorning the rock face and the remnants of an ancient
                palace perched at its summit. As you ascend the towering rock, you'll be treated to breathtaking panoramic views of the
                surrounding landscape, a vista that has enchanted travelers for centuries.
                Whether you're drawn to its history,
                architecture, or natural beauty, Sigiriya promises an unforgettable journey into Sri Lanka's past and present.
            </div>
            <a href="sigiri.php"><button id="btn2" class="bttn2" a href="#"> Book a Hotel </button></a>
        </section>
    </section>
    <div class="wave5">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>


    <section class="container4">
        <h1>Sri Lanka is an island! How about the sea?</h1>
    </section>
    <div class="wave6">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <section class="sea" id="seab">
        <h1>Nilaweli </h1>
        <div id="para4"> Nestled on the eastern coast of
            Sri Lanka lies the serene Nilaveli Beach, a paradise waiting to be discovered by
            eager travelers. With its powdery soft sands and crystal-clear turquoise waters, Nilaveli
            offers the perfect escape for beach lovers seeking tranquility and relaxation. Whether you're lounging under
            the swaying palms, snorkeling among vibrant coral reefs, or taking a leisurely stroll along the shore at sunset,
            Nilaveli captivates with its natural beauty and unspoiled charm. Adventure seekers can indulge in thrilling water
            sports like diving and kite surfing, while history buffs can explore nearby cultural sites such as the ancient city of
            Polonnaruwa. With its warm hospitality and breathtaking scenery, Nilaveli Beach promises an unforgettable experience fo
            r every visitor
        </div>
        <a href="nilaweli.php"><button id="btn4" class="bttn4" a href="#"> Book a Hotel </button></a>

        <section class="cony3">
            <div class="slide-wrapper4">
                <div class="slider4">
                    <img id="slide4-1" src="./img/nilaveli6.jpg" />
                    <img id="slide4-2" src="./img/back2.jpg">
                    <img id="slide4-3" src="./img/nilaveli3.jpg" />
                    <img id="slide4-4" src="./img/nilaveli1.jpg" />
                    <img id="slide4-5" src="./img/nilaveli2.jpg" />
                    <img id="slide4-6" src="./img/nilaveli5 (1).jpg" />
                    <img id="slide4-7" src="./img/genral6.jpg" />

                    <div class="slider-nav4">
                        <a href="#slide4-1" onclick="slides4('slider4-1')"></a>
                        <a href="#slide4-2" onclick="slides4('slider4-2')"></a>
                        <a href="#slide4-3" onclick="slides4('slider4-3')"></a>
                        <a href="#slide4-4" onclick="slides4('slider4-4')"></a>
                        <a href="#slide4-5" onclick="slides4('slider4-5')"></a>
                        <a href="#slide4-6" onclick="slides4('slider4-6')"></a>
                        <a href="#slide4-7" onclick="slides4('slider4-7')"></a>
                    </div>
                </div>
            </div>
            <script src="./js library/library.js"></script>
            <script>
                const e = document.querySelector(".sea");
                const tl4 = gsap.timeline({
                    paused: true
                }); // Pausing the timeline by default

                function slides4(name) {
                    var backDiv = document.getElementById("seab");
                    if (name == "slider4-1") {
                        backDiv.style.backgroundImage = "url('./img/nilaveli6.jpg')";
                    } else if (name == "slider4-2") {
                        backDiv.style.backgroundImage = "url('./img/back2.jpg')";
                    } else if (name == "slider4-3") {
                        backDiv.style.backgroundImage = "url('./img/nilaveli3.jpg')";
                    } else if (name == "slider4-4") {
                        backDiv.style.backgroundImage = "url('./img/nilaveli1.jpg')";
                    } else if (name == "slider4-5") {
                        backDiv.style.backgroundImage = "url('./img/nilaveli2.jpg')";
                    } else if (name == "slider4-6") {
                        backDiv.style.backgroundImage = "url('./img/nilaveli5 (1).jpg')";
                    } else if (name == "slider4-7") {
                        backDiv.style.backgroundImage = "url('./img/genral6.jpg')";
                    } else {
                        alert("Invalid!!");
                    }

                    tl4.fromTo(e, {
                        opacity: 0
                    }, {
                        opacity: 1,
                        duration: 1
                    }).play(); // Playing the animation when triggered
                }
            </script>

            </script>
        </section>
    </section>
    <div class="wave7">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
    </div>
    <section class="container5">
        <h1>Ready For Your Next Vacation? </h1>
    </section>
    <div class="wave8">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <section class="gen" id="genb">

      <a href="destinations.php"><button id="btn5" class="bttn5"> Book a Hotel </button></a>

      <a href="contact us.php"><button id="btn6" class="bttn6"> Contact Us </button></a>

    </section>
    <div class="social-menu">
        <ul>
            <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="c1"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.linkedin.com/learning-login/" class="c2"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://twitter.com/?lang=en" class="c3"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.instagram.com/accounts/login/" class="c4"><i class="fa fa-youtube"></i></a></li>
        </ul>
    </div>

</body>

</html>