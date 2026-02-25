<?php
##
##  05_test_php_connection.php    2025-07-29
##

$hostname = 'localhost' ;
$username = 'testUser'  ;
$password = 'password'  ;
$database = 'testDb'    ;

try {
        $dbh = new PDO ("mysql:host=$hostname;dbname=$database", $username, $password);
        echo 'Successfully connected to database' . "\n" ;

        /*** set the error reporting attribute ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the SQL statement ***/
        $stmt = $dbh->prepare("SELECT VERSION();");

        $stmt->execute();
        echo  'php mariadb version: ' . implode(' ', $stmt->fetch()) . "\n"       ;
        
        /*** close the database connection ***/
        $dbh = null;

} catch(PDOException $e) {
        echo $e->getMessage() . "\\n"   ;
}
?>
