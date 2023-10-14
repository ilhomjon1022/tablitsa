
<?php
    // 3-masala
    function sonniSozBilanIfodalash($son) {
        $birliklar = ["", "bir", "ikki", "uch", "to'rt", "besh", "olti", "yetti", "sakkiz", "to'qqiz"];
        $onliklar = ["", "o'n", "yigirma", "o'ttiz", "qirq", "ellik", "oltmish", "yetmish", "sakson", "to'qson"];
        $yuzliklar = ["", "yuz", "ming", "million", "milliard", "trillion", "kvadrillion", "kvintillion", "sekstillion", "septillion", "oktillion", "nonillion", "dekillion"];
    
        if ($son == 0) {
            return "nol";
        }
    
        $natija = '';
        $qoldiq = $son;
        $rank = 0;
    
        while ($qoldiq > 0) {
            $qoldiqPart = $qoldiq % 1000;
    
            if ($qoldiqPart > 0) {
                $part = sonniSozBilanIfodalashSotibOlish($qoldiqPart);
                $part .= $yuzliklar[$rank];
                $natija = $part . $natija;
            }
    
            $qoldiq = floor($qoldiq / 1000);
            $rank++;
        }
    
        return $natija;
    }
    
    function sonniSozBilanIfodalashSotibOlish($son) {
        $birliklar = ["", "bir", "ikki", "uch", "to'rt", "besh", "olti", "yetti", "sakkiz", "to'qqiz"];
        $onliklar = ["", "o'n", "yigirma", "o'ttiz", "qirq", "ellik", "oltmish", "yetmish", "sakson", "to'qson"];
    
        if ($son < 10) {
            return $birliklar[$son];
        } elseif ($son < 20) {
            return $onliklar[$son - 10] . "on";
        } else {
            $onlik = floor($son / 10);
            $birlik = $son % 10;
            return $onliklar[$onlik] . $birliklar[$birlik];
        }
    }
    
    $sonlar = [123, 56789, 999999];
    foreach ($sonlar as $son) {
        $soz = sonniSozBilanIfodalash($son);
        echo "$son - $soz\n";
    }
    echo "<br>";
    echo "<br>";

    // 4-masala
    function almashtirish($eshmat, $valyuta) {
        $dollarKursi = 12918; 
        $rublKursi = 121;   
        $euroKursi = 12868;   
        $tangaKursi = 25; 
    
        
        switch ($valyuta) {
            case "Dollar":
                $natija = $eshmat / $dollarKursi;
                break;
            case "Rubl":
                $natija = $eshmat / $rublKursi;
                break;
            case "Euro":
                $natija = $eshmat / $euroKursi;
                break;
            case "Tanga":
                $natija = $eshmat / $tangaKursi;
                break;
            default:
                $natija = "Noto'g'ri valyuta";
        }
    
        return $natija;
    }
    
    $eshmatPuli = 100; 
    $valyuta = "Dollar"; 
    
    $natija = almashtirish($eshmatPuli, $valyuta);
    echo "$eshmatPuli so'm Eshmat puli $valyuta ga almashtirilgan: $natija";
    echo "<br>";

    switch (mb_substr($soz, 0, 1)) {
        case "O":
            switch (mb_substr($soz, -1)) {
                case "A":
                    echo "OleOleGoGo";
                    break;
                default:
                    echo "OleOle";
                    break;
            }
            break;
        case "A":
            switch (mb_substr($soz, -1)) {
                case "A":
                    echo "GoGo";
                    break;
                default:
                    echo $soz;
                    break;
            }
            break;
        default:
            echo $soz;
            break;
    }
    echo "<br>";

?>