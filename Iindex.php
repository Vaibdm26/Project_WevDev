<?php include 'header.php'?>

<!-- Page content -->
<div class="content">
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
   
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company</label>
    <input type="text" class="form-control" id="cname" name="cname">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="position" name="position">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Descriptopn</label>
    <input type="text" class="form-control" id="JobDesc" name="Jdesc">
  </div>
  <div class="mb-3">
    <label for="Skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary"name="job">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <?php $sql="SELECT  `cname`, `position`, `CTC` FROM `jobs`";
  $result = mysqli_query($conn,$sql);
  $i=0;
 if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()){
    echo"
  <tbody>
    <tr>
      <td>" .++$i."</td>
      <td>" .$row['cname']."</td>
      <td>" .$row['position']."</td>
      <td>" .$row['CTC']."</td>
    </tr>";
  }
 } 
 else{
  echo"";
 }?>
  <tbody>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>