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
            <h2>Contact Form</h2>
            <p>Required fields are marked with an asterisk (*).</p>
            
            <form method="post" action="index.php">
                <label for="name">*Name:</label>
                <input type="text" name="name" id="name" required><br>
                
                <label for="band">E-mail address:</label>
                <input type="text" name="email" id="email"><br>
                
                <label for="genre">Question or Comment:</label><br>
                <textarea name="comment" id="comment" rows="3" cols="60"></textarea><br>
                
                <label for="role">*Role:</label>
                <select size="1" name="role" id="role">
                    <option>Choose Your Role</option>
                    <option value="Athlete">Athlete</option>
                    <option value="Volunteer">Volunteer</option>
                    <option value="Interested Party">Interested Party</option>
                </select><br><br>
                
                <input type="submit">
                
            </form><br>
            
        </main>
    </div>
    
    <?php include '../includes/footer.inc.html.php'; ?>
    
</body>

</html>