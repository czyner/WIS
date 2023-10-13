<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <title>Calculator</title>
    </head>
    <body>
        <?php
        print("Simple Calculator <br>");
        $n1 = $_POST['n1']; $n2 = $_POST['n2'];
        $operand = $_POST['Operand'];
        $result = ''; $resultname = '';
        if (is_numeric($n1) && is_numeric($n2)) {
            if($operand == "Add"){
                $result = $n1 + $n2;
                $resultname = 'Sum';
            } elseif($operand == "Subtract"){
                $result = $n1 - $n2;
                $resultname = 'Difference';
            } elseif($operand == "Multiply"){
                $result = $n1 * $n2;
                $resultname = 'Product';
            } elseif($operand == "Divide"){
                $result = $n1 / $n2;
                $resultname = 'Quotient';
            }
        }?>
        The <?php echo ($resultname);?>
        of <?php echo ($n1);?>
        and <?php echo ($n2);?>
        is equal to <?php echo ($result);?>
        <form action="index.php" method="post">
            <br>
            <button type="submit">Back</button>
        </form>
    </body>
</html>
