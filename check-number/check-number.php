<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <fieldset>
        <legend>Check Number</legend>
        So chinh xac: <br>
        <input type="text" name="set-number" placeholder="so chinh xac">
        <button type="submit"> setNumber</button>
    </fieldset>
</form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $setNumber = $_GET['set-number'];

    function checkNumber($arr, $checkNumber)
    {
        $firstIndex = 0;
        $lastIndex = count($arr) - 1;
        while ($firstIndex <= $lastIndex) {
            $midIndex = (int)(($firstIndex + $lastIndex) / 2);
            if ($arr[$midIndex] > $checkNumber) {
                $lastIndex = $midIndex - 1;
                echo "nhap so nho hon: " . $arr[$midIndex] . "<br>";
            } elseif ($arr[$midIndex] < $checkNumber) {
                $firstIndex = $midIndex + 1;
                echo "nhap so lon hon: " . $arr[$midIndex] . "<br>";
            } else {
                echo $arr[$midIndex]. "<br>";
                return true;
            }
        }
        return false;
    }

    /**  tao mot mang chua cac gia tri tu 1 -> 500  */
    $arrayInteger = array();
    for ($i = 1; $i < 501; $i++) {
        $arrayInteger[$i] = $i;
    }
//    var_dump($arrayInteger);

    /**     end game */
    if (checkNumber($arrayInteger, $setNumber)) {
        echo "chinh xac - tro choi ket thuc";
    } else {
        echo "so can tim ko co trong mang ";
    }
}

