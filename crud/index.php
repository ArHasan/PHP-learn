<?php
require_once "templates/functions.php";
$info = '';
$task = $_GET['task'] ?? 'report';
$error = $_GET['error'] ?? '0';

if ('delete' == $task) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    if ($id>0) {
        deleteStudent($id);
        header('location: /crud/index.php?task=report');
    }
}
if ('seed' == $task) {
    seed();
    $info = "Seeding is complete";
}
$fname = '';
$lname = '';
$roll = '';
if (isset($_POST['submit'])) {
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_STRING);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

    if ($id) {
        //update the existing student
        if ($fname != '' && $lname != '' && $roll != '') {
            $result = updateStudent($id, $fname, $lname, $roll);
            if ($result) {
                header('location: /crud/index.php?task=report');
            } else {
                $error = 1;

            }
        }
    } else {
        //add a new student
        if ($fname != '' && $lname != '' && $roll != '') {
            $result = addStudent($fname, $lname, $roll);
            if ($result) {
                header('location: /crud/index.php?task=report');
            } else {
                $error = 1;
                //   header('location: /crud/index.php?tast=report&error=1');
            }
        }
    }

}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>CRUD Project-2</title>
</head>

<body>
    <div class="container">
        <div class="mx-auto text-center">
            <h1>CRUD Project -2</h1>
            <?php include_once 'templates/nav.php'?>
        </div>
        <div class="row">
            <?php
if ($info != '') {
    echo "<p>{$info}</p>";
}
?>
        </div>

        <?php if ('1' == $error): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <blockquote>
                    Duplicate roll number
                </blockquote>
            </div>
        </div>
        <?php endif;?>

        <?php if ('report' == $task): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php generateReport();?>
                <!-- <div>
                    <pre>
                      <?php //printRaw();?>
                    </pre>
                </div> -->
            </div>
        </div>
        <?php endif;?>

        <?php if ('add' == $task): ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" action="/crud/index.php?task=add">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                    <label for="roll">Roll</label>
                    <input type="text" name="roll" id="roll" value="<?php echo $roll; ?>">
                    <button type="submit" class="button-primary" value="save" name="submit">save</button>
                </form>
            </div>
        </div>
        <?php endif;?>

        <?php if ('edit' == $task):
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    $student = getStudent($id);
    if ($student):
    ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <input type="hidden" value="<?php echo $id ?>" name="id">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $student['fname']; ?>">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?php echo $student['lname']; ?>">
                    <label for="roll">Roll</label>
                    <input type="text" name="roll" id="roll" value="<?php echo $student['roll']; ?>">
                    <button type="submit" class="button-primary" value="save" name="submit">update</button>
                </form>
            </div>
        </div>
        <?php
endif;
endif;

?>

    </div>

 
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>