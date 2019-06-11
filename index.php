<?php require_once("functions.php")?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Šrouby od Matky</title>
</head>
<body>
<h1>Šrouby od Matky</h1>
    <form action="output.php" method="post">
    Jméno: <input type="text" name="name"><br>
    Příjmení: <input type="text" name="surname"> <br>
    Pohlaví: Muž<input type="radio" value="male" name="gender" id="male">
             Žena<input type="radio" value="female" name="gender" id="female"> <br>
    Věk: <input type="number" name="age" min="0"> <br>
    Povolání: <select name="role">
                <option value="digger">Kopáč</option>
                <option value="IT">IT Specialista(ka)</option>
                <option value="cleaner">Uklízečka</option>
                </select> <br>
    <input type="submit" value="Odeslat">
  
    </form>
    
</body>
</html> 