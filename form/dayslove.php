<?php 
    session_start();
?>

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
        <h1>FORM - POST - DAYS LOVE</h1>

        <form action="./handleDayslove.php" method="POST">
            <label for="man">Bạn Nam</label>
            <input type="text" class="form-control" name="man" id="man">
            <p style="color: red;"><?= $_SESSION['nam'] ?? ''; ?></p>

            <label for="women" class="mt-2">Bạn Nữ</label>
            <input type="text" class="form-control" name="women" id="women">
            <p style="color: red;"><?= $_SESSION['nu'] ?? ''; ?></p>

            <label for="start_love" class="mt-2">Start Love</label>
            <input type="date" class="form-control" name="start_love" id="start_love">

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</div>

</body>

</html>