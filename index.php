<?php require_once('constants.php'); ?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Piotr Masny" />
    <title><?php echo TITLE ?></title>
</head>
<body>
    <h1><?php echo TITLE ?></h1>
    <form action="add_user.php" method="post">
    <h2>Registration</h2>
    <table>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" /></td>
    </tr>
    <tr>
        <td>Surname</td>
        <td><input type="text" name="surname" /></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" name="email" /></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" /></td>
    </tr>
    <tr>
        <td>Confirm password</td>
        <td><input type="password" name="confirmPassword" /></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;"><input type="submit" value="Submit" /></td>
    </tr>
    </table>
    </form>
</body>
</html>