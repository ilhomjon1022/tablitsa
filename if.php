<?php
    // 1-masala
    $son = 0;

    if ($son == 0) {
        echo "Siz 0 kiritdingiz.";
    } elseif ($son < 0) {
        echo "Siz manfiy son kiritdingiz.";
    } else {
        echo "Siz musbat son kiritdingiz.";
    }

    echo "<br>";
    
    // 2-masala
    $n = 4;

    if ($n == 1) {
        echo "Dushanba";
    } elseif ($n == 2) {
        echo "Seshanba";
    } elseif ($n == 3) {
        echo "Chorshanba";
    } elseif ($n == 4) {
        echo "Payshanba";
    } elseif ($n == 5) {
        echo "Juma";
    } elseif ($n == 6) {
        echo "Shanba";
    } elseif ($n == 7) {
        echo "Yakshanba";
    } else {
        echo "Noto'g'ri son kiritdingiz";
    }

    echo "<br>";

    $n = 4; // Sonni o'zgartiring

switch ($n) {
    case 1:
        echo "Dushanba";
        break;
    case 2:
        echo "Seshanba";
        break;
    case 3:
        echo "Chorshanba";
        break;
    case 4:
        echo "Payshanba";
        break;
    case 5:
        echo "Juma";
        break;
    case 6:
        echo "Shanba";
        break;
    case 7:
        echo "Yakshanba";
        break;
    default:
        echo "Noto'g'ri son kiritdingiz";
        break;
    }

    echo "<br>";

    // 3-masala
    $soz = "sardoroga";

    if (strlen($soz) >= 3) {
        $oxirgi_harflar = substr($soz, -3); 
        $katta_harf_oxirgi = strtoupper($oxirgi_harflar);
        $natija = substr_replace($soz, $katta_harf_oxirgi, -3); 
    } else {
        echo strtoupper($soz); 
    }

    echo "<br>";

    // 4-masala
    $soz = "Olamda"; 

    
    if (mb_substr($soz, 0, 1) == "O" && mb_substr($soz, -1) == "A") {
        echo "OleOleGoGo";
    } elseif (mb_substr($soz, 0, 1) == "O") {
        echo "OleOle";
    } elseif (mb_substr($soz, -1) == "A") {
        echo "GoGo";
    } else {
        echo $soz;
    }

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


    // 5-masala
    $sonlar = array(5, -3, 0, -8);

    $musbat_sonlar = 0;
    $manfiy_sonlar = 0;

    foreach ($sonlar as $son) {
        if ($son > 0) {
            $musbat_sonlar++;
        } elseif ($son < 0) {
            $manfiy_sonlar++;
        }
    }

    echo "Musbat sonlar: $musbat_sonlar ta\n";
    echo "<br>";
    echo "Manfiy sonlar: $manfiy_sonlar ta\n";

    echo "<br>";

    // 6-masala
    $haridlar_summa = 300000;
    $chegirma = 0;

    if ($haridlar_summa > 500000) {
        $chegirma = 0.20;
    } elseif ($haridlar_summa > 300000) {
        $chegirma = 0.10;
    }

    $chegirma_summa = $haridlar_summa * $chegirma;
    $tolov_summa = $haridlar_summa - $chegirma_summa;

    echo "Eshmat sotib olgan haridlari uchun umumiy summa: $haridlar_summa so'm\n";
    echo "<br>";
    echo "Joriy chegirma: " . ($chegirma * 100) . "%\n";
    echo "<br>";
    echo "Chegirma summasi: $chegirma_summa so'm\n";
    echo "<br>";
    echo "To'lov summasi: $to'lov_summa so'm\n";

    echo "<br>";


    // 7-masala

    $puli = 20000; // Eshmatning puli (so'mda)
    $osh_narxi = 17500; // Osh narxi (so'mda)
    $non_narxi = 1500; // Non narxi (so'mda)
    $salat_narxi = 4000; // Salat narxi (so'mda)

    $sotib_oladigan_narsalar = array();

    if ($puli >= $osh_narxi) {
        $sotib_oladigan_narsalar[] = "Osh";
    }

    if ($puli >= $non_narxi) {
        $sotib_oladigan_narsalar[] = "Non";
    }

    if ($puli >= $salat_narxi) {
        $sotib_oladigan_narsalar[] = "Salat";
    }

    if (count($sotib_oladigan_narsalar) > 0) {
        echo "Eshmat sotib olishi mumkin bo'lgan narsalar: " . implode(", ", $sotib_oladigan_narsalar);
    } else {
        echo "Eshmatning puli hech qanday narsani sotib olishga yetmaydi.";
    }

    echo "<br>";

    // 8-masala

    $matematika_ball = 3.1;
    $fizika_ball = 2.1; 
    $ona_tili_ball = 1.1; 

    $grant_min_ball = 160.4;
    $kontrakt_min_ball = 100; 
    $superkontrakt_min_ball = 56; 

    $matematika_togri = 3; 
    $fizika_togri = 2; 
    $ona_tili_togri = 1; 

    $total_ball = ($matematika_ball * $matematika_togri) + ($fizika_ball * $fizika_togri) + ($ona_tili_ball *   $ona_tili_togri);

    if ($total_ball >= $grant_min_ball) {
        echo "Eshmat grantga kirdi!";
    } elseif ($total_ball >= $kontrakt_min_ball) {
        echo "Eshmat kontraktga kirdi!";
    } elseif ($total_ball >= $superkontrakt_min_ball) {
        echo "Eshmat superkontraktga kirdi!";
    } else {
        echo "Eshmat umuman qabul qilinmadi.";
    }

    echo "<br>";

    // 9-masala

    function almashtir($soz) {
        if (mb_strlen($soz) > 2) {
            $oxirgiIkkiHarf = mb_substr($soz, -2);
            $boshTugma = mb_substr($soz, 0, mb_strlen($soz) - 2);
            $almashtirilganSoz = $boshTugma . $oxirgiIkkiHarf[1] . $oxirgiIkkiHarf[0];
            return $almashtirilganSoz;
        } else {
            return $soz;
        }
    }
    
    $sozlar = ["Python", "JS", "A"];
    foreach ($sozlar as $soz) {
        $natija = almashtir($soz);
        echo "$soz => $natija\n";
    };

    echo "<br>";

    // 10-masala

    function baytlarniKorsat($bayt) {
        if ($bayt < 1024) {
            return $bayt . " B";
        } elseif ($bayt < 1048576) {
            $mb = round($bayt / 1024, 2);
            return $mb . " KB";
        } elseif ($bayt < 1073741824) {
            $mb = round($bayt / 1048576, 2);
            return $mb . " MB";
        } else {
            $gb = round($bayt / 1073741824, 2);
            return $gb . " GB";
        }
    }
    
    $baytlar = [156, 1056, 10560, 1056000];
    foreach ($baytlar as $bayt) {
        $natija = baytlarniKorsat($bayt);
        echo "$bayt B => $natija\n";
    }

    echo "<br>";

    // 11-masala

    function isIP($qiymat) {
        if (filter_var($qiymat, FILTER_VALIDATE_IP) !== false) {
            return "IP";
        } else {
            return "IP emas";
        }
    }
    
    $qiymatlar = ["123.312.12.222", "123.212.12.222"];
    foreach ($qiymatlar as $qiymat) {
        $natija = isIP($qiymat);
        echo "$qiymat => $natija\n";
    }


?>