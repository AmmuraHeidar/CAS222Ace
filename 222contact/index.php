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

if (isset($_POST['name']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    try {
      $sql = 'INSERT INTO acecontact SET
          name = :name,
          email = :email,
          comment = :comment';
          
      $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['name']);
        $s->bindValue(':email', $_POST['email']);
        $s->bindValue(':comment', $_POST['comment']);
        
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted comment: ' . $e->getMessage();
      include 'error.html.php';
      exit();
    }
    include 'success.html.php';
}
  
else {
    include 'contact.html.php';

}
