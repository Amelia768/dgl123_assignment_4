<!DOCTYPE html>
<html lang="en">
<!-- 
    DGL123
    Week 4 Assignment
    Amelia Manky
    09/28/21
    calculator.php
-->
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
    <h1>Addition Only Calculator</h1>

<!-- Create a form that can accept two numbers -->
    <form action='' method="post">
        <label for="first">First Number</label>
        <input type="number" name="first" id="first" required><br>

        <label for="second">Second Number</label>
        <input type="number" name="second" id="second" required><br>

        <button type="submit">Calculate Sum</button>
    </form>
    <?php 
    if(isset($_POST['first'], $_POST['second'])) {
        $first = $_POST['first'];
        $second = $_POST['second'];
    }

    // Calculate the sum of the two numbers
    $sum = $first + $second;

    print "<h3>Result:</h3>
    <p>$first + $second = $sum</p>";
    ?>
</body>
</html>