<?php 
    $language = "English"; 

    if(isset($_GET['language'])) {
        $language = $_GET['language'];
        setcookie('language', $language); 
    } else if(isset($_COOKIE['language'])) {
        $language = $_COOKIE['language'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
</head>
<body>
    <?php 
        $langs = [
            "English" => "English",
            "Dutch" => "Dutch",
        ];
    ?>
    <form>
        <div>
            <label for="language">Language: </label>
            <select name="language" id="language">
               <?php 
                    foreach($langs as $lang => $desc) {
                        ?>
                            <option value="<?php echo htmlspecialchars($lang, ENT_QUOTES)?>"
                            <?php if($language === $lang) {
                                echo 'selected';
                            } ?>
                            ><?php echo htmlspecialchars($desc, ENT_QUOTES) ?></option>
                        <?php
                    }
               ?>
            </select> <br>
        </div>
        
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    <?php 
        if($language === "English") {
            echo "Congratulations!";
        } else if($language === "Dutch") {
            echo "Gefeliciteerd!";
        } else {
            echo "Invalid";
        }
    ?>
</body>
</html>
