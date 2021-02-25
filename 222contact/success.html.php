<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CAS 222 Contact</title>
    </head>
    <body>
        <header>
            <h1>Ace in the Hole Contact Form</h1>
        </header>
        <main>
            <h2>Success!</h2>
            <p>Your comment/question has been submitted.</p>
            <p>You have submitted the following information:<br>
                  Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                  Comment: <?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?><br>
        </main>
        <footer>
            &copy; <?php echo date("Y"); ?> Ammura Heidar<br>
        </footer>
    </body>
</html>