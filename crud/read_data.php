<?php
include "./koneksi.php";

$QUERY = "SELECT * FROM user";
$RESULTS = mysqli_query($KONEKSI, $QUERY)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
</head>
<body>
    <h1>Data User</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telpon</th>
            <th>Kelamin</th>
        </tr>
        <?php foreach ($RESULTS as $key => $value) {?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['telp'] ?></td>
                <td><?= $value['jk'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>