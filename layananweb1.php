<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>

<body>

    <h2>Login Form</h2>

    <form action="/login" method="post">
        <div>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
        </div>
        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>

</body>

</html>