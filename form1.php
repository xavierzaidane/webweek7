<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <form method="post" action="html_safe.php">
        <label for="input">Enter something: </label>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Enter your email: </label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
