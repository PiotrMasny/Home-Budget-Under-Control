<?php
    require_once('constants.php');
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
?>
<!DOCTYPE>
<html>
<head>
    <title><?php echo TITLE ?> - registration successful</title>
</head>
<body>
    <h1>Home Budget Under Control</h1>
    <?php
    if (!preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $email)) {
        echo "<p>Wrong Email Adress</p>";
        exit;
    }
    if (!($password == $confirmPassword)) {
        echo "<p>Passwords are different</p>";
        exit;
    }
    ?>
</body>
</html>