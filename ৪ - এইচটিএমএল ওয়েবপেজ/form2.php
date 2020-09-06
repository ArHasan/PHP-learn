<?php 
include_once "form2-function.php";
$fruits = ["mango","orange","Banana","apple",'plum','ManTa'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Form2</title>
    <style>
    body{
        mangin-top:30px;
    }
    </style>
</head>
<body>
    
<div class="container">

<div class="row">
  <div class="column column-60 column-offset-20">
    <h1>select / Dropdrown menu</h1>
    <hr>
    <h4>
    <?php 
        // print_r($_POST);
        // if(isset($_POST['fruits']) && $_POST['fruits']!=''){
        //     printf("You have selected: %s",filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING));
        // }

        // $sfruits = isset($_POST['fruits']) ? $_POST['fruits'] : array() ;
        // $sfruits = $_POST['fruits'] ?? array();
        $sfruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
        if(count($sfruits)>0){
            echo "You have selected: ".join(", ",$sfruits);
        }
    ?>
    </h4>

  </div>

</div>

<div class="row">

  <div class="column column-50 column-offset-25">
  <form action="" method="POST">
  <label for="fruits">Select Some furits</label>
  <select style="height:200px;" name="fruits[]" id="fruits" multiple>
    <option value="" disabled selected>Select some values</option>
    
    <?php displayOptions($fruits,$sfruits)?>
  </select>

  <button type="submit">Submit</button>
  </form>
  </div>
</div>

</div>

</body>
</html>