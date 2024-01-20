<!DOCTYPE html>
<?php include 'config.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Career</title>
    <style>
        body {
            background-image: url('ApplyNow.webp');
            background-size: cover;
        }   
        form {
            background-color: #fff;
            margin-top: 18em;
            margin-left: 1em;
            margin-right: 58em;
            padding: 15px;
            box-shadow: 3px 3px 1px 1px #888888;
        }
        /* Adjust input width */
        .form-control {
            width: 450px; /* Adjust width as needed */
        }
    </style>
</head>
<body>
<?php
    // Display the success message if it exists in the session
    if (isset($_SESSION['candidate_applied_msg'])) {
        echo '<h2><p id="candidateAppliedMsg" style="z-index: 9999; position: fixed; top: 4%; left: 50%; transform: translateX(-50%);">' . $_SESSION['candidate_applied_msg'] . '</p></h2>';
        echo '<script>
                setTimeout(function(){
                    document.getElementById("candidateAppliedMsg").style.display = "none";
                }, 3000);
              </script>';
        // Unset the session variable to clear the message
        unset($_SESSION['candidate_applied_msg']);
    }
    ?>
    <form>
        <h3>SDE</h3>
        <p><h4>Company Info :</h4>Earo</p>
        <p>
            [Software Development Professions.]
        </p>
        <p><h6>Skills Reqd:</h6>PHP, html, CSS, JScript, MySQL, PhpMyAdmin, Xampp</p>
        <h6>Job Location:</h6>Deli
        <p><h6>CTC:</h6>15-20LPA</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applyModalLabel">Apply for Jobs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST" style="margin-top: 0em; margin-left: 0em; margin-right: 0em; padding: 5px;">
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputName" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="inputApplyingFor" class="form-label">Applying For</label>
                            <input type="text" class="form-control" id="inputApplyingFor" name="apply">
                        </div>
                        <div class="mb-3">
                            <label for="inputQualification" class="form-label">Qualification</label>
                            <input type="text" class="form-control" id="inputQualification" name="qual">
                        </div>
                        <div class="mb-3">
                            <label for="inputYearPassout" class="form-label">Year Passout</label>
                            <input type="text" class="form-control" id="inputYearPassout" name="year">
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="applying">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
