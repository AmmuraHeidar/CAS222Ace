<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>CAS-222 Contact From | Ammura Heidar</title>
    <meta name="author" content="Ammura Heidar">
    <meta name="description" content="Week 6, Forms Assignment">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700" rel="stylesheet" type="text/css">

    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/navigation.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">

    <script src="https://www.w3schools.com/lib/w3.js"></script>

    <link rel="icon" type="image/x-icon" href="" />

</head>

<body>

    <div id="container">

        <header class="header">

        <?php include '../includes/header.inc.html.php'; ?>
        <?php include '../includes/navigation.inc.html.php'; ?>

        </header>

        <main>
            <h2>Inquery submitted successfully!</h2>
            <h3>Our records show you submitted the following:</h3>
            <p>
                Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                Comment: <?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?><br>
                Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br>
            </p>
            
        </main>
    </div>

    <?php include '../includes/footer.inc.html.php'; ?>
</body>

</html>