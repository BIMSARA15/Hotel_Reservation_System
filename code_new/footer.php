<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Site</title>
    <style>
        body {
            margin: 0;
            font-family: Quicksand;

        }

        @font-face {
            font-family: "Honey";
            src: url("img/HoneyScript-Light.ttf");
        }

        @font-face {
            font-family: "Quicksand";
            src: url("img/Quicksand-Medium.ttf");
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 1%;
            z-index: 100000;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .footer-section {
            flex: 1;
            margin-right: 20px;
        }

        .footer-section h2 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .footer-section p {
            font-size: 14px;
            line-height: 1.5;
        }

        .footer-section ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        .footer-section ul li span {
            font-weight: bold;
        }

        .footer-bottom {
            text-align: center;
            font-size: 14px;
        }

        /* Add more styling as needed */
    </style>
</head>

<body>
    <!-- Rest of  website content -->

    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus id justo non augue venenatis vestibulum ut nec ligula.</p>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Destinations</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <ul>
                    <li><span>Email:</span> info@reservationsite.com</li>
                    <li><span>Phone:</span> +1234567890</li>
                    <li><span>Address:</span> 123 Reservation St, City, Country</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Reservation Site | Designed by Serendib Creations
        </div>
    </footer>
</body>

</html>