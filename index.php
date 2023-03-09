<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>
        Recommendation books
    </h1>

    <?php 
    $books = [
        "Do Androids Dream of Electric Shop",
        "The Langoliers",
        "Hail Mary"
    ];
    ?>

    <ul>
        <?php foreach($books as $book) {
            echo "<li>{$book}™</li>";
        };
        
        ?>
    </ul>
    
</body>
</html>