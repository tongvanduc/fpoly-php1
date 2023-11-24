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

<?php require_once 'logic/logic-lay-all-brand.php'; ?>

<div class="container">
    <div class="row">
        <h1>FORM - Thêm mới Ô tô</h1>

        <form action="logic/logic-them-moi.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name">

            <label for="sku">SKU</label>
            <input type="text" class="form-control" name="sku" id="sku">

            <label for="brand_id">Brand</label>
            <select name="brand_id" id="brand_id" class="form-control">

                <?php foreach ($brands as $brand): ?>
                    <option value="<?= $brand['id'] ?>">
                        <?= $brand['name'] ?>
                    </option>
                <?php endforeach; ?>

            </select>

            <label for="img" class="mt-2">Img</label>
            <input type="file" class="form-control" name="img" id="img">

            <label for="description" class="mt-2">description</label>
            <textarea class="form-control" name="description" id="description"></textarea>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</div>

</body>

</html>