<?php 
$ToEmail = 'nico@studioncreations.com'; //ex. admin@scriptgates.com or scriptgates@gmail.com
$EmailSubject = "Client Tech Stack Survey"."\n"; 
$mailheader = "From: ".$_POST["email"]."\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\n";  
$MESSAGE_BODY = "Name: " . $_POST["name"] . "\n"; 
$MESSAGE_BODY .= "Computer OS:   " . ($_POST["computer-os-mac"]) . ($_POST["computer-os-windows"]) . ($_POST["computer-os-linux"]) . "\n"; 
$MESSAGE_BODY .= "Windows Version:   " . $_POST["windows-xp"] . $_POST["windows-vista"] . $_POST["windows-7"] . $_POST["windows-8"] . $_POST["windows-8-1"] . $_POST["windows-10"] . $_POST["windows-unsure"];
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Error!"); 

header("Location: thanks.php");
?>



