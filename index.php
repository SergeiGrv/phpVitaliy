<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Привет</title>
</head>
<body>
    <h1>Hi</h1>

    <div>
        <ul>
            <?php 
                for ($i = 1; $i <= 100; $i++) {
                    echo "<li>".$i."</li>";
                };
            ?>
        </ul>
    </div>
</body>
</html>