<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $stringNumbers = $_POST['telephoneNumber'];
    $arrayNumbers = explode(',', $stringNumbers);
//    print_r($arrayNumbers);
    /** kiem tra xem co phai la so dien thoai khong */
    function checkTelephoneNumbers($strNums)
    {
        $length = strlen($strNums);
        if (preg_match('/^[0-9]+$/', $strNums) && $length == 10) {
            return true;
        } else {
            return false;
        }
    }

    $VinaPhone = [];
    $Viettel = [];
    $MobiFone = [];
    foreach ($arrayNumbers as $number) {
        if (checkTelephoneNumbers($number)) {
            $headNumbers = substr($number, 0, 3);
            switch ($headNumbers) {
                case '032':
                case '033':
                case '034':
                case '035':
                case '036':
                case '037':
                case '038':
                case '039':
                case '086':
                case '096':
                case '097':
                case '098':
                    array_push($Viettel, $number);
                    break;
                case '081':
                case '082':
                case '083':
                case '084':
                case '085':
                case '088':
                case '091':
                case '094':
                    array_push($VinaPhone, $number);
                    break;
                case '070':
                case '076':
                case '077':
                case '078':
                case '079':
                case '089':
                case '090':
                case '093':
                    array_push($MobiFone, $number);
                    break;

            }
        }
    }
    function showTelephoneNumbers($arr)
    {
        $numbers = '';
        for ($i = 0; $i < count($arr); $i++) {
            $numbers .= $arr[$i] . "<br>";
        }
        return $numbers;
    }

//    echo "Viettel: " . showTelephoneNumbers($Viettel) . "<br>";
//    echo "VinaPhone: " . showTelephoneNumbers($VinaPhone) . "<br>";
//    echo "MobiFone: " . showTelephoneNumbers($MobiFone) . "<br>";
}
include_once "list.php";
