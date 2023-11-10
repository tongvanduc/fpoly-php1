<?php

// Danh sách sinh viên
$sinhViens = [
    [
        'name' => 'SV 1',
        'email' => 'sv3@gmail.com',
    ],
    [
        'name' => 'SV 2',
        'email' => 'sv3@gmail.com',
    ],
    [
        'name' => 'SV 3',
        'email' => 'sv3@gmail.com',
    ]
];

?>

<!DOCTYPE html>
<html>

<head>
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

    <h2>Danh sách sinh viên</h2>

    <table>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        <?php foreach ($sinhViens as $key => $sinhVien): ?>
            <tr>
                <td> <?php echo ++$key; ?> </td>
                <td> <?= $sinhVien['name'] ?> </td>
                <td> <?= $sinhVien['email'] ?> </td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>