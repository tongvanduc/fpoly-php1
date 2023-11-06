<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - POST</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<div class="container">
    <div class="row">
        <h1>FORM - POST - ĐĂNG KÝ</h1>

        <form action="./handlePost.php" method="POST">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">

            <label for="username" class="mt-2">Username</label>
            <input type="text" class="form-control" name="username" id="username">

            <label for="password" class="mt-2">Password</label>
            <input type="password" class="form-control" name="password" id="password">

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</div>

</body>

</html>