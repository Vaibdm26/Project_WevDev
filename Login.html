<?php
include 'config.php';

// Initialize the error variable
$error = '';

// Check if the Login button is clicked
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE `email`='$email' AND `password`= '$password'";
    $result = mysqli_query($conn, $query);

    // Checking if there's at least one row
    if (mysqli_num_rows($result) == 1) {
        header("location: index.php");
        exit(); // Make sure to exit after redirection
    } else {
        $error = 'EmailID or Password is Incorrect';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      body {
        margin: 0px;
        padding: 0px;
        background-image: url('backgroundimage.jpg');
        background-size: cover;
      }
      form {
        background-color: #fff;
        margin-top: 6em;
        margin-left: 25em;
        margin-right: 25em;
        padding: 15px;
        box-shadow: 8px 8px 8px 8px #888888;
      }
      .error {
        color: red;
        text-align: center;
        margin-bottom: 10px; /* Add margin to separate from form elements */
      }
    </style>
    <title>Login</title>
</head>
<body>
  <div class="container">
    <form method="POST">
        <!-- Display error message -->
        <?php if ($error !== ''): ?>
            <div class="error" id="errorMessage"><?php echo $error; ?></div>
            <script>
                setTimeout(function() {
                    document.getElementById('errorMessage').style.display = 'none';
                }, 3000);
            </script>
        <?php endif; ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="Login">Submit</button>
        <p style="text-align: center;">New User?<br>Create Account <a href="register.php">Sign Up</a></p>
    </form>
  </div>
</body>
</html>
