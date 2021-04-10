<h1>Login</h1>

<h2>Via GET</h2>
<form action="/welcome.php">
    <label for="username">username</label>
    <input type="text" id="username" name="username" required>
    <input type="submit" value="Login">
</form>

<h2>Via POST</h2>
<form action="/welcome.php" method="POST">
    <label for="username">username</label>
    <input type="text" id="username" name="username" required>
    <input type="submit" value="Login">
</form>