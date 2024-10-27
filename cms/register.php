<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles.css"/>
    <title></title>
</head>
<body>
    <div id="wrapper">
        <div class="header">

        </div>
        <div class="wrapper">
            <div class="left-sidebar">
                <div class="login-box">
                    <form method="post" action="actions/user_accounts.php">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username...">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password...">
                        <input type="submit" value="Login" name="submit">
                        <input type="reset" value="Rest">
                    </form>
                    <a href="register.php">Register</a>
                </div>
            </div>
            <div class="container">
                <?php if ((@$_GET["msg"] == "required-fields")): ?>
                    <div class="alert-message">Fields in red are required fields!</div>
                <?php elseif ((@$_GET["msg"] == "register=successful")): ?>
                    <div class="alert-message">Successfully registered!</div>
                <?php elseif ((@$_GET["msg"] == "duplicate-email")): ?>
                    <div class="alert-message">Email already registered!</div>
                <?php endif; ?>
                <h3>Register here</h3>
                <a href="index.php">Home</a> / <a href="register.php">Register</a>
                <form method="post" action="actions/user_accounts.php">
                    <label class="required">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username...">
                    <label class="required">Display name</label>
                    <input type="text" name="user_display_name" class="form-control" placeholder="Display name...">
                    <label class="required">Email address</label>
                    <input type="text" name="user_email_address" class="form-control" placeholder="Email address...">
                    <label class="required">Password</label>
                    <input type="password" name="user_password" class="form-control" placeholder="Password...">
                    <input type="submit" value="Register" name="register">
                    <input type="reset" value="Rest">
                </form>
            </div>
        </div>
    </div>
</body>
</html>