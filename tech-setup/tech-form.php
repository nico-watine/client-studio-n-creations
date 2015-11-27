<?php 
$ToEmail = 'nico@studioncreations.com'; //ex. admin@scriptgates.com or scriptgates@gmail.com
$EmailSubject = "Client Tech Stack Survey"."\n"; 
$mailheader = "From: ".$_POST["email"]."\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\n";  
$MESSAGE_BODY = "Name::" . $_POST["name"] . "\n"; 
$MESSAGE_BODY .= "Computer OS::" . "\n" . ($_POST["computer-os-mac"]) . "\n" . ($_POST["computer-os-windows"]) . "\n" . ($_POST["computer-os-linux"]) . "\n"; 
$MESSAGE_BODY .= "Windows Version::" . "\n" . $_POST["windows-xp"] . "\n" . $_POST["windows-vista"] . "\n" . $_POST["windows-7"] . "\n" . $_POST["windows-8"] . "\n" . $_POST["windows-8-1"] . "\n" . $_POST["windows-10"] . "\n" . $_POST["windows-unsure"] . "\n";
$MESSAGE_BODY .= "Mac OS X Version::" . "\n" . $_POST["snow-leopard"] . "\n" . $_POST["lion"] . "\n" . $_POST["mountain-lion"] . "\n" . $_POST["mavericks"] . "\n" . $_POST["yosemite"] . "\n" . $_POST["el-capitan"] . "\n" . $_POST["mac-unsure"] . "\n";
$MESSAGE_BODY .= "Linux Distro::" . "\n" . ($_POST["ubuntu"]) . "\n" . ($_POST["fedora"]) . "\n" . ($_POST["linux-other"]) . "\n"; 
$MESSAGE_BODY .= "Web Browsers::" . "\n" . ($_POST["chrome"]) . "\n" . ($_POST["safari"]) . "\n" . ($_POST["internet-explorer"]) . "\n" . ($_POST["firefox"]) . "\n" . ($_POST["opera"]) . "\n" . $_POST["microsoft-edge"] . "\n" . ($_POST["browser-unsure"]); 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Error!"); 

header("Location: thanks.php");
?>



