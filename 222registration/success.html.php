<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace in the Hole Registration Form</title>
        <meta name="description" content="Register for your spot">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=../project.css>
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        
    </head>
    
    <body>
        <div id="wrapper">
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following:<br>
                  Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
                  Age: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
                  Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br>
                  Phone: <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergency Contact Name: <?php echo htmlspecialchars($emname, ENT_QUOTES, 'UTF-8'); ?><br>
                  Emergency Contact Phone Number: <?php echo htmlspecialchars($emphone, ENT_QUOTES, 'UTF-8'); ?><br>
                  Gender Identification: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
                  T-shirt Size: <?php echo htmlspecialchars($tshirt, ENT_QUOTES, 'UTF-8'); ?><br>
                  Saturday Events Registering For: <?php echo htmlspecialchars($satevent, ENT_QUOTES, 'UTF-8'); ?><br>
                  Sunday Events Registering For: <?php echo htmlspecialchars($sunevent, ENT_QUOTES, 'UTF-8'); ?><br>
                  Special Accommodations Needed: <?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
        </div>
        <footer>&copy; <?php echo date("Y"); ?> Ammura Heidar<br></footer>
    </body>
</html>
