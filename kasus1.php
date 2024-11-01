<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        function luas($panjang) {
            if ($panjang >0) {
                $luas = $panjang * $panjang;
                echo "luas persegi dengan sisi " . $panjang . " adalah " . $luas;
            } else {
                echo "eror, sisi yang anda masukan salah";
            }
        };

        luas(-30);
    ?>

</body>
</html>