<!DOCTYPE html>
<html>
<head>
	<title>"PHP CONSTANTS"</title>
</head>
<body>
	<?php

    //constant()example
    print("Constant Example<br>");
	define("MINSIZE", 50);
    echo MINSIZE;
    echo constant("MINSIZE"); //same thing as previous line

    //Valid constant names
    print("<br>Valid Constants<br>");
    define("ONE", "first thing <br>");
    define("SECOND", "second thing <br>");
    define("THREE_3", "third thing <br>");
    echo ONE, SECOND, THREE_3;
    //Invalid constantnames
    print("<br>Invalid Constants<br>");
    define("2TWO", "second thing <br>");
    define("_THREE_", "third value <br>");

    echo constant("2TWO");
    echo _THREE_;
    
	?>
</body>
</html>