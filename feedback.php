<?php
 
//Check whether the submission is made
if(isset($_POST["hidSubmit"])){

//msg body
$txtMsg = "<html>
<head></head>
<body>

<table>
	<tr>
		<td>Phone : ".$_POST["phone"]."</td>
	</tr>
	
	<tr>
		<td>Name:".$_POST["fname"]."</td>
	</tr>
        
	<tr>
		<td>Email : ".$_POST["email"]."</td>
	</tr>
	<tr>
		<td>Name of Stylist : ".$_POST["name"]."</td>
	</tr>
	<tr>
	<td>How did we provide the service? : ".$_POST["service"]."</td> 
	</tr>
	<tr>
	<td>The Cleanliness and Hygiene : ".$_POST["clean"]."</td> 
	</tr>
	<tr>
	<td>The Ambience : ".$_POST["ambience"]."</td> 
	</tr>
	<tr>
	<td>Overall Rating : ".$_POST["overall"]."</td> 
	</tr>
</table>
</body>
</html>";

     
//Declarate the necessary variables
 $mail_to   = "kvinnaaindia@kvinnaaindia.com";
 $mail_from = $_POST["email"];
 $mail_sub  = "feedback Form Details";
 $mail_mesg = $txtMsg;
 
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";




//Check for success/failure of delivery 
if(mail($mail_to,$mail_sub,$mail_mesg,$headers))
echo "<center><span class='textred' align='center'><b>E-mail has been sent successfully from $mail_sub to $mail_to</b></span></center>";
else
echo "<center><span class='textred' align='center'><b>Failed to send the E-mail from $mail_sub to $mail_to</b></span></center>";
}

echo ("<meta http-equiv='refresh' content='2;url=http://kvinnaaindia.com/'>");
?>