<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        /* Resetting default margin and padding */
        body,
        h1,
        h2,
        table {
            margin: 0;
            padding: 0;
        }

        /* Body background color */
        body {
            height: max-content;
            background-size: cover;
            background-attachment: fixed;
            animation: BGcHANGE 70s linear infinite;
            transition: background-image 2s ease;
            /* Smooth transition effect */
        }

        /* Preload images */
        body:after {
            content: "";
            background-image: url("./img/general4.jpg"),
                url("./img/hotel1.jpg"),
                url("./img/hotel2.jpg"),
                url("./img/hotel 3.jpg"),
                url("./img/home-img-3.jpg"),
                url("./img/home-img-2.jpg"),
                url("./img/Kandy Hotel 1 (1).jpg"),
                url("./img/nilaweli hotel2.jpg"),
                url("./img/sigiri_hotel1_3.jpeg");
            display: none;
        }

        @keyframes BGcHANGE {
            0% {
                background-image: url("./img/general4.jpg");
            }

            10% {
                background-image: url("./img/hotel1.jpg");
            }

            20% {
                background-image: url("./img/hotel2.jpg");
            }

            30% {
                background-image: url("./img/hotel 3.jpg");
            }

            40% {
                background-image: url("./img/home-img-3.jpg");
            }

            50% {
                background-image: url("./img/home-img-2.jpg");
            }

            60% {
                background-image: url("./img/Kandy Hotel 1 (1).jpg");
            }

            70% {
                background-image: url("./img/nilaweli hotel2.jpg");
            }

            80% {
                background-image: url("./img/sigiri_hotel1_3.jpeg");
            }

            90% {
                background-image: url("./img/sigiriya4.jpg");
            }

            100% {
                background-image: url("./img/sigriya6.jpg");
            }
        }

        /* Header styles */
        header {
            background-color: #ffa2015b;
            color: #FFF;
            padding: 0px;
            text-align: center;
        }

        h1 {
            color: #ffffff;
        }

        /* Navigation bar styles */
        .nav ul {
            list-style: none;
            padding: 0;
            margin-top: 15px;
        }

        .nav li {
            display: inline-block;
            list-style: none;
            padding: 26px 30px;
            transition: all 0.3s ease;
            /* Smooth transition for hover effect */
        }

        .nav a {
            text-decoration: none;
            display: block;
            padding: 15px;
            font-size: 17px;
            color: aliceblue;
        }

        /* Hover effect for navigation items */
        .nav li:hover {
            background-color: #FFA101;
            border-radius: 30%;
            transform: translateY(-5px);
            /* Move the element slightly up */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            /* Add shadow effect */
        }

        .nav a:hover {
            color: #344d53;
            font-weight: bold;
        }

        /* Main section styles */
        main {
            width: 90%;
            padding: 70px;
            display: flex;
            gap: 100px;
            flex-wrap: wrap;
        }

        .details {
            flex-basis: 3000px;
            order: 1;
        }

        .notification {
            flex-basis: 500px;
            order: 3;
        }

        .feedback {
            flex-basis: 700px;
            order: 2;
        }

        .question {
            flex-basis: 3000px;
            order: 4;
        }

        /* Section styles */
        section {
            margin-bottom: 30px;
            background-color: rgba(255, 255, 255, 0.555);
            border-radius: 8px;
            padding: 20px;
            transition: all 0.3s ease;
            /* Smooth transition for hover effect */
            width: 100%;
        }

        /* Hover effect for sections */
        section:hover {
            transform: translateY(-5px);
            /* Move the element slightly up */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            /* Add shadow effect */
        }

        /* Heading styles */
        h2 {
            color: #095581;
            margin-bottom: 15px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.575);
            font-size: 30px;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Table header styles */
        th {
            background-color: #ffa201a4;
            color: #FFF;
            padding: 15px;
        }

        /* Table cell styles */
        td {

            border-bottom: 1px solid #ffffff;
            padding: 20px;
            gap: 100px;
        }

        .Tbody {

            display: flex;
            gap: 100px;

        }

        .review {
            font-size: 25px;
            color: #020202;
            text-align: center;
        }

        /* Q&A container styles */
        #qa-container {
            display: flex;
            flex-direction: column;
        }

        .notification_item {
            font-size: 25px;

        }

        /* Q&A item styles */
        .qa-item {
            margin-bottom: 15px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            padding: 15px;
            color: #000000;
            font-size: 25px;
            font-style: oblique;
            transition: all 0.3s ease;
            /* Smooth transition for hover effect */
        }

        /* Hover effect for Q&A items */
        .qa-item:hover {
            transform: translateY(-5px);
            /* Move the element slightly up */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            /* Add shadow effect */
        }

        /* Edit and delete button styles */
        .edit-btn,
        .delete-btn {
            padding: 5px 10px;
            margin-left: 10px;
            background-color: rgb(252, 185, 42);
            color: #FFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Button hover effect */
        .edit-btn:hover,
        .delete-btn:hover {
            background-color: #FFD54F;
        }

        /* Answer input box styles */
        .answer-box {
            width: 50%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #CCC;
        }

        /* Input field styles */
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #CCC;
        }

        /* Submit button styles */
        button {
            padding: 10px 20px;
            background-color: #FFA101;
            color: #FFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Button hover effect */
        button:hover {
            background-color: #FFD54F;
        }
    </style>
</head>

<body>
    <header>
        <header>
            <?php include "userheader.php" ?>
        </header>
    </header>

    <main>
        <!-- Reservation Details Section -->
        <div class="details">
            <section id="reservation-details">
                <h2>Your Reservation Details</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>ID</th>
                            <th>Payment Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="reservation-table-body">
                        <!-- Reservation items will be dynamically added here -->
                    </tbody>
                </table>
            </section>
        </div>

        <!-- Notification Panel -->
        <div class="notification">
            <section id="notification-panel">
                <h2>Notification Panel</h2>
                <div class="notification_item">
                    <div id="notification-container">
                        <!-- Notifications will be dynamically added here -->
                    </div>
                </div>
        </div>
        </section>

        <!-- Feedback Input Section -->
        <?php
        include "connection.php";


        if (isset($_SESSION["u"])) {
            $e = $_SESSION["u"]["email"];
        }


        ?>


        <div class="feedback">
            <section id="feedback-input">
                <h2>Post a Review</h2>

                <div id="feedback-container">
                    <input type="text" id="pCode" ; name="reveiw" placeholder="Enter your passportId" class="feedback-box">
                    <select id="hotel">
                                        <option  disabled selected value>Enter your stayed hotel</option>
                                      
                                        <?php
                                        $rs = Database::search("SELECT * FROM `hotel`");
                                        $n = $rs->num_rows;

                                        for ($x = 0; $x < $n; $x++) {
                                            $d = $rs->fetch_assoc();
                                        ?>
                                            <option value="<?php echo $d["index"]; ?>"><?php echo $d["HName"]; ?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                    <input type="text" id="rText" ; name="review" placeholder="Enter your Reveiw." class="feedback-box">
                    <button id="submit-feedback-btn" onclick="question();">Submit</button>
                </div>
        </div>
        </section>

        
      

    </main>

    <script>
        // Sample reservation data
        function question() {
            var pcode = document.getElementById("pCode");
            var qText = document.getElementById("rText");
            var hotel = document.getElementById("hotel");
            alert();

            var form = new FormData();
            form.append("p", pcode.value);
            form.append("q", qText.value);
            form.append("h",hotel.value);
           
            var request = new XMLHttpRequest();

            request.onreadystatechange = function() {
                if (request.status == 200 && request.readyState == 4) {
                    var response = request.responseText;
                    alert(response);
                    if (response == "success") {
                        alert("review updated successfully.");

                    } else {
                        alert(response);
                    }

                }
            }

            request.open("POST", "userdashbordactions.php", true);
            request.send(form);






        }
        const reservations = [{
            name: "John Doe",
            id: "123",
            paymentStatus: "Paid"
        }, ]

        // Sample notification data
        const notifications = [{
                message: "New booking received for Room 101."
            },
            {
                message: "Reminder: Check-out time is at 11:00 AM."
            },
            {
                message: "Special offer: 20% discount on spa services this weekend!"
            }
        ];

        // Function to populate the reservation details section
        function populateReservationDetails() {
            const reservationTableBody = document.getElementById("reservation-table-body");
            reservationTableBody.innerHTML = ""; // Clear existing content
            reservations.forEach(reservation => {
                const row = document.createElement("tr");
                row.innerHTML = `
            <td>${reservation.name}</td>
            <td>${reservation.id}</td>
            <td>${reservation.paymentStatus}</td>
            <td><button class="edit-reservation-btn">Edit</button> <button class="delete-reservation-btn">Delete</button></td>
        `;
                reservationTableBody.appendChild(row);
            });
        }

        // Function to populate the notification panel
        function populateNotificationPanel() {
            const notificationContainer = document.getElementById("notification-container");
            notificationContainer.innerHTML = ""; // Clear existing content

            // Loop through the notifications and create notification items
            notifications.forEach(notification => {
                const div = document.createElement("div");
                div.classList.add("notification-item");
                div.textContent = notification.message;
                notificationContainer.appendChild(div);
            });
        }

        // Call the function to populate the notification panel initially
        populateNotificationPanel();



        // Function to handle submitting feedback
        function submitFeedback() {
            const feedbackInput = document.querySelector("#feedback-input input[name='feedback']");
            const feedback = feedbackInput.value.trim();
            if (feedback !== "") {
                // Add your logic to handle submitting feedback
                console.log("Feedback submitted:", feedback);
                // Clear the input field after submission
                feedbackInput.value = "";
            } else {
                alert("Please enter your feedback!");
            }
        }

        // Function to add event listener for submitting a question
        function setupQuestionSubmission() {
            const submitQuestionBtn = document.getElementById("submit-question-btn");
            submitQuestionBtn.addEventListener("click", submitQuestion);
        }

        // Function to submit a question
        function submitQuestion() {
            const questionInput = document.getElementById("question-input");
            const question = questionInput.value.trim();
            if (question !== "") {
                addQuestionToQA(question);
                questionInput.value = ""; // Clear the input field after submission
            }
        }

        // Function to add a new question to the Q&A panel
        function addQuestionToQA(question) {
            const qaContainer = document.getElementById("qa-container");
            const div = document.createElement("div");
            div.classList.add("qa-item");
            div.innerHTML = `
        <p><strong>Q: ${question}</strong></p>
        <p><strong>A:</strong> <input type="text" name="answer" class="answer-box" placeholder="Enter Answer"> <button class="submit-answer-btn">Submit</button></p>
    `;
            qaContainer.appendChild(div);
        }

        // Call the function to setup question submission
        setupQuestionSubmission();


        // Call the functions to populate the sections initially
        populateReservationDetails();
        populateNotificationPanel();
        populateQA();

        // Event listener for submitting feedback
        document.getElementById("submit-feedback-btn").addEventListener("click", submitFeedback);
    </script>

    <script src="script.js"></script> <!-- Linking JavaScript file -->
    <footer>
        <?php include "footer.php" ?>
    </footer>


</body>

</html>