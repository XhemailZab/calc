<?php
declare (strict_types = 1);
include 'includes/autoloader.inc.php';
include 'includes/header.inc.php';
?>



<h1>
    C      A    L     C    U   L  A TOR
</h1>

<form action = "includes/calc.inc.php" method = "post">
    <input type = "number" name = "num1" placeholder = "First number">
    <select name = "op">
        <option value = "add"> + </option>
        <option value = "sub"> - </option>
        <option value = "mul"> x </option>
        <option value = "div"> : </option>
    </select>
    <input type = "number" name = "num2" placeholder = "Second Number">
    <button type = "submit" name = "submit"> Calculate </button>
</form>


<?php
include 'includes/footer.inc.php';
?>


