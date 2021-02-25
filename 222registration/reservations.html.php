<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ace in the Hole Registration Form</title>
    <meta name="description" content="Register for your spot">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=styles.css>
    <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <div id="wrapper">

        <header>
            <h1>Ace in the Hole Registration Form</h1>
        </header>

        <main>
            <h2>Register For An Upcoming Event</h2>
            <div id="source">Required fields are marked with an asterisk (*).</div><br>
            <div id="reservations">
                <form method="post" action="index.php">
                    <label for="myname">*Name:</label>
                    <input type="text" name="myname" id="myname" required>
                    
                    <label for="myage">*Age:</label>
                    <input type="text" name="myage" id="myage" required>
                    
                    <label for="role">*Role:</label>
                    <select size="1" name="myrole" id="myrole">
                        <option>Choose Your Role</option>
                        <option value="Athlete">Athlete</option>
                        <option value="Volunteer">Volunteer</option>
                    </select><br><br>
                    
                    <label for="myphone">Phone Number:</label>
                    <input type="text" name="myphone" id="myphone">
                    
                    <label for="myemail">E-mail Address:</label>
                    <input type="text" name="myemail" id="myemail">
                    
                    <label for="myemname">*Emergency Contact Name:</label>
                    <input type="text" name="myemname" id="myemname" required><br>
                    
                    <label for="myemphone">*Emergency Contact Phone Number:</label><br><br>
                    <input type="text" name="myemphone" id="myemphone" required>
                    
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
                    
                    <label for="mycomment">Any Special Accommodations Needed?</label>
                    <textarea name="mycomment" id="mycomment" rows="2" cols="20"></textarea><br>
                    
                    <input id="mysubmit" type="submit" value="Submit">
                </form>
            </div>
        </main>

    </div>
    <footer>
        &copy; <?php echo date("Y"); ?> Ammura Heidar<br>
    </footer>
</body>

</html>