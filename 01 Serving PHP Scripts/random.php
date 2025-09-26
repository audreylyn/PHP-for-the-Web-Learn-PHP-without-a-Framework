<?php $luckyNumber = random_int(1, 10); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Your lucky number is <?php echo $luckyNumber; ?> </h1>
    <?php if ($luckyNumber > 5) { ?>
        <h2>Nice!</h2>
    <?php } ?>

    <p>
        <a href="./kittens.php?number=<?php echo $luckyNumber; ?>">
            Now show me <?php echo $luckyNumber; ?> kittens!
        </a>
    </p>

</body>

</html>