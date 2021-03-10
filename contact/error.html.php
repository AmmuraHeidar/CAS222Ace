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
            <h2>OPPS. Something Went Wrong!</h2>
            <?php echo $error; ?><br><br>
            
            <h3>Kindly, <a href="index.php" target="_self">fill out another from</a></h3>
            
        </main>
    </div>

    <?php include '../includes/footer.inc.html.php'; ?>
</body>

</html>