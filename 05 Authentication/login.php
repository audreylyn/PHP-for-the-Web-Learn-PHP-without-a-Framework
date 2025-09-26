<?php
    session_start();
    $users = [
        'admin' => '$2y$10$SD1.RFkJJPEtspsLFhS2D.QjxWjnTOxzA3ZIKjoioNz5pBa8wS3Sy'
        //admincute
    ];

    if(isset($_POST['username'], $_POST['password'])) {

        if(isset($users[$_POST['username']])) {

            $expectedPasswordHash = $users[$_POST['username']];


            if(password_verify($_POST['password'], $expectedPasswordHash)) {

                $_SESSION['auth_user'] = $_POST['username'];

                header('Location: /secret.php');
                exit;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title> 
</head>
<body>
<?php
var_dump($_POST);

    if(!isset($_SESSION['auth_user'])) {
        echo htmlspecialchars("You didnt have an account", ENT_QUOTES);
    }


?>
<form method="post">
    <div>
        <label for="username">
            Username:
        </label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">
            Password:
        </label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>