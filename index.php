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
    



    ?>
</body>
</html>