<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Danh mục</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <?php require_once 'logic/logic-danh-sach.php'; ?>

    <table>
        <caption>
            <h1>Danh sách danh mục</h1>
            <a href="create.php">Thêm mới</a>
        </caption>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Img</th>
            <th>IsActive</th>
            <th>Action</th>
        </tr>

        <?php foreach ($result as $key => $value) : ?>
            
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td>
                    <img src="<?= $value['img'] ?>" width="100px" alt="">
                </td>
                <td>
                    <?= $value['is_active'] ? 'Yes' : 'No'  ?>
                </td>
                <td>
                    <a href="update.php?id=<?= $value['id'] ?>">Cập nhật</a>

                    <form action="delete.php?id=<?= $value['id'] ?>" method="POST">
                        <input type="hidden" name="img" value="<?= $value['img'] ?>">

                        <button type="submit" 
                                onclick="return confirm('Có chắn chắn xóa không?')">Xóa</button>
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>
</body>

</html>