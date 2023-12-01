<?php 

require_once 'session.php';

if (!empty($_POST)) {
    $username = "admin";
    $password = "123456";

    if ($username == $_POST['username'] && $password == $_POST['password']) {
        $_SESSION['user'] = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];

        header('Location: index.php');
        exit();
    } else {
        echo "Tài khoản chưa chính xác";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    
<div class="container">
    <div class="row">
        <h1>FORM - Login</h1>

        <form action="" method="POST">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username">

            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</div>

</body>
</html>