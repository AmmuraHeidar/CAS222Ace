<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ah-acecontact', 'ace_user', 'myP4ssw0rdG03727771');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the ah-acecontact database server.';
  include 'error.html.php';
  exit();
}

// the try only runs if the Name field has been submitted ''
if (isset($_POST['myname']))
  {  

    $name = $_POST['myname'];
    $age = $_POST['myage'];
    $role = $_POST['myrole'];
    $phone = $_POST['myphone'];
    $email = $_POST['myemail'];
    $emname = $_POST['myemname'];
    $emphone = $_POST['myemphone'];
    $gender = $_POST['mygender'];
    $tshirt = $_POST['mytshirt'];
    $satevent = $_POST['mysatevent'];
    $sunevent = $_POST['mysunevent'];
    $comment = $_POST['mycomment'];
        

    
    try {
      $sql = 'INSERT INTO aceregistration SET
          name = :myname,
          age = :myage,
          role = :myrole,
          phone = :myphone,
          email = :myemail,
          emname = :myemname,
          emphone = :myemphone,
          gender = :mygender,
          tshirt = :mytshirt,
          satevent = :mysatevent,
          sunevent = :mysunevent,
          comment = :mycomment';
          
      $s = $pdo->prepare($sql);
        $s->bindValue(':myname', $_POST['myname']);
        $s->bindValue(':myage', $_POST['myage']);
        $s->bindValue(':myrole', $_POST['myrole']);
        $s->bindValue(':myphone', $_POST['myphone']);
        $s->bindValue(':myemail', $_POST['myemail']);
        $s->bindValue(':myemname', $_POST['myemname']);
        $s->bindValue(':myemphone', $_POST['myemphone']);
        $s->bindValue(':mygender', $_POST['mygender']);
        $s->bindValue(':mytshirt', $_POST['mytshirt']);
        $s->bindValue(':mysatevent', $_POST['mysatevent']);
        $s->bindValue(':mysunevent', $_POST['mysunevent']);
        $s->bindValue(':mycomment', $_POST['mycomment']);
        
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted registration: ' . $e->getMessage();
      include 'error.html.php';
      exit();
    }

    include 'success.html.php';
}

  
else {
    include 'reservations.html.php';

}
