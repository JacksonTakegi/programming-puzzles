<?php
// $variable="this is a string not a number, or a booleeans, nor is at in array, it might be an object, but I doubt it";
// echo true."<br>";

// echo 1+1;
// $something=$variable."anything else";
// echo $something."<br>";
// echo 10%3;
// if (10%2!=0) {
//     echo "it's odd";
// }else{echo "it's not odd and therefore is normal";}
// echo "<br>";
// $sith=0;
// while ( $sith<= 10) {
//     echo $sith;
//     $sith++;
//     echo "<br>";
// }

// $secondTry=0;
// while ($secondTry<=100) {

// if ($secondTry==0) {
//     echo "0";
//         }        

//     elseif ($secondTry%15==0 ) {
//         echo "fizzbuzz";
//     }elseif ($secondTry%5==0 ) {
//         echo "buzz";
//     }elseif ($secondTry%3==0 ) {
//         echo "fizz";
//     }else
//     {echo $secondTry;}
//     echo "<br>";
//     $secondTry++;
// }

// function anything($inputs=1,$dollarsign=3){
// return 2*$inputs*$dollarsign;
// }
// anything();


// $anything=[
//     "something1" => "a",
//     "b",
//     "c"];
// // echo $anything["something1"];
// // $anything[-2]="d";
// // $anything[-1]="e";

// // var_dump($anything);


// foreach ($anything as $key => $value) {
//    echo $value;
// }


// echo json_encode($anything);

// $variable='{"something1":"a","0":"b","1":"c"}';
// $variable=json_decode($variable);


// echo json_encode(explode("t", "buttslol"));

// $userInput = $_GET["a"];
// echo $userInput;


//echo "buttslol";


// $arrayngatang=
// [ 
//     "person1" => [0,0,0], 
//     "person2" => [1,0,0], 
//     "person3" => [2,0,0] 
// ];
// echo json_encode( $arrayngatang["person1"][0] );


// $array=pleaseBeRight($_GET["base"],$_GET["power"]);
// echo json_encode($array) ;

// $forEachAnswer=0;
// foreach ($array as $key => $value) {

//     $forEachAnswer=$forEachAnswer+$value;
// }
// echo $forEachAnswer;


// // This is wrong
// class Person(args){
//     $this->money = $args->money;
//     $this->name = $name;

//     function addMoney($num){
//         $this->money += $num;
//     }

// }

// $john = new Person(0,"john");

// $john->addMoney(500);

// echo $john->money;


// function pleaseBeRight($base=3, $power=4) {
//     if ($power==0) {
//         return "1";
//     }
//     $loops=0;
//     $answer=1;
//     $array=[];
//     while ($loops<$power) {

//         $answer=$answer*$base;


//         $loops++;

//         $array[]=$answer;
//     }    
//     return $array;
// }


// function bouncingBall($h, $bounce, $window) {
//     if ($h<=$window) {
//            return "-1";
//        }   
//     if ($bounce<=0) {
//          return "-1";
//      } 
//     if ($h<=0) {
//          return "-1";
//      }

// }


// echo bouncingBall(0,.66,1.5);


// $dna = file_get_contents('./file.txt');
// $exploDna=str_split($dna);

// $A=0;
// $C=0;
// $G=0;
// $T=0;
// $answer = ["A"=>0,
// ];
// foreach ($exploDna as $key => $value) {
//     $answser[$value]++;
// //     if ($value=="A") {
// //     $A++;
// // }
// //         elseif ($value=="C") {
// //         $C++;
// //     }
// //         elseif ($value=="G") {
// //         $G++;   
// //         }
// //         elseif ($value=="T")
// //              {$T++;}
// }
// echo $A." ".$C." ".$G." ".$T;

// $dna = file_get_contents('./buttslol.txt');
// $exploDna=str_split($dna);
// $rna="";
// foreach ($exploDna as $key => $value) {
//     if ($value=="T") {
//         $rna="A".$rna;
//         }
//         elseif ($value=="A") {
//             $rna="T".$rna;
//         }
//         elseif ($value=="C") {
//             $rna="G".$rna;
//         }
//         elseif ($value=="G") {
//             $rna="C".$rna;
//         }
// }
// echo $rna;


// $dna=file_get_contents('./buttslol.txt');
// $exploDna=explode("\r\n", $dna);
// $exploDna0=str_split($exploDna[0]);
// $exploDna1=str_split($exploDna[1]);
// $oops=0;
// foreach ($exploDna0 as $key => $value) {
//     if ($exploDna1[$key]!=$value) {
//         $oops++;
//     }
// }
// echo $oops;

// try {
//     $dbh = new PDO('mysql:host=localhost;dbname=initiatives', 'root', '');
//     // foreach($dbh->query('SELECT * from initiatives') as $row) {
//     //     print_r($row);
//     // }
//     // $dbh = null;
// } catch (PDOException $e) {
//     print "Error!: " . $e->getMessage() . "<br/>";
//     die();
// }

// function read($dbh) {
//    // echo json_encode( $dbh->query('SELECT * from initiatives'));
//     foreach($dbh->query('SELECT * from initiatives') as $row) {
//         // echo(json_encode($row)."<br>");
//         echo "<div>".$row["character_name"]." ".$row["initiative_roll"]."</div>";
//     }

// }
// function delete() {}

// read($dbh);
//$newNumber = 0;
//$answer = 0;
//$array = [1, 1];
//while ($newNumber <= 4000000) {
//    $newNumber = $array[count($array) - 1] + $array[count($array) - 2];
//    if ($newNumber % 2 == 0) {
//        $answer = $answer + $newNumber;
//
//
//    }
//    $array[] = $newNumber;
//
//}
//
//echo $answer;
//$numbaOne = 999;
//$numbaTwo = 999;
//$largestNumber = 0;
//while ($numbaOne >= 100) {
//    $cupcake = $numbaOne * $numbaTwo;
//
//    while ($numbaTwo >= 100) {
//        $cupcake = $numbaOne * $numbaTwo;
//        if (strrev($cupcake) == $cupcake&&$cupcake>$largestNumber) {
//            $largestNumber=$cupcake;
//            $n1=$numbaOne;
//            $n2=$numbaTwo;
//        }
//        $numbaTwo--;
//    }
//    $numbaTwo = 999;
//    $numbaOne--;
//
//}
//echo $n1." ".$n2." ".$largestNumber;
$n=1;
$s=0;
while ($n <=100){
    $s=$s+$n**2;
    $n++;
}
$b=0;
$v=1;
while ($v<=100){
    $b=$b+$v;
    $v++;
}
$b=$b**2;
echo $b-$s;


?>


<!-- // <div> anything you want</div>
// erftgyhj 
// <img src="">
 --><!-- // <form><input type="text" name="base"><input type="text" name="power"><button type="submit">send</button></form> -->


<!-- <form action="./create.php"><input type="text" name="character" placeholder="Character"><input type="text" name="initiative_roll" placeholder="Initiative Roll"><button type="submit">create</button></form>
 -->