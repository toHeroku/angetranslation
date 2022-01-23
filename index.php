<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Translation App</title>
	 <style type="text/css">
	 body
	 {
	 	text-align: center;
         background-color:black;

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
<h1 style="color:white;">Translation App</h1>
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
     	</div>
     </form>
 
</body>
</html>
