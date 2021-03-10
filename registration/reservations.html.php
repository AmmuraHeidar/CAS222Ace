<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>CAS-222 Registration From | Ammura Heidar</title>
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
            <h2>Registration Form</h2>
            <p>Required fields are marked with an asterisk (*).</p><br>
            
                <form method="post" action="index.php">
                    <label for="myname">*Name:</label>
                    <input type="text" name="myname" id="myname" required><br><br>

                    <label for="myage">*Age:</label>
                    <input type="text" name="myage" id="myage" required><br><br>

                    <label for="role">*Role:</label>
                    <select size="1" name="myrole" id="myrole">
                        <option>Choose Your Role</option>
                        <option value="Athlete">Athlete</option>
                        <option value="Volunteer">Volunteer</option>
                    </select><br><br>

                    <label for="myphone">Phone Number:</label>
                    <input type="text" name="myphone" id="myphone"><br><br>

                    <label for="myemail">E-mail Address:</label>
                    <input type="text" name="myemail" id="myemail"><br><br>

                    <label for="myemname">*Emergency Contact Name:</label>
                    <input type="text" name="myemname" id="myemname" required><br><br>

                    <label for="myemphone">*Emergency Contact Phone Number:</label>
                    <input type="text" name="myemphone" id="myemphone" required><br><br>

                    <label for="mygender">Gender Identification:</label>
                    <select size="1" name="mygender" id="mygender">
                        <option>Choose ID</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Non-binary or Other">Non-binary or Other</option>
                    </select><br><br>

                    <label for="mytshirt">T-shirt Size:</label>
                    <select size="1" name="mytshirt" id="mytshirt">
                        <option>Choose Size</option>
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select><br><br>

                    <label for="satevent">*Saturday Events Registering For:</label>
                    <select size="1" name="mysatevent" id="mysatevent">
                        <option>Choose Sat Event</option>
                        <option value="Long Course Triathlon">Long Course Triathlon</option>
                        <option value="Olympic Triathlon">Olympic Triathlon</option>
                        <option value="10K">10K</option>
                        <option value="Half Marathon">Half Marathon</option>
                    </select><br><br>

                    <label for="sunevent">*Sunday Events Registering For:</label>
                    <select size="1" name="mysunevent" id="mysunevent">
                        <option>Choose Sun Event</option>
                        <option value="Sprint Triathlon">Sprint Triathlon</option>
                        <option value="Try-a-Tri">Try-a-Tri</option>
                        <option value="Splash n Dash">Splash n Dash</option>
                    </select><br><br>

                    <label for="mycomment">Any Special Accommodations Needed?</label><br>
                    <textarea name="mycomment" id="mycomment" rows="2" cols="30"></textarea><br><br>

                    <input id="mysubmit" type="submit" value="Submit">
                </form><br>
            
        </main>
    </div>
    
    <?php include '../includes/footer.inc.html.php'; ?>
    
</body>

</html>