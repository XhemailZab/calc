<?php
declare (strict_types = 1);
include 'includes/autoloader.inc.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title></title>
</head>
<body>

<form action = "includes/calc.inc.php" method = "post" class="form">
<div class="form__row">
    <h1>Your amazing Calculator</h1>
<input type="number" name = "num1" placeholder = "First number">
    <select name = "op">
        <option value = "add"> + </option>
        <option value = "sub"> - </option>
        <option value = "mul"> x </option>
        <option value = "div"> : </option>
    </select>
    <input type = "number" name = "num2" placeholder = "Second Number">
    <button type = "submit" name = "submit"> Calculate </button>
</div>
    
</form>


<?php
?>

</body>
</html>