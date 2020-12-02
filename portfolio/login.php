<?php
/**
 * Login.php
 * Nematullah Ayaz
 * 11/28/2020
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

$username = "";
$err = false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];

    require ('includes/logincred.php');

    if ($username == $adminUser && $password == $adminPassowrd){
        $_SESSION['loggedin'] = true;

        // Redirect to the page

        if(!isset($_SESSION['page'])){
            $_SESSION['page'] = 'orders.php';
        }
        header("location:".$_SESSION['page']);
    }

    $err = true;

}
?>

    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <style>
        .err {
            color: darkred;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Login Page</h1>

    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" <?php echo"value = '$username'"?> >

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <?php
        // first method
        if($err){
            echo'<span class="err">Incorrect login</span><br>';
        }
        ?>

        <button type="submit" class="btn btn-success">Login</button>
    </form>

</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
    </html>
