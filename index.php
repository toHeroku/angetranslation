<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Translation App</title>
	 <style type="text/css">
	 body
	 {
	 	

	 } 	
     form{
      background-color:grey; 
      background-color:#f2f2f2;
      width:37%;
      height:30%;
      border-radius:5px;
      border:solid 50px #f2f2f2;
      position:relative;
    }
    .container{
        margin-left:130px;

    }
    .btn{
        background-color:#4CAF50;
        color:white;
        border:none;
        border-radius:4px;
        cursor:pointer;
        height:40px;
        font-size:13px;
        font-weight:13px;
    }
    .btn:hover{
        background-color:#45a049;
    }
	 </style>
</head>
<body>
<h1 >Translation App</h1>
<div>
<?php
        $word = filter_input(INPUT_POST,'word');
        $kinyarwanda = filter_input(INPUT_POST, 'kinya');
        $French = filter_input(INPUT_POST, 'igifaransa');
        $English = filter_input(INPUT_POST, 'icyongereza');
        $kiswahili = filter_input(INPUT_POST, 'igiswahili');
        
         
$server = "localhost";
$username = "root";
$password = "";
$dbname = "guhindura";
// Create connection
$conn = new mysqli ($server, $username, $password, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO `indimi`(`variable`, `kinyarwanda`, `french`, `english`, `swahili`)  values ('$word','$kinyarwanda' ,'$French' ,'$English' ,'$kiswahili')";
if ($conn->query($sql)){ 
// echo "New word is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
// $conn->close();
mysqli_close($conn); // Close connection
}


?>

</div>
 <br/>
 <br/>
 <br/>
		
     <form style="margin-top:30px; margin-left:17px;" action="" method="post">
     	<div class="container" id="container">
     		<h1> Register a V_Word</h1>
             <br/>
			 <label for="word"> V_Word</label> 
			 <input style="margin-left:45px; "type="text" name="word" id="word">
             <br/><br/>
           Kinyarwanda<input style="margin-left:1px;" type="text" name="kinya" required>
           <br/>
           <br/>
		   French<input type="text" style="margin-left:42px; "name="igifaransa" required>
           <br/><br/>
           English<input  style="margin-left:40px; "type="text" name="icyongereza" required>
<br/><br/>
           Kiswahili<input style="margin-left:28px; " type="text" name="igiswahili" required>
           <br/><br/>



           <input class="btn" id="btn" type="submit" name="create" value="Save">
		   <!-- <button name="display" value="display" class="display">Display</button>
                <input class="" type="text" name="var"  placeholder="enter the word to search"> -->
		</div>
      </form>
</body>
</html>
