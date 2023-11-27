<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Bài viết</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">

            <?php require_once 'logic/logic-danh-sach.php'; ?>

            <h1>Danh sách Bài viết</h1>
            
            <a class="btn btn-success" href="../index.php">Quay về tổng quan</a>
            <a class="btn btn-info mt-2" href="create.php">Thêm mới</a>

            <table class="table table-hover">
            
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>SKU</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Img</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($result as $key => $value) : ?>

                        <tr>
                            <td><?= $value['p_id'] ?></td>
                            <td><?= $value['p_sku'] ?></td>
                            <td><?= $value['p_name'] ?></td>
                            <td>
                                <?= $value['c_name'] ?>
                            </td>
                            <td>
                                <img src="<?= $value['p_img'] ?>" width="100px" alt="">
                            </td>
                            <td>
                                <a class="btn btn-success" href="update.php?id=<?= $value['p_id'] ?>">Cập nhật</a>

                                <form action="delete.php?id=<?= $value['p_id'] ?>" method="POST">
                                    <input type="hidden" name="img" value="<?= $value['p_img'] ?>">

                                    <button class="btn btn-danger mt-2" type="submit" onclick="return confirm('Có chắn chắn xóa không?')">Xóa</button>
                                </form>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>

            </table>

        </div>
    </div>
</body>

</html>