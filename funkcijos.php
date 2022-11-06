
<?php

echo"<h2> -------- Funkcijos ------------ </h2>";
echo"<p> -------- 1 ir 2 uzduotis ------------ </p>";
    function writeMsg($fname, $ftag) {
        echo ("<h" . $ftag . ">" . $fname . "</h" . $ftag . ">");
    }
        
    writeMsg("Programavimas", "1");




echo"<p> -------- 3 uzduotis ------------ </p>";
    $rndStr = md5(time()); 
        echo $rndStr; 
        echo "<br>";  
    $numbers = preg_replace('/[^0-9]/', '', $rndStr);
    $letters = preg_replace('/[^a-zA-Z]/', '', $rndStr);
        echo ("<br>"); 
        print_r($letters);
        print_r("<h1>" .  $numbers . "</h1>");




echo"<p> -------- 4 uzduotis ------------ </p>";
    $number = 20;
        function numSum($number1){
            $sum = 0;
            for ($i=2; $i < $number1; $i++) { 
                if ($number1 % $i == 0) {
                    $sum++;
                }        
            }
            return $sum;
        }
    echo("Skaicius " . $number . " dalijasi (isskirus 1 ir pati save) :  " . numSum($number));




echo"<p> -------- 5 uzduotis ------------ </p>";
// Po nulio 10 eina
    $arr = [];
        for ($x=0; $x < 100; $x++) { 
            $arr[] = rand(33,77);
        }
    print_r($arr);
    echo("<br>");
    echo("<br>");
    
    $somearr = [];
        for ($a = 0; $a < count($arr); $a++) {
            $somearr [] = numSum($arr[$a]) . " - " . $arr[$a]; 
            // echo(numSum($arr[$a]) . "   ");  
        }
    rsort($somearr);
    echo("Masyvas išrūšiuotas pagal daliklių be liekanos kiekį mažėjimo tvarka: <br> ");
    print_r($somearr);  



echo"<p> -------- 6 uzduotis ------------ </p>";
    $newArr = [];
        for ($b = 0; $b < 100; $b++) {
            $newArr [] = rand(1,10);
        }
    print_r($newArr);
    echo("<br>");
    echo("<br>");
    $arrayGone = [];
    for ($i=0; $i < count($newArr); $i++) { 
        // echo($newArr[$i] . "   ");
        if (numSum($newArr[$i]) > 0) {
            $arrayGone [] = $newArr[$i];
        }
    }
    echo("Masyvas be pirminiu skaiciu: <br> ");
    print_r($arrayGone);






?>