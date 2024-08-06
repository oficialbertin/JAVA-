<!DOCTYPE html>

<html>
<head>
    <title>Basic Calculator</title>
</head>
<body>
    <h2>Basic Calculator</h2>
    <form method="post">
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
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = null;
        
        if ($operation == "subtract") {
            $result = $num1 - $num2;
        } elseif ($operation == "addition") {
                $result = $num1 + $num2;
        } elseif ($operation == "multiply") {
            $result = $num1 * $num2;
        } elseif ($operation == "power") {
            $result = $num1 ** $num2;
        } elseif ($operation == "modulus") {
            $result = $num1 % $num2;
        } elseif ($operation == "divide") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero is not allowed.";
            }
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>




