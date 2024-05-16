<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Looping PHP</h1>
    
    <?php
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";

    // Looping Ascending
    echo "LOOPING PERTAMA<br>";
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "$i - I Love PHP<br>";
        }
    }

    // Looping Descending
    echo "LOOPING KEDUA<br>";
    for ($i = 20; $i >= 1; $i--) {
        if ($i % 2 == 0) {
            echo "$i - I Love PHP<br>";
        }
    }

    echo "<h3>Soal No 2 Looping Array Modulo</h3>";

    $numbers = [18, 45, 29, 61, 47, 34];
    echo "array numbers: ";
    print_r($numbers);
    
    echo "<br>";
    echo "Array sisa baginya adalah: <br>";
    $rest = [];
    foreach ($numbers as $number) {
        $rest[] = $number % 5;
    }
    print_r($rest);

    echo "<h3> Soal No 3 Looping Asociative Array </h3>";

    $items = [
        ['id' => '001', 'name' => 'Keyboard Logitek', 'price' => 60000, 'description' => 'Keyboard yang mantap untuk kantoran', 'source' => 'logitek.jpeg'],
        ['id' => '002', 'name' => 'Keyboard MSI', 'price' => 300000, 'description' => 'Keyboard gaming MSI mekanik', 'source' => 'msi.jpeg'],
        ['id' => '003', 'name' => 'Mouse Genius', 'price' => 50000, 'description' => 'Mouse Genius biar lebih pinter', 'source' => 'genius.jpeg'],
        ['id' => '004', 'name' => 'Mouse Jerry', 'price' => 30000, 'description' => 'Mouse yang disukai kucing', 'source' => 'jerry.jpeg']
    ];

    foreach ($items as $item) {
        print_r($item);
        echo "<br>";
    }

    echo "<h3>Soal No 4 Asterisk</h3>";

    // Asterisk 5x5
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "Asterix: ";
    ?>
</body>
</html>
