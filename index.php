<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Translation App</title>
	 <style type="text/css">
	 body
	 {
	 	text-align: center;
         background-color:white;

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
<h1 style="color:black;">Translation App</h1>
   <form style="margin-top:30px; margin-left:17px;" action="" method="POST">
  <?php
   include "conn.php"; // Using database connection file here

if(isset($_POST['submit']))
{       
    $word = filter_input(INPUT_POST,'word');
    $kinyarwanda = filter_input(INPUT_POST, 'kinya');
    $French = filter_input(INPUT_POST, 'igifaransa');
    $English = filter_input(INPUT_POST, 'icyongereza');
    $kiswahili = filter_input(INPUT_POST, 'igiswahili');
	$sql = "INSERT INTO `indimi`(`variable`, `kinyarwanda`, `french`, `english`, `swahili`)  values ('$word','$kinyarwanda' ,'$French' ,'$English' ,'$kiswahili')";
	if ($db->query($sql)){ 
	 //echo "New word is inserted sucessfully";
	}
	else{
	echo "Error: ". $sql ."
	". $db->error;
	}
	// $conn->close();
	mysqli_close($db); // Close connection
	}
?>
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
           <input class="btn" id="submit" type="submit" name="submit" value="Save">
     	</div>
     </form>
	  <div class="containers" style="margin-left:670px; width:70%; margin-top:-430px;">
   <!-- <div class="row">
   <div class="row"> -->
	  <form method="POST" style="width:60%; background_color:black; margin-top:-430px"> 
      <h1 style="margin-top:10px;">Select Word to Translate</h1> 
      <table > 			
	<tr>			
	<td> Choose Variable word you want to translate</td>
	<td><!-- <select name="status" id="status" onchange="sayIt()">
				<option name="gura">V_Gura</option>
				<option name="tuma">V_Rangura</option>
				<option name="rangura">V_Gurisha</option>
				<option name="Gurisha">V_Tuma</option>
				
			</select> -->
            <select name="word" id="val" style="background: #5cb85c; color: white;">
    <option value="0" style="background: #5cb85c; color: #fff;"> Select any word </option>
    <?php
        include "conn.php";  // Using database connection file here
        $records = mysqli_query($db, "SELECT * From indimi");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['id'] ."'>" .$data['variable'] ."</option>";  // displaying data in option menu
        }	
    ?>  
  </select>
			</td>
            <br/>
            <br/>

			                  <td style="margin-left:600px">Translate To </td>
			<td>
				<select name="status" style="background: #5cb85c; color: white;">
			    <option value="0 " style="background: #5cb85c; color: white;">Select any language</option>
				<option value="1" style="background: #5cb85c; color: white;">Kinyarwanda</option>
				<option value="2" style="background: #5cb85c; color: white;">French</option>
				<option value="3" style="background: #5cb85c; color: white;">English</option>
				<option value="4" style="background: #5cb85c; color: white;">Swahili</option>
				
			</select></td>
			
                <br/>
                <br/>
                <br/>
                <td>
                  <button name="translate" id="translate" class="btn" style="color: white;border-color: white;background-color: light; background-color:#4CAF50;height:30px;">Translate</button>
                   </td>
     </tr>

		 <?php 
		 $result=[];
		 if(isset($_POST['translate']))
		 {	
			$result[0] = " ";
			 $language = $_POST['status'];
			 $word = $_POST['word'];
			 if(($language == 0) || ($word == 0))
			 {
				 $result[0] = "choose valid data";

			 }
			 else {
				 
				$query_select_indimi= mysqli_query($db, "SELECT * FROM indimi where id='$word'");
				if(mysqli_num_rows($query_select_indimi) > 0)
				{
					$result[0] = "one element found";

					$data_re = $query_select_indimi->fetch_array();

			if($language == 1)
			{
				$result[0] = $data_re['kinyarwanda'];
			}
			else if ($language == 2)
			{
				$result[0] = $data_re['french'];
			}	else if ($language == 3)
			{
				$result[0] = $data_re['english'];
			}	else if ($language == 4)
			{
				$result[0] = $data_re['swahili'];
			}
			else{
				$result[0]="couldn't find";
			}
				}
				else{
					$result[0] = "no word found";
				}

			 }

			
	
				
			

		
?> 
<br/>
<br/>
  <td><p style="font-size:17px;">Your Translated Result<p></td><td><label></label><b style="font-size:40px;"><?php echo $result[0];?></td><?php
		 }

		 	 ?>
   
        </b>
    
     </tr>

          
                   
</table>
		</form>     
 
</body>
</html>
