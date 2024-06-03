<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "css/style.css">
        <title>javaScript Drag & DropFile Upload</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <title>Document</title>
    </head>
    <body>

    <div class="drag-area" ondrop="upload_file(event)" ondragover="return false">
        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
        <header>Drag & Drop to Upload File</header>
        <span>OR</span>
        <button>Browse File</button>
        <input type="file" name="file" id="file" hidden>
    </div>
    <script src="script.js"></script>


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
        
        <form action = "<?php echo htmlspecialchars($_SERVER
        ['PHP_SELF']); ?>" method = "post">;
            <input type="number" name="num01"
            placeholder="Number one" required>
            <select name="operator">
                <option value = "add">+</option>
                <option value = "subtract">-</option>
                <option value = "multiply">*</option>
                <option value = "divide">/</option>
            </select>
            <input type="number" name="num02"
            placeholder="Number two" required>
            <button>Calculate</button>
        </form>

        <?php
        $a = "Hello";
        $b = "World!";
        $c = $a . " " . $b;
        $num01 = "0";
        $num02 = "0";
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
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $num01 = filter_input(INPUT_POST, 'num01', FILTER_SANITIZE_NUMBER_FLOAT);
            $num02 = filter_input(INPUT_POST, 'num02', FILTER_SANITIZE_NUMBER_FLOAT);
            $operator = htmlspecialchars($_POST["operator"] );
        }


        $errors = false;

        if (empty($num01) || empty($num02) || empty($operator)){
            echo "<p class = 'calc-error'>Fill in all fields!</p>";
            $errors = true;
        }

        if (!is_numeric($num01) || !is_numeric($num02)){
            echo "<p class = 'calc-error'>Only write numbers!</p>";
            $errors = true;
        }


        if (!$errors){
            $value = 0;

            switch ($operator){
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "subtract":
                    $value = $num01 - $num02;
                    break;
                case "multiply":
                    $value = $num01 * $num02;
                    break;
                case "divide":
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "<p class='calc-error'>Something went 
                    HORRIBLY wrong!</p>";
            }
            echo "<p class='calc-result'>Result = " . 
            $value . "</p>";
        };

        $fruits = array("Apple", "Banana", "Cherry");
        $tasks = [
            "laundry" => "Daniel",
            "trash" => "Frida",
            "vacuum" => "Basse",
            "dishes" => "Bella"
        ];
        echo "<br>";

        echo "laundry " . $tasks["laundry"];

        echo "<br>";
        ?>

    </main>
    </body>

</html>
https://www.youtube.com/watch?v=D7mqV-p1kEc&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=10;
Fonte: https://www.youtube.com/watch?v=bOqTCDfc7Tk&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=6;