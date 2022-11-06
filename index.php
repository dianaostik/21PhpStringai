<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo"<h2> -------- Stringai ------------ </h2>";

    echo"<p> -------- 1 uzduotis ------------ </p>";
        $actors_name = "Johnny";
        $actors_surname = "Depp";
            if (strlen($actors_name) > strlen($actors_surname)) {
                echo($actors_surname);
            } 
            else {
                echo($actors_name);
            }




    echo"<p> -------- 2 uzduotis ------------ </p>";
        echo strtoupper($actors_name);
        echo (" ");
        echo strtolower($actors_surname);




    echo"<p> -------- 3 uzduotis ------------ </p>";
        echo substr($actors_name,0,1) . substr($actors_surname,0,1);




    echo"<p> -------- 4 uzduotis ------------ </p>";  
        $rest = substr($actors_name, -3) . substr($actors_surname, -3);
            echo ($rest);
            echo ("<br>");
            echo (substr($actors_name, -3) . substr($actors_surname, -3));




    echo"<p> -------- 5 uzduotis ------------ </p>"; 
        $str = 'An American in Paris';
        $new_str = str_replace(['A','a'], ['*','*'], $str);
        echo $new_str; 




    echo"<p> -------- 6 uzduotis ------------ </p>"; 
        echo("Is viso A ir a raidziu sakinyje: $str   =  <br>");
        echo (substr_count($str,"A") + substr_count($str,"a"));




    echo"<p> -------- 7 uzduotis ------------ </p>"; 

        $str1 = "Breakfast at Tiffany's";
        $str2 = "2001: A Space Odyssey";
        $str3 = "It's a Wonderful Life";
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $onlyconsonants = str_replace($vowels, "", $str);
            echo($onlyconsonants);
            echo("<br>");
        $onlyconsonants1 = str_replace($vowels, "", $str1);
            echo($onlyconsonants1);
            echo("<br>");
        $onlyconsonants2 = str_replace($vowels, "", $str2);
            echo($onlyconsonants2);
            echo("<br>");
        $onlyconsonants3 = str_replace($vowels, "", $str3);
            echo($onlyconsonants3);
    ?>

        <?php include "./masyvai.php"; ?>
        <?php include "./funkcijos.php"; ?>
</body>
</html>