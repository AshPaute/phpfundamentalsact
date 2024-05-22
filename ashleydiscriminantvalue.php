<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Discriminant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Discriminant Value</h1>
        <form method="post" action="">
            <label for="a">Value of a:</label>
            <input type="number" id="a" name="a" required>
            <label for="b">Value of b:</label>
            <input type="number" id="b" name="b" required>
            <label for="c">Value of c:</label>
            <input type="number" id="c" name="c" required>
            <input type="submit" value="Enter">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $a = isset($_POST['a']) ? $_POST['a'] : 0;
            $b = isset($_POST['b']) ? $_POST['b'] : 0;
            $c = isset($_POST['c']) ? $_POST['c'] : 0;

            $discriminant = $b * $b - 4 * $a * $c;

            echo "<h2>Result</h2>";
            echo "<p>The discriminant (b<sup>2</sup> - 4ac) is: " . $discriminant . "</p>";
        }
        ?>
    </div>
</body>
</html>

