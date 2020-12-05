<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
    <?php
        echo $data["mau"]." ".$data["kichThuoc"];
        echo $data["khachHang"];
    ?>
    </h2>
    <?php
        // while($row = mysqli_fetch_assoc($data["khachHang"])){
        //     echo "A";
        // }
    ?>
</body>
</html>