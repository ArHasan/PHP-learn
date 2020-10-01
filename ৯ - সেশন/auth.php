<?php
session_start([
        'cookie_lifetime'=>60,
]);
//session_destroy();
$error = false;
if (isset($_POST['username']) && isset($_POST['password'])){
    if ('admin'==$_POST['username'] && 'e5e5c0754f1e26bf915455e21cf2eba5'==md5($_POST['password'])){
        $_SESSION['loggedin']=true;
    }else{
        $error = true;
        $_SESSION['loggedin']=false;
    }
}
if (isset($_POST['logout'])){
    $_SESSION['loggedin']=false;
    session_destroy();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Auth</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>Simple Auth Example</h1>
        </div>
    </div>  <div class="row">
        <div class="column column-60 column-offset-20">
            <?php
            if (true == $_SESSION['loggedin']){
                echo "Hello Admin, Welcome";
            }else{
//                echo md5('tick')."<br>";
                echo "Hello Stranger, Login Below";
            }
            ?>
        </div>
    </div>
    <div class="row" style="...">
        <div class="column column-60 column-offset-20">
            <?php
            if ($error){
                echo "<blockquote style='color:#ff0000;'><strong>Username</strong> and <strong>Password</strong> didn't match</blockquote>";
            }
            if (false == $_SESSION['loggedin']):
            ?>
            <form action="" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <button type="submit" name="submit" class="button-primary">Log in</button>
            </form>
            <?php
            else:
            ?>
            <form action="auth.php" method="post">
                <input type="hidden" name="logout" value="1">
                <button type="submit" name="submit" class="button-primary">Log out</button>
            </form>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>

</body>
</html>