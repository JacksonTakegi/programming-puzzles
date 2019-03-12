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
$character=$_GET["character"];
$initiativeRoll=$_GET["initiative_roll"];
function create($character, $initiativeRoll, $dbh) {
// insert into initiatives (character_name,initiative_roll) VALUES ($name,3)
$dbh->query("insert into initiatives (character_name, iniative_roll)  VALUES ($character, $initiativeRoll)");


$sql = "INSERT INTO initiatives (character_name, initiative_roll) VALUES (?,?)";
$dbh->prepare($sql)->execute([$character, $initiativeRoll]);


}

create($character, $initiativeRoll, $dbh);

header("Location: /initiative.php");
?>