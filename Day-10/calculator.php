<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
    <!--  Meta tags for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="calculator">
    <h2>PHP Calculator</h2>
    <!--  Form for user input -->
    <p>Enter two numbers and select an operator:</p>
    <form method="post">
        <input type="number" name="num1" step="any" required placeholder="First number">
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">&times;</option>
            <option value="/">&#247;</option>
        </select>
        <input type="number" name="num2" step="any" required placeholder="Second number">
        <input type="submit" name="calculate" value="Calculate">
    </form>
    <?php
        if (isset($_POST['calculate'])) {
            $num1     = $_POST['num1'];
            $num2     = $_POST['num2'];
            $operator = $_POST['operator'];
            $result   = '';

            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 == 0) {
                        $result = "Cannot divide by zero!";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $result = "Invalid operator!";
            }
            echo "<div class='result'>Result: $result</div>";
        }
    ?>
</div>
</body>
</html>
