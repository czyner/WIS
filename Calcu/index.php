<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="action.php" method="post">
            <label for="n1">First Number</label>
            <input name="n1" id="n1" type="number">

            <label for="n2">Second Number:</label>
            <input name="n2" id="n2" type="number">
            <p name="result" id="result"></p>

            <button type="add">Addition</button>
            <button type="subtract">Subtraction</button>
            <button type="multiply">Multiplication</button>
            <button type="divide">Division</button>
        </form>
    </body>
</html>