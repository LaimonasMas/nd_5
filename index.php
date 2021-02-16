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
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < count($array3[$i]); $j++) {
        asort($array3[$i]);
    }
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
}
echo '<pre>';
print_r($array5);
echo '</pre>';
?>

<h2>ND nr.6</h2>

<?php