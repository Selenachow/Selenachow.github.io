<?php
require 'config.php';

// Should return a PDO
function db_connect() {

  try {
    // TODO
    // try to open database connection using constants set in config.php
    // return $pdo;
    $connectString = 'mysql:host='. DBHOST . ';dbname=' . DBNAME;
    // $connectString = 'mysql:host=localhost;dbname=a8'
    $user = DBUSER;
    $pass = DBPASS;

    $pdo = new PDO($connectString, $user, $pass);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    return $pdo;
  }
  catch (PDOException $e)
  {
    die($e->getMessage());
  }
}

// Handle form submission
function handle_form_submission() {
  global $pdo;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    // TODO
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])){
      $sql = 'INSERT INTO comments('name', email, 'message') VALUES (:name, :email, :message)';

      $statement = $pdo->prepare($sql);

      $statement->bindValue(':name', $_POST['name']);
      $statement->bindValue(':email', $_POST['email']);
      $statement->bindValue(':commentText', $_POST['comment']);
      // Bind the remaining 3 attributes using the same method
      $statement->execute();
    }

  }
}

// Get all comments from database and store in $comments
// function get_comments() {
//   global $pdo;
//   global $comments;

//   // //TODO

//   $sql ='SELECT * FROM comments ORDER BY ID DESC';
//   $result = $pdo->query($sql);
//   while($row = $result ->fetch()){
//     $comments[] = $row;
//   }

// }

// // Get unique email addresses and store in $commenters
// function get_commenters() {
//   global $pdo;
//   global $commenters;

//   //TODO

//   $sql ='SELECT DISTINCT email FROM comments';
//   $result = $pdo->query($sql);
//   while($row = $result ->fetch()){
//     $commenters[] = $row;
//   }
// }
