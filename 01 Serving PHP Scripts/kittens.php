<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kittens</title>
</head>

<body>
    <?php
    
    // IF ELSE
    // if(isset($_GET['number'])) {
    //     $numberOfKittens = $_GET['number'];
    // } else {
    //     $numberOfKittens = 13;
    // }
 
    // TERNARY OPERATOR
    // $numberOfKittens = isset($_GET['number']) ?  $_GET['number'] : 15;


    //NULL COALESCING
    $numberOfKittens = $_GET['number'] ?? 11;

    if($numberOfKittens < 0) {
        echo "kittens less than 0";
        $numberOfKittens = 1;
    } 


    for ($i = 1; $i <= $numberOfKittens; $i++) {
    ?>
        Cat <?php echo $i; ?>:
        <img src="./public/cat.jpg" alt="cat <?php echo $i; ?>">
    <?php
    }

    ?>
</body>

</html>