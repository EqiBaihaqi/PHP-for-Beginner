# PHP Basic
## Episode 4
variable dapat membuat proses mengkoding menjadi lebih simple dan efisien
penulian variable dapat seperti "$variable1"."Everybody"; atau langusng dengan "$variable1 EveryBody"

## Episode 5
Pada video episode 5, menjelaskan mengenai boolean dan kondisi, dimana boolean memiliki nilai 'true' atau 'false' yang bisa dimasukkan ke dalam sebuah kondisi.

jika memasukkan nilai true pada variable $read, maka akan memunculkan output :
![image](https://user-images.githubusercontent.com/95467302/223888836-bc75fc77-9902-48f0-baff-cae14ded040c.png)

Jika memasukkan nilai false pada variable $read maka akan memunculkan output :
![image](https://user-images.githubusercontent.com/95467302/223888986-13c23132-3882-402c-8a51-a87cb90d3169.png)

## Episode 6
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

## Episode 7
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
