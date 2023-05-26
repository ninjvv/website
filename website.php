<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Website Example</title>
    <style>
        body {
            background-color: <?php echo isset($_POST['color']) ? $_POST['color'] : '#ffffff'; ?>;
        }
    </style>
</head>
<body>
    <h1>Welcome to our dynamic website!</h1>

    <?php
    // Handle user input
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        echo "<p>Hello, $name! Thanks for your input.</p>";
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="#ffffff">Light</option>
            <option value="#000000">Dark</option>
            <option value="#ff0000">Red</option>
            <option value="#00ff00">Green</option>
            <option value="#0000ff">Blue</option>
        </select>
        <br><br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
