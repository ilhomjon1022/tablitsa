<?php
    // 1-masala
    function sonniSozBilanIfodalash($son) {
        switch ($son) {
            case 1:
                return "bir";
            case 2:
                return "ikki";
            case 3:
                return "uch";
            case 4:
                return "to'rt";
            case 5:
                return "besh";
            case 6:
                return "olti";
            case 7:
                return "yetti";
            case 8:
                return "sakkiz";
            case 9:
                return "to'qqiz";
            case 10:
                return "o'n";
            default:
                return "Noto'g'ri son";
        }
    }
    
    $sonlar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach ($sonlar as $son) {
        $soz = sonniSozBilanIfodalash($son);
        echo "$son - $soz;\n";
    }

    echo "<br>";
    
    // 2-masala
    function sonniSozBilanIfodalashh($son) {
        $birliklar = ["", "bir", "ikki", "uch", "to'rt", "besh", "olti", "yetti", "sakkiz", "to'qqiz"];
        $onliklar = ["", "o'n", "yigirma", "o'ttiz", "qirq", "ellik", "oltmish", "yetmish", "sakson", "to'qson"];
    
        if ($son == 0) {
            return "nol";
        } elseif ($son < 10) {
            return $birliklar[$son];
        } elseif ($son % 10 == 0) {
            return $onliklar[$son / 10];
        } else {
            $onlik = $onliklar[floor($son / 10)];
            $birlik = $birliklar[$son % 10];
            return "$onlik $birlik";
        }
    }
    
    $sonlar = range(1, 100); // 1 dan 100 gacha sonlar
    foreach ($sonlar as $son) {
        $soz = sonniSozBilanIfodalashh($son);
        echo "$son - $soz;\n";
    }

    echo "<br>";

    
    // 5-masala
    function hisoblash($a, $b, $amal) {
        switch ($amal) {
            case "+":
                return $a + $b;
            case "-":
                return $a - $b;
            case "*":
                return $a * $b;
            case "/":
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return "Nolga bo'lish mumkin emas!";
                }
            default:
                return "Noto'g'ri amal!";
        }
    }
    
    $a = 10; // Birinchi son
    $b = 5;  // Ikkinchi son
    $amal = "+"; // Amal (qo'shish, ayirish, ko'paytirish, bo'lish)
    
    $natija = hisoblash($a, $b, $amal);
    echo "Natija: $a $amal $b = $natija";
    echo "<br>";

    // 6-masala
    function aniqlashBurj($d, $m) {
        $burjlar = [
            "Buzoq Burji" => ["start" => "20.04", "end" => "20.05"],
            "Egizaklar Burji" => ["start" => "21.05", "end" => "21.06"],
            "Qisqichbaqa Burji" => ["start" => "22.06", "end" => "22.07"],
            "Arslon Burji" => ["start" => "23.07", "end" => "23.08"],
            "Sumbula Burji" => ["start" => "24.08", "end" => "23.09"],
            "Taroz Burji" => ["start" => "24.09", "end" => "23.10"],
            "Chayon Burji" => ["start" => "24.10", "end" => "22.11"],
            "O'q Otar Burji" => ["start" => "23.11", "end" => "22.12"],
            "To'g' Echkisi Burji" => ["start" => "22.12", "end" => "20.01"],
            "Qovg'a Burji" => ["start" => "21.01", "end" => "19.02"],
            "Baliq Burji" => ["start" => "20.02", "end" => "20.03"],
            "Qo'y Burji" => ["start" => "21.03", "end" => "19.04"]
        ];
    
        $sana = "$d.$m";
        foreach ($burjlar as $burj => $datalar) {
            if ($sana >= $datalar["start"] && $sana <= $datalar["end"]) {
                return "$sana -> $burj Burji";
            }
        }
    
        return "Hech qaysi burjga kirilmagan";
    }
    
    $d = 2; // Kuni
    $m = 12; // Oyi
    
    $natija = aniqlashBurj($d, $m);
    echo "Berilgan sana $natija";
    echo "<br>";
    echo "<br>";

    $x = 0;
    if($x++){
        print "true";
    }else{
        print "false";
    }  
?>