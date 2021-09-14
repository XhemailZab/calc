<?php
declare(strict_types = 1);
include 'autoloader.inc.php';
include 'header.inc.php';

$op = $_POST["op"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

$calc = new Calc($op,(int)$num1,(int)$num2);

try
{
    echo $calc->calculator();
}
catch(TypeError $e)
{
    {
        echo "Error!: " . $e->getMessage();
    }
}
?>
<button onclick="goBack()">Go Back</button>
<?php
include 'footer.inc.php';
?>