# PHP Basic
## Episode 3 - Your First PHP Tag
Tag PHP digunakan untuk menandai kode PHP pada halaman web. Tag PHP dimulai dengan <?php dan diakhiri dengan ?>. Semua kode PHP harus ditempatkan di antara tag PHP. Contoh :
```
<?php
  // kode program Anda
?>
```
Fungsi echo digunakan untuk menampilkan teks atau variabel pada halaman web. Fungsi echo ditulis dengan format echo 'teks';. Contoh :
```
 echo 'Hello World';
```
## Episode 4 - Variables
variable dapat membuat proses mengkoding menjadi lebih simple dan efisien
penulian variable dapat seperti "$variable1"."Everybody"; atau langusng dengan "$variable1 EveryBody"
contoh :
```
// Variabel dengan nama $greeting dan value "Hello"
$greeting = "Hello";

// Pemanggilan dalam echo, dipisahkan oleh ' . ' jika terdapat tambahan argumen, 
// misalnya string atau variabel lain (concate)
echo $greeting . "Everybody!";

// untuk menambahkan spasi, bisa dilakukan sebelum "Everybody!"
echo $greeting . " Everybody!";
// atau
echo $greeting . " " . "Everybody!";

// selain cara di atas, kita juga bisa dengan cara Variabel dipanggil di didalam string. 
// agar terlihat lebih rapih dan lebih efision
echo "$greeting Everybody!";
```

## Episode 5 - Conditionals and Booleans
Pada video episode 5, menjelaskan mengenai boolean dan kondisi, dimana boolean memiliki nilai 'true' atau 'false' yang bisa dimasukkan ke dalam sebuah kondisi.
contoh :
```
<?php
//Membuat variabel
$name = "Dark Matter";
$read = true;

//Operasi if-else
if ($read) {
    $message = "You have read $name"; // jika bernilai true, maka akan mengembalikan nilai true
} else {
    $message = "You have NOT read $name"; // jika bernilai false, maka akan mengembalikan nilai false
}
<?
<h1>
    // cara menampilkan variabel
    <?php 
    echo $message;
    ?>
    // atau
    <?= $message ?> // membuka php sekaligus memanggil echo
</h1>
```
jika memasukkan nilai true pada variable $read, maka akan memunculkan output :
![image](https://user-images.githubusercontent.com/95467302/223888836-bc75fc77-9902-48f0-baff-cae14ded040c.png)

Jika memasukkan nilai false pada variable $read maka akan memunculkan output :
![image](https://user-images.githubusercontent.com/95467302/223888986-13c23132-3882-402c-8a51-a87cb90d3169.png)


## Episode 6 - Arrays
Array adalah kumpulan data yang disimpan dalam satu variabel. Array dapat menyimpan satu atau lebih nilai. Array dapat menyimpan berbagai jenis data, termasuk teks, angka, dan boolean. Array diawali dengan tanda $ diikuti dengan nama variabel, dan menggunakan keyword "[]".

Contoh variable array 
```
<?php 
    $books = [
        "Do Androids Dream of Electric Shop",
        "The Langoliers",
        "Hail Mary"
    ];
    ?>
```

salah satu cara memunculkan variable array adalah dengan menggunakan loop, contoh menggunakan foreach loop :
```
<ul>
        <?php foreach($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>
```

## Episode 7 - Associative arrays
Associative array adalah array yang memiliki key dan value. Key adalah nama yang diberikan untuk data pada array. Key dapat berupa angka atau string. 
Contoh Associative array :
```
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
```
Memunculkan output Associative array berdasarkan 'name' dan 'purchaseUrl' :
```
<ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?=$book['purchaseUrl'] ?>">
                <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
 ```
 ## Episode 8 - Functions and filtering
 Melakukan Filtering pada buku yang memiliki author 'Andy Weir' :
 ```
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
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [ 
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [ 
            'name' => 'The Martin',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <?php if ($book['author'] = 'Andy Weir') : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>
</html>
```
Output :
![image](https://user-images.githubusercontent.com/95467302/228076976-c6608cc8-5e1a-47f2-adb0-8805cf303b58.png)

Filtering masih belum benar dikarenakan pada code ``` <?php if ($book['author'] = 'Andy Weir') : ?> ``` hanya menggunakan '=' 1x yang memiliki arti yaitu menginputkan atau memasukkan nilai 'Andy Weir' pada variable 'author'. Maka harus menggunakan '=' sebanyak 3x agar dapat melakukan filtering dengan baik, pembetulan coding :
```
<?php foreach ($books as $book) : ?>
            <?php if ($book['author'] === 'Andy Weir') : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
            <?php endif; ?>
        <?php endforeach; ?>
 ```
 output :
 ![image](https://user-images.githubusercontent.com/95467302/228077418-5f2a5ba5-8f54-44b2-8c51-260fa5bbcd8f.png)

Menambahkan function filterByAuthor yang memiliki fungsi yang sama yaitu untuk memfilter variable 'Author' yang memiliki nilai 'Andy Weir'
code :
```
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
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [ 
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [ 
            'name' => 'The Martin',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    function filterByAuthor($books){
        $filteredBook = [];
        foreach($books as $book){
            if ($book['author'] === 'Andy Weir'){
                $filteredBook[] = $book;
            }
        }
        return $filteredBook;
    }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books) as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
```
output :
![image](https://user-images.githubusercontent.com/95467302/228079700-e8132981-c787-4079-8654-0dfbed959c9c.png)

Untuk mempermudah melakukan pemfilteran, diberikan parameter $author pada function filterByAuthor agar dapat merubah filter dengan mudah
Perubahan code :
```
    function filterByAuthor($books, $author){
        $filteredBook = [];
        foreach($books as $book){
            if ($book['author'] === $author){
                $filteredBook[] = $book;
            }
        }
        return $filteredBook;
    }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
 ```
 Output :
 ![image](https://user-images.githubusercontent.com/95467302/228080453-67cf24b4-0d0d-467f-b967-fa4b190025bb.png)

## Episode 9 - Lambda Function
Merubah function sebelumnya menjadi function yang lebih flexible, hanya dengan menambahkan parameter $key dan $value.
code :
```
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
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [ 
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [ 
            'name' => 'The Martin',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    function filter($items, $key, $value){
    $filteredItems = [];
        foreach($items as $item){
            if ($item[$key] === $value){
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }
    $filteredBooks = filter($books, 'releaseYear', 2021);
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
```
output :
![image](https://user-images.githubusercontent.com/95467302/228083885-9f257412-cc7a-4e76-97ac-87075051e18e.png)

Tahap selanjutnya adalah menambahkan lambda function atau anonnymous function, yang berfungsi untuk membuat function menjadi lebih flexible. lalu menghapus function yang ada sebelumnya dan menggunakan fitur yang ada di php yaitu 'array_filter' untuk mempermudah penjalanan function
Perubahan code :
 ```
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
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [ 
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [ 
            'name' => 'The Martin',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    $filteredBooks = array_filter($books, function ($book) {
        return $book['releaseYear'] < 2000;
    });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
```
Output :
![image](https://user-images.githubusercontent.com/95467302/228085839-ffcdbdec-640c-4f14-8925-685305ce349b.png)
