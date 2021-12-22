<?php

require_once(__DIR__.'/includes/db.php')

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PHP Tutorial UOS</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<?php require_once(__DIR__.'/includes/header.php');?>
<div class= "containter">
    <h1 class= "mt-5 mb-5">Animals</h1>

      <a href="new.php" class="btn-btn-primary">Create new animal</a>

    <table class="table">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">Age</th>
              <th scope="col">Actions</th>
           </tr>
        </thead>
        <tbody>

            <?php

              $stmt = $Conn ->prepare('SELECT * FROM animals');
              $stmt ->execute();
              $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);

              foreach($animals as $key => $animal) {
           ?>

              <tr>
                <th scope="row"><?php echo $animal['animal_id'];?></th>
                <td><?php echo $animal['animal_image'];?></td>
                <td><?php echo $animal['animal_name'];?></td>
                <td><?php echo $animal['animal_age'];?></td>
                <td><a a class="btn btn-primary" href="edit.php?id=<?php echo $animal['animal_id']; ?>">Edit Animal</a></td>
            </tr>
          <?php
              }
            ?> 


  </tbody>
</table>
</div>

  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
  crossorigin="anonymous"></script>
</body>

</html>