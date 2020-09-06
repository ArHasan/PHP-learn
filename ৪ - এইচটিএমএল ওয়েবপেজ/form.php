<?php 
header( 'X-XSS-Protection:0');
include_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>ArHasan</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="column column-60 column-offset-20 text-center">
                <h2>Our forms</h2>
                <p>
                     <?php 
                     $fname = '';
                     $lname = '';
                     $checked = '';

                     print_r($_REQUEST);

                     if(isset($_REQUEST['cb1']) && $_REQUEST['cb1']==1){
                         $checked = 'checked';
                     }
                     ?>
                    <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname']) ){ 
                    // $fname = htmlspecialchars($_REQUEST['fname']);}
                    $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_SPECIAL_CHARS);}
                    ?>

                    <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){ 
                    // $lname = htmlspecialchars($_REQUEST['lname']);
                    $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
                     }?>
                </p>
                <p>
                First name: <?php echo $fname?><br>
                Last name: <?php echo $lname?>
                </p>
            </div>
        </div>

        <div class="row">

            <div class="column column-60 column-offset-20">
                <form action="" method="POST">
                    <label for=" fname">First Name</label>
                    <input type="text" name="fname" id="fname" value = <?php echo $fname ?> >

                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value = <?php echo $lname ?> >

                     <div>
                        <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checked?>>
                        <label for="cb1" class="label-inline">Some Checkbox</label>
                     </div>
                     <div>
                        <label class="label">Select Some Fruits</label>

                        <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits','orange')?> >
                        <label class="label-inline">Orange</label><br>
                        <input type="checkbox" name="fruits[]" value="mango" <?php isChecked('fruits','mango')?> >
                        <label class="label-inline">mango</label><br>
                        <input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked('banana')?> >
                        <label class="label-inline">banana</label><br>
                        <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitChecked('lemon')?> >
                        <label class="label-inline">lemon</label><br>

                     </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>


</body>

</html>