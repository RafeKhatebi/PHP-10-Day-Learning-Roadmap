<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .calculator {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 300px;
        }

        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            cursor: pointer;
            border-radius: 10px;
            font-weight: bold;
        }

        .result {
            margin-top: 15px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>PHP Calculator</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <input type="number" name="num2" placeholder="Enter second number" required>

        <select name="operation" required>
            <option value="">--Select Operation--</option>
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (−)</option>
            <option value="multiply">Multiply (×)</option>
            <option value="divide">Divide (÷)</option>
            <option value="mod">Mod(%)</option>
            <option value="expo">Expo(**)</option>
        </select>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
        if (isset($_POST['calculate'])) {
            $num1      = $_POST['num1'];
            $num2      = $_POST['num2'];
            $operation = $_POST['operation'];
            $result    = "";

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 == 0) {
                        $result = "Error: Division by zero!";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                case "mod":
                    $result = $num1 % $num2;
                    break;
                case "expo":
                    $result = $num1 ** $num1;
                    break;
                default:
                    $result = "Invalid operation selected.";
            }

            echo "<div class='result'>Result: $result</div>";
        }
    ?>
</div>

</body>
</html>