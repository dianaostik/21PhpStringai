
<?php

echo"<h2> -------- Masyvai ------------ </h2>";
echo"<p> -------- 1 uzduotis ------------ </p>";

    $arr = [];
        for ($i=0; $i < 30; $i++) { 
            $arr[] = rand(5,25);
        }
        print_r($arr);


echo"<p> -------- 2 uzduotis ------------ </p>";
echo"<p> a) ------------ </p>";
    $more_than10 = 0;
        for ($a=0; $a < count($arr); $a++) { 
            if ($arr[$a] > 10) {
                $more_than10++;
            }
        }
        echo ("Didesniu, negu 10   = " . $more_than10);


echo"<p> b) ------------ </p>";
    echo("Didziausia masyvo reiksme = " . max($arr));


echo"<p> c) ------------ </p>";
    print_r("Reiksmiu suma yra = " . array_sum($arr));


echo"<p> d) ------------ </p>";
    $arr_index = [];
        for ($b=0; $b < count($arr); $b++) { 
            $arr_index[] = $arr[$b] - $b;
        }
    print_r($arr_index);


echo"<p> e) ------------ </p>";
    $new_arr = [];
        for ($d=0; $d < 10; $d++) { 
            $new_arr[] = rand(5,25);
        }
    print_r(array_merge($arr, $new_arr));


echo"<p> f) ------------ </p>";
    $tmp[0] = "";
    $tmp[1] = "";
        for($p = 0; $p < count($arr);$p++)
        {
            if($arr[$p] % 2){
            $tmp[1] .= $arr[$p] . " ";
            }
            else{
            $tmp[0] .= $arr[$p] . " ";
            }
        }
    print_r("Lyginiai:   " . $tmp[0] . "<br> Nelyginiai: " . $tmp[1]);


echo"<p> g) ------------ </p>";
        for ($c=0; $c < count($arr); $c++) { 
            if (($c % 2 == 0) && ($arr[$c] > 15)) {
                $arr[$c] = 0;
            }
        }
        print_r($arr);


echo"<p> h) ------------ </p>";
        for ($y=0; $y < count($arr); $y++) { 
            if ($arr[$y] > 10) {
                echo ("Pirmas indeksas su reiksme didesne, nei 10 =     " . $y);
                break;
            }
        }


echo"<p> i) ------------ </p>";
    for ($j=0; $j < count($arr); $j += 2) { 
        unset($arr[$j]);
    }
    echo("Masyvas be poriniu indeksu: <br>");
    print_r($arr);
?>