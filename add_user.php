<?php
    require_once('constants.php');
    require_once('functions.php');
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
?>
<!DOCTYPE>
<html>
<head>
    <title><?php echo TITLE ?> - registration</title>
</head>
<body>
    <h1>Home Budget Under Control</h1>
    <?php
    session_start();
    try {
        
        if (!completed($_POST)) {
            throw new Exception('Form was filled incorrect!');
        }
    
        if (!correctEmail($email)) {
            throw new Exception('Email adress is incorrect!');
        }
        
        if ($password != $confirmPassword) {
            throw new Exception('Passwords are different!');
        }

        register($name, $surname, $email, $password);

        echo "WITAJ!";
    }
    catch (Exception $e) {
        echo $e->getMessage();
        exit;
    }
    ?>
</body>
</html>