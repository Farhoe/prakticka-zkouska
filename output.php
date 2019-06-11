<?php require_once("functions.php");
    $work=new Work();

    $name=filter_input(INPUT_POST, "name");
    $surname=filter_input(INPUT_POST, "surname");
    $gender=filter_input(INPUT_POST, "gender");
    $age=filter_input(INPUT_POST, "age");
    $role=filter_input(INPUT_POST, "role");
    $response="nula";

    $results=$work->isWorkable($age, $role, $gender);

    var_dump($age);
    var_dump($role);
    var_dump($gender);
    if ($role=="digger") {
        $roleoutput="kopáč";
    }
    elseif ($role=="IT") {
        $roleoutput="IT Specialista(ka)";
    }
    elseif ($role=="cleaner") {
        $roleoutput="uklízečka";
    }

    if (!$results || (empty($age) || empty($role) || empty($gender))) {
        $response="To nestačí";
    }
    elseif ($results) { 
        if (empty($name) && empty($surname)) {
            $response=sprintf("Pro %s je povolání %s vhodné.", $name, $roleoutput);
        }
        elseif (empty($firstname)) {
            $response=sprintf("Pro %s je povolání %s vhodné.", $name, $roleoutput);
        }
        elseif (empty($surname)) {
            $response=sprintf("Pro %s není povplání %s vhodné.", $surname, $roleoutput);
        }
        elseif ($results) {
            if(empty($name) && empty($surname)) {
                $response=sprintf("Pro %s %s je povolání %s vhodné.", $roleoutput);
            }
            elseif (empty($name)) {
                $response=sprintf("Pro %s je povolání %s vhodné.", $name, $roleoutput);
            }
            elseif (empty($surname)) {
                $response=sprintf("Pro %s je povolání %s vhodné.", $surname, $roleoutput);
            } 
            $response=sprintf("Pro %s %s je povolání %s vhodné.", $name, $surname, $roleoutput);
        }
        var_dump($results);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Šrouby od Matky</title>
</head>
<body> 
    <p> <?php echo $response; ?> </p>
</body>
</html>