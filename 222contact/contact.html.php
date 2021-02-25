<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CAS 222 Contact</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <h1>Ace in the Hole Contact Form</h1>
        </header>
        <main>
            <h2>Information request form</h2>
            <p>Please fill in the following:</p>
            <form method="post" action="index.php">
                <label for="name">*Name:</label>
                <input type="text" name="name" id="name" required>
                <label for="band">E-mail address:</label>
                <input type="text" name="email" id="email">
                <label for="genre">Question or Comment:</label>
                <textarea name="comment" id="comment" rows="3" cols="60"></textarea>
                <input type="submit">
            </form>
        </main>
        <footer>
            &copy; <?php echo date("Y"); ?> Ammura Heidar<br>
        </footer>
    </body>
</html>