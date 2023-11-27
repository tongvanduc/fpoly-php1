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

    <?php require_once 'logic/logic-lay-1-theo-id.php'; ?>
    <?php require_once 'logic/logic-lay-all-category.php'; ?>

    <div class="container">
        <div class="row">
            <h1>FORM - Thêm mới Bài viết</h1>

            <form action="logic/logic-cap-nhat.php" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

                <label for="title">title</label>
                <input type="text" class="form-control" name="title" id="title" value="<?= $result['name'] ?>">

                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">

                    <?php foreach ($categories as $category): ?>
                        <option <?= $category['id'] == $result['category_id'] ? 'selected' : '' ?>
                            value="<?= $category['id'] ?>">
                            <?= $category['name'] ?>
                        </option>
                    <?php endforeach; ?>

                </select>

                <label for="img" class="mt-2">Img</label>
                <input type="file" class="form-control" name="img" id="img">
                <input type="hidden" name="img-current" id="img-current" value="<?= $result['img'] ?>">
                <img src="<?= $result['img'] ?>" width="100px" alt=""> <br />

                <label for="description" class="mt-2">description</label>
                <textarea class="form-control" name="description" id="description"><?= $result['description'] ?></textarea>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</div>

</body>

</html>