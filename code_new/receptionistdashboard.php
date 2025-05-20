<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Dashboard</title>
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
            background-image: url("./img/sigiriya2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            padding: 0;
            margin-top: 0;
            object-fit: fill;
            height: 800px;
            background-attachment: fixed;
        }


        /* Header styles */
        header {
            background-color: hsla(194, 61%, 24%, 0.466);
            color: #FFF;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #fdc055;
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
            color: #31525B;
            font-weight: bold;
        }

        /* Main section styles */
        main {


            width: 70%;
            padding: 70px;



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
            color: hsl(193, 30%, 27%);
            margin-bottom: 15px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.575);
            font-size: 30px;

        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: medium;
        }

        /* Table header styles */
        th {
            background-color: hsla(193, 58%, 30%, 0.753);
            color: #FFF;
            padding: 15px;
        }

        /* Table cell styles */
        td {
            border-bottom: 1px solid #ffffff;
            padding: 20px;
        }

        .review {
            font-size: 25px;
            color: #020202;
            text-align: center;
        }

        /* Highlighted row styles */
        .highlight {
            background-color: hsla(38, 95%, 61%, 0.39);
            color: #ffffff8a;
        }

        #qa-section {
            background-color: rgba(255, 205, 202, 0.308);
            text-align: center;
            border: 1px solid #ffffff;

        }

        /* Q&A container styles */
        #qa-container {
            display: flex;
            flex-direction: column;

        }

        /* Q&A container styles */
        #qa-container {
            display: flex;
            flex-direction: column;

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

        .box {
            width: 50%;

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

        /* Answer input box styles */
        .answer-box {
            width: 50%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #CCC;
        }
    </style>
</head>

<body>
    <header>
        <header>
            <h1>Receptionist Dashboard</h1>
            <center>
                <div class="nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Destinations</a></li>
                        <li><a href="#">Review</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
            </center>
        </header>
    </header>

    <main>
        <!-- Review/Feedback Display Section -->
        <section id="review-feedback">
            <div class="review">
                <h2>Reviews</h2>
                <div id="review-feedback-container">
                    <table>
                
                        <th>user passport</th>
                        <th>Review</th>
                        <th>date</th>
                        <th>functions</th>

                        <?php

                        include "connection.php";
                        $rs = Database::search("SELECT * FROM `reviews`");
                        $n = $rs->num_rows;

                        for ($x = 0; $x < $n; $x++) {
                            $d = $rs->fetch_assoc();
                        ?><tr id="reviews">
                                <td><?php echo $d["passport"]; ?></td>
                                <td><?php echo $d["review"]; ?></td>
                                <td><?php echo $d["date"]; ?></td>
                                <td> <div style="padding: 1%;"><button onclick="deletes();">deny</button></div></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </table>


                </div>

            </div>
        </section>



    </main>
    <script>
        // Sample booking list data
        const bookings = [{
                name: "John Doe",
                id: "123",
                paymentStatus: "Paid"
            },
            {
                name: "Jane Smith",
                id: "456",
                paymentStatus: "Pending"
            },
            {
                name: "Michael Johnson",
                id: "789",
                paymentStatus: "Paid"
            }
        ];

        // Sample review/feedback data
        const reviews = [{
                name: "Alice",
                comment: "Great experience! Highly recommended."
            },
            {
                name: "Bob",
                comment: "Average service, needs improvement."
            },
            {
                name: "Eve",
                comment: "Fantastic stay, will definitely come back!"
            }
        ];

        // Sample Q&A data
        const qaPairs = [{
                question: "What are the check-in and check-out times?",
                answer: "Check-in is at 3:00 PM and check-out is at 11:00 AM."
            },
            {
                question: "Do you provide airport shuttle service?",
                answer: "Yes, we offer complimentary airport shuttle service."
            },
            {
                question: "Is breakfast included in the room rate?",
                answer: "Yes, breakfast is included for all guests."
            }
        ];

        // Function to populate the booking list section
        function populateBookingList() {
            const bookingTableBody = document.getElementById("booking-table-body");
            bookingTableBody.innerHTML = ""; // Clear existing content
            bookings.forEach(booking => {
                const row = document.createElement("tr");
                row.innerHTML = `
            <td>${booking.name}</td>
            <td>${booking.id}</td>
            <td>${booking.paymentStatus}</td>
        `;
                bookingTableBody.appendChild(row);
            });
        }

        // Function to populate the review/feedback section
        function populateReviewFeedback() {
            const reviewFeedbackContainer = document.getElementById("review-feedback-container");
            reviewFeedbackContainer.innerHTML = ""; // Clear existing content
            reviews.forEach(review => {
                const div = document.createElement("div");
                div.innerHTML = `
            <p><strong>${review.name}:</strong> ${review.comment}</p>
        `;
                reviewFeedbackContainer.appendChild(div);
            });
        }





        // Function to populate the Q&A section
        function populateQA() {
            const qaContainer = document.getElementById("qa-container");
            qaContainer.innerHTML = ""; // Clear existing content
            qaPairs.forEach(qa => {
                const div = document.createElement("div");
                div.classList.add("qa-item");
                div.innerHTML = `
            <p><strong>Q: ${qa.question}</strong></p>
            <p><strong>A:</strong> <input type="text" name="answer" class="answer-box" value="${qa.answer}" readonly> <button class="edit-btn">Edit</button> <button class="delete-btn">Delete</button></p>
        `;
                qaContainer.appendChild(div);
            });
        }

        // Call the function to populate the Q&A section initially
        populateQA();



        // Call the functions to populate the sections initially
        populateBookingList();
        populateReviewFeedback();
        populateQA();
    </script>
    <script src="script.js"></script> <!-- Linking JavaScript file -->
</body>

</html>