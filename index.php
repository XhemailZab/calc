<?php
declare (strict_types = 1);
include 'includes/autoloader.inc.php';
include 'includes/header.inc.php';
?>



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
include 'includes/footer.inc.php';
?>


