<?php
  $server = "localhost";
  $user ="root";
  $pass ="";
  $db = "words";

  $conn = mysqli_connect($server, $user, $pass,$db);
//   $sql = "INSERT INTO word (Kinyarwanda,French,English,Kiswahili)
// VALUES ('Murakoze', 'Merci Bcp', 'Thank you','Asante Sana')";

if ($conn) {
 //echo "New record created successfully";
}
// if($conn){
// 	  //echo "Connected"."<br/>";
//   }
else{
	  echo "Not connected".mysqli_error($conn);
  }
?>