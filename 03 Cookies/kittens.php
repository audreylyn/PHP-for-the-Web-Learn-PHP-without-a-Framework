<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kittens</title>
</head>
<body>
<?php

$numberOfPictures = isset($_GET['number']) ? (int)$_GET['number'] : 1;
if ($numberOfPictures < 1) {
    $numberOfPictures = 1;
}

$picture = isset($_GET['picture']) ? $_GET['picture'] : 'cat.jpg';

for ($i = 1; $i <= $numberOfPictures; $i++) {
    ?>
    Cat <?php echo $i; ?>:
    <img src="/<?php echo htmlspecialchars($picture, ENT_QUOTES); ?>"
         alt="Picture <?php echo $i; ?>">
    <?php
}

?>

    <form>
        <div>
            <label for="picture">
                Select a picture:
            </label>
            <select name="picture" id="picture">
            <option value="cat.jpg">Cat</option>
            <option value="cat2.jpg">Cat2</option>
            </select>
        </div>
        <div>
            <label for="number">
                Number of pictures to show:
            </label>
            <input name="number" value="<?php
                if (isset($_GET['number'])) {
                echo htmlspecialchars($_GET['number'], ENT_QUOTES); }
                ?>">    
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>