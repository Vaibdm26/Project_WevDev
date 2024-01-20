<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Page Title</title>
  <!-- Include Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>

<?php include 'header.php'?>

<div class="content">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Candidate Name</th>
        <th scope="col">Position</th>
        <th scope="col">Year Passout</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql="Select name,apply,year from candidates";
      $result=mysqli_query($conn,$sql);
      $i=0;
      if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
          echo'
          <tr>
          <th scope="row">' .++$i. '</th>
          <td> '.$rows['name'].'</th>
          <td>' .$rows['apply'].'</td>
          <td>'.$rows['year'].'</td>
          </tr>';


        }
      }
      else{
        echo"";
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
