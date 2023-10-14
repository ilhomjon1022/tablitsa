<?php

    // 1-masala

    $text = "Salom dunyo!";
    echo $text;

    echo"<br>";
    echo"<br>";

    // 2-masala

    $text1 = "Salom";
    $text2 = "dunyo!";
    echo $text1 . " " . $text2;

    echo"<br>";
    echo"<br>";

    // 3-masala

    $ism = "Ilhomjon";
    echo strlen($ism);

    echo"<br>";
    echo"<br>";

     // 4-masala

     $ism = "Ilhomjon";
     echo substr($ism, 5);
 
     echo"<br>";
     echo"<br>";

     // 5-masala

     $matn = "Bugun ob havo yaxshi";
    if(strpos($matn, "havo") !== false) {
        echo "Matnda 'havo' so'zi mavjud.";
    } else {
        echo "Matnda 'havo' so'zi yo'q.";
    }

    echo"<br>";
    echo"<br>";

    // 6-masala
    function generatePassword($length = 8) {
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        $password = '';
           
        for ($i = 0; $i < $length; $i++) {
            $password .= $data[rand(0, strlen($data) - 1)];
        }
        
        return $password;
        }
        
        $password = generatePassword(8);
        echo $password;

    echo"<br>";
    echo"<br>";

    // 7-masala

    $text = "Assalomu alaykum O'zbekiston";
    $newText = str_replace("O'zbekiston", "jonajon O'zbekiston", $text);

    echo $newText;

    echo"<br>";
    echo"<br>";

    // 8-masala

    $email = "example@gmail.com";
    $email = substr($email, 8);
    echo $email;

    echo"<br>";
    echo"<br>";

    // 9-masala

    $son = '000346023.24';
    $son = substr($son, 3);
    echo $son;

    echo"<br>";
    echo"<br>";

    // 10-masala

    $url = 'https://kun.uz/50487176';
    $url = substr($url, 15);
    echo $url;

    echo"<br>";
    echo"<br>";

    // 11-masala

    $file = '/Users/sardordushamov/darslar/kurs/index.php';
    $file = substr($file, 35);
    echo $file;

    echo"<br>";
    echo"<br>";

     // 12-masala

     $time = str_split("252233", 2);
     if ($time[0] > 24 || $time[1] > 59 || $time[2] > 59) {
         echo "Xatolik: noto'g'ri vaqt formati";
     } else {
         echo $time[0] . ":" . $time[1] . ":" . $time[2];
     }

     echo"<br>";
     echo"<br>";

     // 13-masala

     $number = "+99899999999912"; // Telefon raqamni kiritish

    if (preg_match('/^\+998\d{9}$/', $number)) { // Telefon raqamini tekshirish
        echo "Telefon raqam";
    } else {
        echo "Telefon raqam emas";
    }

     echo"<br>";
     echo"<br>";

     // 14-masala

        $phone_number = "+998999999999";

        // Berilgan raqamni uzunligini tekshirish
        if (strlen($phone_number) == 13 && substr($phone_number, 0, 4) == "+998") {
        // Telefon raqami to'g'ri formatda
        $operator_code = substr($phone_number, 4, 2);
        
        // Kompaniyani aniqlash
        $operator = "";
        switch ($operator_code) {
            case "90":
            case "91":
                $operator = "Beeline";
                break;
            case "93":
            case "94":
                $operator = "Ucell";
                break;
            case "97":
                $operator = "Mobiuz";
                break;
            case "99":
                $operator = "Uzmobile";
                break;
            default:
                $operator = "Noma'lum";
                break;
        }
        
            echo "Telefon raqami $operator kompaniyasiga tegishli.";
        } else {
            echo "Noto'g'ri telefon raqami formati.";
        }

     echo"<br>";
     echo"<br>";

     $url = "Assalomu alaykum !";
     echo strpos("Assalomu alaykum!", "lay"), " \n";
?>