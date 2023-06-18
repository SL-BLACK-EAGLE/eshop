<?php


require __DIR__.'/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__).'/backend');
$dotenv->load();


$dbHost = $_ENV['DB_HOST'];
$dbUsername = $_ENV['DB_USERNAME'];
$dbPassword = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];



try {
    // Create a new mysqli object
    $connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    $message = "Connected to backend";
  
    // Return the message as a response
    echo $message;
  } catch (ErrorException $e) {
    // Log the error
    error_log($e->getMessage(),0);
  
    // Display a friendly error message to the user
    echo "An error occurred while connecting to the database. Please try again later.";
  }
     

?>
