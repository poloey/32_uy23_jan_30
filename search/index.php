<?php 

$con = new PDO('mysql:host=localhost;dbname=search', 'root', '');

if (isset($_GET['q'])) {
  $q = $_GET['q'];
  $statement = $con->prepare("select * from people where name like :name or email like :email");
  $statement->execute([
    ':name' => '%'.$q.'%',
    ':email' => '%'.$q.'%',
  ]);
} else {
  $statement = $con->prepare('select * from people');
  $statement->execute();
}

$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2>All peoples</h2>
      </div>
      <div class="card-body">
        <form class="my-5" action="" method="get">
          <div class="form-control">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="search here .....">
              <button type="submit" class="input-group-append btn btn-primary">Search</button>
            </div>
          </div>

        </form>
        <table class="table table-bordered">
          <tr>
            <th>name</th>
            <th>email</th>
          </tr>
          <?php foreach ($people as $person): ?>
            <tr>
              <td><?= $person->name; ?></td>
              <td><?= $person->email; ?></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>
    </div>
  </div>
  
</body>
</html>