<!DOCTYPE html>

<html>
<head>
    <title>Basic Calculator</title>
</head>
<body>
<h2>Basic Calculator</h2>
    <form method="POST">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <label for="operation">Operation:</label>
        <select id="operation" name="operation" required>
            <option value="addition">Addition</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
            <option value="power">Power</option>
            <option value="modulus">Modulus</option>
        </select><br><br>
        
        <input type="submit" value="Calculate" name="Calculate">
    </form>

<?php 


if (isset($_POST['Calculate'])) {
	$a=$_POST['num1'];
	$b=$_POST['num2'];
    $operation=$_POST['operation'];
    $result = null;

	switch ($operation) {
		case 'Addition':
            $result=$a+$b;
            echo "<h3>Result: $result</h3>";

			// code...
			break;
        case 'Substract':
            $result=$a-$b;
            echo "<h3>Result: $result</h3>";
            echo "how are you";
            break;
        case 'Multiply':
            $result=$a*$b;
            echo "<h3>Result: $result</h3>";
            break;
        case 'Divide':
            $result=$a/$b;
            echo "<h3>Result: $result</h3>";
            break;
        case 'Power':
            $result=$a**$b;
            echo "<h3>Result: $result</h3>";
            break;
        case 'Modulas':
            $result=$a%$b;
            echo "<h3>Result: $result</h3>";
            break;
    
		
		default:
			// code...
			break;
	}
    

}

?>

</body>
</html>