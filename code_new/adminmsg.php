<!DOCTYPE html>
<html>
<title>Questions</title>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #00022e;
    }

    .btn {
        display: inline-block;
        position: relative;
        cursor: pointer;
        padding: 1rem 3rem;
        font-size: 1.8rem;
        color: var(--white);
        text-align: center;
        text-transform: capitalize;
        transition: .5s linear;
        margin-top: 1rem;
        border: .1rem solid #2B1103;
        background-color: transparent;
        top: 80px;
        left: 580px;
        text-decoration: none;
        background-color: #FAE6B1;
        color: #00022e;
    }

    .btn:hover {
        border-radius: 5rem;
        background-color: #FFA101;
        border-color: transparent;
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

    .head {
        width: 100%;
        background-color: #FAE6B1;
        height: 120px;
    }

    /*    background-image: linear-gradient(90deg, #020024 0%, #090979 35%, #00d4ff 100%)*/
</style>
</head>

<body>
    <div class="head">
        <h1>Questions</h1>
    </div>
    <div class="wave4">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <table>
        <tr>
            <th>Question ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Contact Number</th>
            <th>Question </th>
        </tr>
        <?php
        require('./config.php');
        $query = "SELECT * FROM contact_us";
        $res = mysqli_query($con, $query);
        if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td>" . $row['fid'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['number'] . "</td>";
                echo "<td>" . $row['review'] . "</td>";
                echo "<td class='crud'>";
                $id = $row['fid'];
                echo "<button class='bttn2' onclick=\"location.href='deletemsg.php?id=$id'\">Delete</button>";
                echo "</td>";
            }
        } else {
            echo "<tr><td colspan='7'>Empty set</td></tr>";
        }

        ?>
    </table>
</body>

</html>