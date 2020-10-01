<?php
session_start([
    'cookie_lifetime' => 300,
]);
$error = false;
//session_destroy();

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$fp = fopen("templates/users.txt", "r");
if ($username && $password) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    while ($data = fgetcsv($fp)) {
        if ($data[0] == $username && $data[1] == md5($password)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $username;
            $_SESSION['role'] = $data[2];
            header('location:index.php');
        }
    }
    if (!$_SESSION['loggedin']) {
        $error = true;
    }
}

if (isset($_GET['logout'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['role'] = false;
    session_destroy();
    header('location:index.php');
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
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php
            if (true == $_SESSION['loggedin']) {
                echo "Hello Admin, Welcome";
            } else {
//                echo md5('tick')."<br>";
                echo "Hello Stranger, Login Below";
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <?php
            if ($error) {
                echo "<blockquote style='color:#ff0000;'><strong>Username</strong> and <strong>Password</strong> didn't match</blockquote>";
            }
            if (false == $_SESSION['loggedin']):
                ?>
                <form method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <button type="submit" name="submit" class="button-primary">Log In</button>
                </form>
            <?php
            else:
                ?>
                <form action="auth.php" method="POST">
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