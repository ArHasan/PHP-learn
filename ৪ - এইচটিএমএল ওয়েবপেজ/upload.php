<?php 
$allowedTypes = array(
    'image/png',
    'image/jpg',
    'image/jpeg',
);
if($_FILES['photo']){
    // if($_FILES['photo']['type']=='image/png' || $_FILES['photo']['type']=='image/png'){
        if(in_array($_FILES['photo']['type'],$allowedTypes)!==false && $_FILES['photo']['size']<3*1024*1024){
            move_uploaded_file($_FILES['photo']['tmp_name'],"img/".$_FILES['photo']['name']);
     }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Upload_file</title>
    <style>
        body {
            mangin-top: 30px;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>File Upload</h1>
                <hr>
               
                    <pre>
                        <p>
                            <?php
                             print_r($_POST);  
                             print_r($_FILES);  
                             ?>
                        </p>
                    </pre>
            
            </div>

        </div>

        <div class="row">

            <div class="column column-50 column-offset-25">
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="fname">First Name:</label>
                    <input type="text" name="fname" id="fname">

                    <label for="lname">Last Name:</label>
                    <input type="text" name="lname" id="lname">
                    
                    <label for="photo">Photo:</label>
                    <input type="file" name="photo[]" id="photo">

                    
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>

</body>

</html>