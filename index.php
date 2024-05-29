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

        echo "This is text XXXX";
        
        if(true){
            echo "<p> Some HTML text.</p>";
        }

        $fullName = "Carlos Matos";
        echo $fullName;
        // Scalar types (contains one value)
        $string = "Henrique";
        $bool = true;

        // Array type
        $names = ["Carlos", "XPTO", "Frida"];

        // Onject Type
        $object = new Car();
        ?>

        <p> Hi! My name X <?php echo $name; ?>, and I'm learning PHP!</p>

    </body>
</html>