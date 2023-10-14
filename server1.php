<?php

    // 1-masala
    $A = 15;

    if ($A % 2 == 0) {
    echo "A toq son";
    } else {
    echo "A toq son emas";
    }
        
        echo "<br>";
        echo "<br>";
    $A = 14;

    if ($A % 2 == 0) {
    echo "A toq son";
    } else {
    echo "A toq son emas";
    }

    echo "<br>";
    echo "<br>";

    // 2-masala
    $a = 13; 
    $b = 14;
    function compareNumbers($a, $b) {
        if ($a > $b) {
            echo "$a son $b sondan katta";
        } else {
            echo "$a son $b sondan katta emas";
        }
    }
    
    compareNumbers(13, 14); // A son B sondan katta emas
    echo "<br>";
    echo "<br>";
    compareNumbers(23, 14); // A son B sondan katta
    
    echo "<br>";
    echo "<br>";

    // 3-masala

   
    $a = 43; 
    $b = 55;
    $a1 = 53;
    $b1 = 55;

    function Numbers($a, $b) {
        if ($a + $b) {
            echo "A va B sonlarining yig`indisi 100 dan katta emas";
        } else {
            echo "A va B sonlarining yig`indisi 100 dan katta ";
        }
    };

    echo "<br>";

    function Numbers1($a1, $b1) {
        if ($a + $b) {
            echo "A va B sonlarining yig`indisi 100 dan katta emas";
        } else {
            echo "A va B sonlarining yig`indisi 100 dan katta ";
        }
    }
        
        Numbers(43, 55); // A son B sondan katta emas
        echo "<br>";
        echo "<br>";
        Numbers1(53, 55); // A son B sondan katta
        
        echo "<br>";
        echo "<br>";


        // 4-masala
        $a = 4; 
        $b = 3;
        $c = 6;
        $a1 = 2; 
        $b1 = 13;
        $c1 = 6;

        function Number($a, $b, $c) {
            if ($a + $b) {
                echo "C soni A va B sonlari orasida yotmaydi";
            } else {
                echo "C soni A va B sonlari orasida yotadi ";
            }
        }

        echo "<br>";

        function Number1($a1, $b1, $c1) {
            if ($a + $b) {
                echo "C soni A va B sonlari orasida yotmaydi";
            } else {
                echo "C soni A va B sonlari orasida yotadi ";
            }
        }
            
            Number(4, 3, 6); // A son B sondan katta emas
            echo "<br>";
            echo "<br>";
            Number1(2, 13, 6); // A son B sondan katta
            
            echo "<br>";
            echo "<br>";


        // 5-masasla

        if (($A % 2 == 1 && $B % 2 == 0) || ($A % 2 == 0 && $B % 2 == 1)) {
            echo "Jumla rostlikka to'g'ri keladi";
        } else {
            echo "Jumla rostlikka to'g'ri kelmaydi";
        }
        echo "<br>";
        echo "<br>";

        // 6-masala

        $n = 4;
        $n1 = 17;
        if($n >= 10 && $n < 100 && $n % 2 == 0) {
        echo "Berilgan son ikki xonali juft son";
        } else {
        echo "Berilgan son ikki xonali juft son emas";
        }
        echo "<br>";

        if($n1 >= 10 && $n1 < 100 && $n1 % 2 == 0) {
            echo "Berilgan son ikki xonali juft son";
            } else {
            echo "Berilgan son ikki xonali juft son emas";
            }
               
        
        echo "<br>";
        echo "<br>";
            
        
        // 7-masala

            $x_oqi = 1; // doskaning X koordinatasi
            $y_oqi = 1; // doskaning Y koordinatasi

            if (($x_oqi + $y_oqi) % 2 == 1) {
                echo "Berilgan ($x_oqi, $y_oqi) maydon OQ rangda";
                } else {
                echo "Berilgan ($x_oqi, $y_oqi) maydon QORA rangda";
                }
        echo "<br>";
        echo "<br>";

        // 8-masala

        $x1_oqi = 1; // doskaning X koordinatasi
        $y1_oqi = 1; // doskaning Y koordinatasi
        $x2_oqi = 1; // doskaning X koordinatasi
        $y2_oqi = 1; // doskaning Y koordinatasi

        if (($x1_oqi + $y1_oqi) % 2 == 1) {
            echo "Shoh bir yurishda bir maydondan ikkinchisiga o’ta oladi";
            } else {
            echo "Shoh bir yurishda bir maydondan ikkinchisiga o’ta olmaydi";
            }
        echo "<br>";
        if (($x2_oqi + $y2_oqi) % 2 == 0) {
            echo "Shoh bir yurishda bir maydondan ikkinchisiga o’ta oladi";
            } else {
            echo "Shoh bir yurishda bir maydondan ikkinchisiga o’ta olmaydi";
            }
        echo "<br>";
        echo "<br>";

        // 9-masala

        $x3_oqi = 1; // doskaning X koordinatasi
        $y3_oqi = 1; // doskaning Y koordinatasi
        $x4_oqi = 1; // doskaning X koordinatasi
        $y4_oqi = 1; // doskaning Y koordinatasi

        if (($x3_oqi + $y3_oqi) % 2 == 1) {
            echo "Ot bir yurishda bir maydondan ikkinchisiga o’ta oladi";
            } else {
            echo "Ot bir yurishda bir maydondan ikkinchisiga o’ta olmaydi";
            }
        echo "<br>";
        if (($x4_oqi + $y4_oqi) % 2 == 0) {
            echo "Ot bir yurishda bir maydondan ikkinchisiga o’ta oladi";
            } else {
            echo "Ot bir yurishda bir maydondan ikkinchisiga o’ta olmaydi";
            }
        echo "<br>";

        // 10-masala

        $N = 60; // qanday daqiqada rangni topasiz

        $qoldiq = $N % 8; // qoldiqni hisoblash

        if ($qoldiq) {
            echo "Svetofor yashil rangda";
        } elseif ($qoldiq == 1) {
            echo "Svetofor qizil rangda";
        } elseif ($qoldiq == 2) {
            echo "Svetofor sariq rangda";
        } 

        echo "<br>";
        echo "<br>";

        $num = 10/* biror butun son */;
        if($num % 2 == 0) {
            echo "juft";
        } else {
            echo "toq";
        }
        echo $num;
        echo "<br>";
        echo "<br>";

        $num = 0.70;
        echo (ceil($num));

?>