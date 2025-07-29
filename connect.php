



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connect Us</title>
    <link rel="stylesheet" href="connect.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label for="fname">First Name :</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required> <br><br>

            <label for="lname">Last Name :</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required> <br><br>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required> <br><br>

            <label for="state">State :</label>
            <select id="state" name="state" required>
                <option value="">--Select a state--</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Ladakh">Ladakh</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
 
                <option value="Maharashtra">Maharashtra</option>
                <option value="Karnataka">Karnataka</option>

            </select> <br><br>

            <label for="subject">Subject :</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea> <br><br>

            <button type="submit" name="sb" style="background-color: aqua;">Submit</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sb'])) {
        $con = mysqli_connect('localhost', 'root', '', 'register2');

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $state = mysqli_real_escape_string($con, $_POST['state']);
        $subject = mysqli_real_escape_string($con, $_POST['subject']);

        $query = "INSERT INTO contacts (firstname, lastname, email, state, subject) 
                  VALUES ('$firstname', '$lastname', '$email', '$state', '$subject')";

        if (mysqli_query($con, $query)) {
            echo "<p style='color:green;'>Thanks! Your message has been received.</p>";
        } else {
            echo "<p style='color:red;'>Error: " . mysqli_error($con) . "</p>";
        }

        mysqli_close($con);
    }
    ?>
</body>
</html>
