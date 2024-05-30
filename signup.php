<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background: url('img/technogym_village_hero.jpeg') no-repeat center center fixed; height: auto; background-size: cover;">
    <div class="container" style="max-width: 600px;
    background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    margin-top: 50px;">
        <h2>Sign Up</h2>
        <form action="php/signup.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="password" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="signUp">Sign Up</button>
        </form>
        <br>
        <p>Already have an account? <a href="login.php">Log in here</a></p>
    </div>
</body>

</html>