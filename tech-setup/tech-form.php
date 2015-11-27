<?php 
$ToEmail = 'nico@studioncreations.com'; //ex. admin@scriptgates.com or scriptgates@gmail.com
$EmailSubject = "Client Tech Stack Survey"."\n"; 
$mailheader = "From: ".$_POST["email"]."\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\n";  
$MESSAGE_BODY = "Name: " . $_POST["name"] . "\n"; 
$MESSAGE_BODY .= "Computer OS:   " . ($_POST["computer-os-mac"]) . ($_POST["computer-os-windows"]) . ($_POST["computer-os-linux"]); 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Error!"); 

header("Location: thanks.php");
?>



