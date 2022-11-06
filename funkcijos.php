
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




?>