<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$conn = mysqli_connect($server, $username, $password, $database);

echo "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone_no'];
    $password = $_POST['password'];

    // Adding quotes around the values for strings
    $sql = "INSERT INTO `users`(`Name`, `email`, `password`, `phone_no`) VALUES ('$name', '$email', '$password', '$number')";

    if (mysqli_query($conn, $sql)) {
        // Set a session variable to store the success message
        $_SESSION['user_registered_msg'] = 'User Registered Successfully!';
        header("location: Login.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

session_start();

// Display user registered message if it exists
if (isset($_SESSION['user_registered_msg'])) {
    echo '<H4><p id="userRegisteredMsg" style="z-index: 9999; position: fixed; top: 2%; left: 50%; transform: translateX(-50%);">' . $_SESSION['user_registered_msg'] . '</p></H4>';
    echo '<script>
            setTimeout(function(){
                document.getElementById("userRegisteredMsg").style.display = "none";
            }, 3000);
          </script>';

    // Unset the session variable after displaying the message
    unset($_SESSION['user_registered_msg']);
}

// Rest of your code...



if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE `email`='$email' AND `password`= '$password'";
    $result = mysqli_query($conn, $query);

    // Fetching a row
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    // Checking if there's at least one row
    if (mysqli_num_rows($result) == 1) {
        header("location: index.php");
    } else {
        $error = 'EmailID or Password is Incorrect';
    }
}

if (isset($_POST['job'])) {
    $cname = $_POST['cname'];
    $position = $_POST['position'];
    $Jdesc = $_POST['Jdesc'];
    $skills = $_POST['skills'];
    $CTC = $_POST['CTC'];

    // Modify the SQL query to insert data into the 'candidates' table
    $jobsSql = "INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$position','$Jdesc','$skills','$CTC')";

    if (mysqli_query($conn, $jobsSql)) {
        echo '<H4><p id="newJobPostedMsg" style="z-index: 9999; position: fixed; top: 2%; left: 50%; transform: translateX(-50%);">New Job Posted!</p></H4>';
        echo '<script>
                setTimeout(function(){
                    document.getElementById("newJobPostedMsg").style.display = "none";
                }, 3000);
              </script>';
    } else {
        echo "ERROR: Failed to save candidate data. " . mysqli_error($conn);
    }
}

if (isset($_POST['applying'])) {
    $name = $_POST['name'];
    $apply = $_POST['apply'];
    $qual = $_POST['qual'];
    $year = $_POST['year'];

    // Modify the SQL query to insert data into the 'candidates' table
    $candidatesSql = "INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";

    if (mysqli_query($conn, $candidatesSql)) {
        // Set a session variable to store the success message
        $_SESSION['candidate_applied_msg'] = 'New Candidate Applied!';
        // Redirect back to the career.php page
        header("location: career.php");
        exit(); // Make sure to exit after redirection
    } else {
        echo "ERROR: Failed to save candidate data. " . mysqli_error($conn);
    }
    
}
?>