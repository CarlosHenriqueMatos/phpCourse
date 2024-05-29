<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width,
        initial-scale=1.0">
        <title>PHP Test</title>
    </head>
    <body>
        
        <p> This is a <?php echo "awesome"; ?> paragraph! </p>
        <?php echo '<p>Hello World</p>';
        
        echo '<p> _GET </p>';
        echo $_GET["name"];
        echo "<br>";
        echo $_GET["eyecolor"];

        echo "<br>";

        echo "This is text XXXX";
        
        if(true){
            echo "<p> Some HTML text.</p>";
        }

        $fullName = "Carlos Matos\n";
        echo $fullName;
        // Scalar types (contains one value)
        $string = "Henrique";
        $bool = true;

        // Array type
        $names = ["Carlos", "XPTO", "Frida"];

        // Onject Type
        echo "<br>";
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['REQUEST_METHOD'];
        echo "<br>";
        echo $_REQUEST["name"];
        echo "<br>";
        
        ?>
    </body>

</html>