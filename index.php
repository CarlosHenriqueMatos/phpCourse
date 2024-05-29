Fonte: https://www.youtube.com/watch?v=bOqTCDfc7Tk&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih&index=6

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
        <form action = "includes/formhandler.php" method = "post">
            <label for = "firstname">Firstname?</label>
            <input if = "firstname" type="text" name = "firstname" placeholder = "Firstname ...">

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
</body>
</html>