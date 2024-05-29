<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "css/reset.css">
        <link rel = "stylesheet" href = "css/main.css">
        <title>Document</title>
    </head>
    <body>
        <main>
            <form action = "<?php echo $_SERVER["PHP_SELF"]; ?>" method = "post">
                <label for = "firstname">Firstname?</label>
                <input required id = "firstname" type="text" name = "firstname" placeholder = "Firstname ...">

                <label for = "lastname">Lastname?</label>
                <input id = "lastname" type = "text" name = "lastname" placeholder = "Lastname...">

                <label for = "favouritepet"> Favourite Pet?</label>
                <select id = "favouritepet" name = "favouritepet">
                    <option value = "none">None</option>
                    <optino value = "dog">Dog</option>
                    <option value = "Cat">Cat</option>
                    <option value = "Bird">Bird</option>
                </select>
                <button type = "submit">Submit</button>
            </form>
        </main>
        <?php
        $a = "Hello";
        $b = "World!";
        $c = $a . " " . $b;
        echo $c;
        echo "<br>";
        echo ((1 + 3) % 4);
        echo "<br>";
        $a = 2;
        $b = 2;
        if ($a === $b){
            echo "This statement is true";
            echo "<br>";
        }
        echo ++$a;
        echo "<br>";

        $bool = true;
        $a = 1;
        $b = 4;
        switch ($a){
            case 1:
                echo "The first case is correct!";
                break;
            case 2:
                echo "The second case is correct!";
                break;
            case 3:
                echo "The third case is correct!";
                break;
            default:
                echo "None of the conditions were true!";
        }
        echo "<br>";
        if($a < $b){
            echo "First condition is true";
            
        } else if ($a > $b){
            echo "Second is true";
        } else{
            echo "None of the condition were true!";
        }
        echo "<br>";

        $result = match ($a) {
            1, 3, 5 => "Variable a is equal to one!",
            2 => "Variable a is equal to two!",
            default => "None were a match"
        };
        echo $result;
        
        echo "<br>";
        ?>
    </body>
    
    Fonte: https://www.youtube.com/watch?v=bOqTCDfc7Tk&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=6
</html>