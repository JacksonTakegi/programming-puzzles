<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=initiatives', 'root', '');
    // foreach($dbh->query('SELECT * from initiatives') as $row) {
    //     print_r($row);
    // }
    // $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}



// $dbh->query("DELETE FROM initiatives (id)  WHERE id=:id");


$sql = "DELETE FROM initiatives WHERE id=:id";

$query = $dbh->prepare($sql);
$query->bindParam(':id', $_GET["id"]);
$query->execute();




header("Location: /initiative.php");

?>