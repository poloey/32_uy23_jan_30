<?php 

if (isset($_FILES['file'])) {
  $file = $_FILES['file'];
  $name = $file['name'] ; //  zuck.jpg
  $tmp_name = $file['tmp_name']; // file source
  if (!file_exists('hello')) {
    mkdir('hello');
  }
  $destination = 'hello/' . $name;
  move_uploaded_file($tmp_name, $destination);
}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Upload file</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
 <div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h2>upload file</h2>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data"> 
        <div class="form-group">
          <label for="file">File</label>
          <input type="file" name="file" id="file" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-outline-info">upload file</button>
        </div>
      </form>
    </div>
  </div>
 </div> 
</body>
</html>