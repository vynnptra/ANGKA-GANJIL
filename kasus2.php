

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        
        function bilangan_ganjil($array) {
            $result = [];        
            if (is_array($array)) {
                foreach ($array as $number) {
                    if (is_int($number)) {
                        if ($number % 2 == 1) {
                            $result[] = $number;
                        }
                    } else {
                        echo "Error! Terdapat input yang salah";
                        return;
                    }
                }
                return $result; 
            } else {
                echo "Error! Input harus berupa array.";
                return;
            }
        }
        $input = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, ];
        $hasil = bilangan_ganjil($input);
        print_r($hasil);
    ?>

</body>
</html>