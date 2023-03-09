<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <?php 
    $books = [
        [ 
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'www.google.com'
        ],
        [ 
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'www.google.com'
        ]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?=$book['purchaseUrl'] ?>">
                <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>