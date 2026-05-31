<?php
// 1. For:
for ($i = 0; $i < 5; $i++) { // this is the outer loop
    for ($j = 0; $j < 5; $j++) { //this is the inner loop; reason why we need another variable instead of i we use j
        echo $i . ' - ' . $j . '<br>';
    }
}  // wil iterate the 0 - 0; 0 - 1; 0 - 2;... 


// 2. While:
$i = 0;
while ($i < 5) {
    $j = 0;
    while ($j < 5) {
        echo $i . ' - ' . $j . '<br>';
        $j++;
    }
    $i++;
}  // wil iterate the 0 - 0; 0 - 1; 0 - 2;... 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nested Loops & CSS Grid Example</title>

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(5, 50px);
            /* Create 5 columns, each 50px wide */
            grid-gap: 5px;
            /* Add some spacing between grid items */
            margin-bottom: 20px;
        }

        .grid-item {
            width: 50px;
            height: 50px;
            background-color: lightblue;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>

<body>
    <!-- another way to write CSS inside the php => for: -->
    <div class="grid-container">
        <?php for ($i = 0; $i < 5; $i++):  ?>
            <?php for ($j = 0; $j < 5; $j++):  ?>
                <div class="grid-item">
                    <?= $i . ' - ' . $j ?>
                </div>
            <?php endfor ?>
        <?php endfor ?>
    </div>

    <div class="grid-container">
        <?php
        for ($row = 1; $row <= 5; $row++) : ?>
            <?php for ($col = 1; $col <= 5; $col++) : ?>
                <div class="grid-item">
                    <?= $row * $col ?>
                </div>
            <?php endfor; ?>
        <?php endfor; ?>
    </div>

    <div class="grid-container">
        <?php for ($i = 1; $i <= 25; $i++) : ?>
            <div class="grid-item">
                <?= $i ?>
            </div>
        <?php endfor;
        ?>
    </div>
</body>

</html>