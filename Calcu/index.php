<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <title>Calculator</title>
    </head>
    <body>
    <?php
    print("Simple Calculator <br>");
    ?>
    <form action="action.php" method="post">
            <label for="n1">First Number:</label>
            <input name="n1" id="n1" type="number" />
            <br>
            <label for="second number">Second Number:</label>
            <input name="n2" id="n2" type="number" />
            <br>
            <input type="submit" name="Operand" value="Add" />
            <input type="submit" name="Operand" value="Subtract" />
            <input type="submit" name="Operand" value="Multiply" />
            <input type="submit" name="Operand" value="Divide" />
        </form>
    </body>
</html>


