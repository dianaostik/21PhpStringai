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
    ?>

        <?php include "./masyvai.php"; ?>
</body>
</html>