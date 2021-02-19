<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <h2>ND nr.1</h2>

    <?php

    echo 'Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.';
    $array = [];
    for ($i = 0; $i < 10; $i++) {
        $element = [];
        for ($j = 0; $j < 5; $j++) {
            array_push($element, rand(5, 25));
        }
        array_push($array, $element);
    }

    echo '<pre>';
    print_r($array);
    echo '</pre>';
    ?>

    <h2>ND nr.2</h2>

    <?php

    echo 'a) naudodamiesi 1 uždavinio masyvu suskaičiuokite kiek masyve yra elementų didesnių už 10.';
    echo '<br><br>';
    $count = 0;
    $array2B = [];
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($array[$i][$j] > 10) {
                $count++;
            }
            array_push($array2B, $array[$i][$j]);
        }
    }
    echo $count;
    echo '<br><br>';

    echo 'b) naudodamiesi 1 uždavinio masyvu raskite didžiausio elemento reikšmę.';
    echo '<br><br>';
    // echo '<pre>';
    rsort($array2B);
    print_r($array2B[0]);
    // echo '</pre>';
    echo '<br><br>';

    echo 'c) naudodamiesi 1 uždavinio masyvu suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.).';
    echo '<br><br>';
    $sum2C0 = 0;
    $sum2C1 = 0;
    $sum2C2 = 0;
    $sum2C3 = 0;
    $sum2C4 = 0;
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 5; $j++) {
            ($j === 0) ? $sum2C0 += $array[$i][$j] : '';
            ($j === 1) ? $sum2C1 += $array[$i][$j] : '';
            ($j === 2) ? $sum2C2 += $array[$i][$j] : '';
            ($j === 3) ? $sum2C3 += $array[$i][$j] : '';
            ($j === 4) ? $sum2C4 += $array[$i][$j] : '';
        }
    }
    echo $sum2C0 . ' ' . $sum2C1 . ' ' . $sum2C2 . ' ' . $sum2C3 . ' ' . $sum2C4;
    echo '<br><br>';

    echo 'd) naudodamiesi 1 uždavinio masyvu visus masyvus “pailginkite” iki 7 elementų.';
    echo '<br><br>';

    $array2D = $array;
    for ($i = 0; $i < 10; $i++) {
        for ($j = 5; $j < 7; $j++) {
            $array2D[$i][$j] = rand(5, 25);
        }
    }
    echo '<pre>';
    print_r($array2D);
    echo '</pre>';
    echo '<br><br>';

    echo 'e) naudodamiesi 1 uždavinio masyvu ($array2D) suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai.';
    echo '<br><br>';
    $array2E = [];
    for ($i = 0; $i < 10; $i++) {
        ($i === 0) ? array_push($array2E, array_sum($array2D[$i])) : '';
        ($i === 1) ? array_push($array2E, array_sum($array2D[$i])) : '';
        ($i === 2) ? array_push($array2E, array_sum($array2D[$i])) : '';
        ($i === 3) ? array_push($array2E, array_sum($array2D[$i])) : '';
        ($i === 4) ? array_push($array2E, array_sum($array2D[$i])) : '';
        ($i === 5) ? array_push($array2E, array_sum($array2D[$i])) : '';
        ($i === 6) ? array_push($array2E, array_sum($array2D[$i])) : '';
        ($i === 7) ? array_push($array2E, array_sum($array2D[$i])) : '';
        ($i === 8) ? array_push($array2E, array_sum($array2D[$i])) : '';
        ($i === 9) ? array_push($array2E, array_sum($array2D[$i])) : '';
    }
    echo '<pre>';
    print_r($array2E);
    echo '</pre>';
    ?>

    <h2>ND nr.3</h2>

    <?php

    echo 'Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).';
    echo '<br><br>';
    $array3 = [];
    for ($i = 0; $i < 10; $i++) {
        $random = rand(2, 20);
        $element3 = [];
        for ($j = 0; $j < $random; $j++) {
            $value = chr(rand(65, 90));
            array_push($element3, $value);
        }
        array_push($array3, $element3);
    }
    // for ($i = 0; $i < 10; $i++) {
    //     for ($j = 0; $j < count($array3[$i]); $j++) {
    //         asort($array3[$i]);
    //     }
    // }
    foreach ($array3 as &$value) {
        sort($value);
    }
    echo '<pre>';
    print_r($array3);
    echo '</pre>';

    ?>

    <h2>ND nr.4</h2>

    <?php

    echo 'Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje.';
    echo '<br><br>';
    $array4 = $array3;
    echo '<pre>';
    sort($array4);
    print_r($array4);
    echo '</pre>';
    ?>

    <h2>ND nr.5</h2>

    <?php

    echo 'Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.';
    echo '<br><br>';

    $array5 = [];
    for ($i = 0; $i < 30; $i++) {
        $element5 = [];
        $randomId = rand(1, 1000000);
        $randPlace = rand(0, 100);
        $element5['user_id'] = $randomId;
        $element5['place_in_row'] = $randPlace;
        array_push($array5, $element5);
        // $array5[$i] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
    }
    echo '<pre>';
    print_r($array5);
    _d($array5);
    echo '</pre>';
    ?>

    <h2>ND nr.6</h2>

    <?php

    echo 'Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka.';
    echo '<br><br>';
    $array6Id = $array5;
    usort($array6Id, function ($a, $b) {
        return $a['user_id'] <=> $b['user_id'];
    });
    _d($array6Id);
    echo '<pre>';
    print_r($array6Id);
    echo '</pre>';
    echo 'Išrūšiuokite 5 uždavinio masyvą pagal place_in_row mažėjančia tvarka.';
    echo '<br><br>';
    $array6Place = $array5;
    usort($array6Place, function ($a, $b) {
        return $b['place_in_row'] <=> $a['place_in_row'];
    });
    _d($array6Place);
    echo '<pre>';
    print_r($array6Place);
    echo '</pre>';
    ?>

    <h2>ND nr.7</h2>

    <?php

    echo 'Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.';
    echo '<br><br>';
    $array7 = $array5;
    for ($i = 0; $i < 30; $i++) {
        $name = '';
        $strLenName = rand(5, 15);
        while (strlen($name) < $strLenName) {
            $name .= chr(rand(65, 90));
        }
        $surname = '';
        $strLenSurname = rand(5, 15);
        while (strlen($surname) < $strLenSurname) {
            $surname .= chr(rand(65, 90));
        }
        $array7[$i] += ['name' => $name, 'surname' => $surname];
    }
    echo '<pre>';
    print_r($array7);
    echo '</pre>';
    ?>

    <h2>ND nr.8</h2>

    <?php

    echo 'Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.';
    echo '<br><br>';
    $array8 = [];
    for ($i = 0; $i < 10; $i++) {
        $randomNumb = rand(0, 5);
        echo $randomNumb . ' ';
        if ($randomNumb === 0) {
            $array8[$i] = rand(0, 10);
        } else {
            $element8 = [];
            for ($j = 0; $j < $randomNumb; $j++) {
                $element8[$j] = rand(0, 10);
            }
            array_push($array8, $element8);
        }
    }
    echo '<pre>';
    print_r($array8);
    echo '</pre>';
    ?>

    <h2>ND nr.9</h2>

    <?php

    echo 'Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.';
    echo '<br><br>';
    $sum9A = 0;
    foreach ($array8 as $value) {
        if (is_array($value)) {
            $sum9A += array_sum($value);
        } else {
            $sum9A += $value;
        }
    }
    echo $sum9A;
    _d($array8);
    $array9 = $array8;
    usort($array9, function ($a, $b) {
        if (is_array($a)) {
            $a = array_sum($a);
        }
        if (is_array($b)) {
            $b = array_sum($b);
        }
        return $a <=> $b;
    });
    _d($array9);
    echo '<pre>';
    print_r($array9);
    echo '</pre>';

    ?>

    <h2>ND nr.10</h2>

    <?php

    echo 'Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvu atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.';
    echo '<br><br>';
    $array10 = [];
    $value10A = '#%+*@裡';
    for ($i = 0; $i < 10; $i++) {
        $element10 = [];
        for ($j = 0; $j < 10; $j++) {
            $value10 = $value10A[rand(0, mb_strlen($value10A))];
            $color10 = '#' . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
            $element10[$j] = ['value' => $value10, 'color' => $color10];
        }
        $array10[$i] = $element10;
    }
    echo '<pre>';
    print_r($array10);
    echo '</pre>';
    for ($i = 0; $i < count($array10); $i++) {
        for ($j = 0; $j < count($array10[$i]); $j++) {
            print_r('<div style="display: inline-block; width: 20px; color: ' . $array10[$i][$j]['color'] . '";>' . $array10[$i][$j]['value'] . '</div>');
        }
        echo '<br>';
    }
    echo '<br><br>';
    ?>

<h2>ND nr.11</h2>

<?php

echo 'Duotas kodas, generuojantis masyvą:';
echo '<br><br>';

do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';

// sprendimas
$vidurinis = ($a + $b) / 2;
$c[] = $vidurinis;
sort($c);
echo '<pre>';
print_r($c);
echo '</pre>';
$sumab = $a + $b;
$b = max($a, $b);
$a = $sumab - $b;
$key = array_search($vidurinis, $c);
$sk1 = $key;
$sk2 = count($c) - 1 - $key;
echo 'Atsakymas:';
echo '<br>';
echo '<h3>Skaičius '.$a.' yra pakartotas '.$sk1.' kartų, o skaičius '.$b.' - '.$sk2.' kartų.</h3>';
?>

</body>

</html>