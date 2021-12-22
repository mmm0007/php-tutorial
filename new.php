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
    <h1 class= "mt-5 mb-5">Create New Animal</h1>

    <?php
        if($_POST['animal_name']) {
            // Process the form
            $data = [

                "animal_name" => $_POST['animal_name'],
                "animal_age" => $_POST['animal_age'],
                "animal_image" => $_POST['animal_image']
            ];

            $query = "INSERT INTO animals (animal_name, animal_age, animal_image) VALUES (:animal_name, :animal_age, :animal_image)";
            $stmt = $Conn-> prepare($query);
            $stmt ->execute($data);

            ?>

        <div class="alert alert-success" role="alert">
        Your animal has been created.
        </div>
        
        <?php

        }
    

    ?> 

    <form action="" method="post">
  <div class="form-group">
    <label for="animalname">Animal Name</label>
    <input type="text" class="form-control" id="animalname" name="animal_name">
  </div>
  <div class="form-group">
  <label for="animalage">Animal Age</label>
  <input type="text" class="form-control" id="animalage" name="animal_age">
</div>
<div class="form-group">
  <label for="animalimage">Animal Image</label>
  <input type="text" class="form-control" id="animalimage" name="animal_image">
</div>


  <button type="submit" class="btn btn-primary">Create</button>
</form>

</div>

  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
  crossorigin="anonymous"></script>
</body>

</html>