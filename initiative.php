<?php
session_start();
if (!array_key_exists("Turns", $_SESSION)) {
    $_SESSION["Turns"]=0;
}
if (!array_key_exists("turns", $_GET)) {
    $turns=0;
}
else {$turns=$_GET["turns"];}
$_SESSION['Turns']=$turns;

// $_SESSION['Turns']=$_GET['turns']??0;

echo "It is currently turn ".($_SESSION['Turns']+1);
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

function read($dbh) {
   // echo json_encode( $dbh->query('SELECT * from initiatives'));
    foreach($dbh->query('SELECT * from initiatives ORDER BY initiative_roll desc') as $row) {
        // echo(json_encode($row)."<br>");
        echo "<div>".$row["character_name"]." ".$row["initiative_roll"]." ".'<a href="/delete.php?id='.$row["id"].'">Delete</a>'."</div>";
        
    }

}


read($dbh);
?>


<!-- Make a turn tracker on everybody's name, and what turn it is at the top of the page -->



<form action="./create.php"><input type="text" name="character" placeholder="Character"><input type="text" name="initiative_roll" placeholder="Initiative Roll"><button type="submit">create</button></form>
<?php
echo "<a href=/initiative.php?turns=".($turns+1).">Next Character</a>";
?>
