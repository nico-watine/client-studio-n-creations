<?php 
$ToEmail = 'nico@studioncreations.com'; //ex. admin@scriptgates.com or scriptgates@gmail.com
$EmailSubject = "Client Tech Stack Survey"."\n"; 
$mailheader = "From: ".$_POST["email"]."\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\n";  
$MESSAGE_BODY = "Name::" . $_POST["name"] . "\n"; 
$MESSAGE_BODY .= "Computer OS::" . "\n" . ($_POST["computer-os-mac"]) . ($_POST["computer-os-windows"]) . ($_POST["computer-os-linux"]) . "\n"; 
$MESSAGE_BODY .= "Windows Version::" . "\n" . $_POST["windows-xp"] . $_POST["windows-vista"] . $_POST["windows-7"] . $_POST["windows-8"] . $_POST["windows-8-1"] . $_POST["windows-10"] . $_POST["windows-unsure"] . "\n";
$MESSAGE_BODY .= "Mac OS X Version::" . "\n" . $_POST["snow-leopard"] . $_POST["lion"] . $_POST["mountain-lion"] . $_POST["mavericks"] . $_POST["yosemite"] . $_POST["el-capitan"] . $_POST["mac-unsure"] . "\n";
$MESSAGE_BODY .= "Linux Distro::" . "\n" . ($_POST["ubuntu"]) . ($_POST["fedora"]) . ($_POST["linux-other"]) . "\n"; 
$MESSAGE_BODY .= "Web Browsers::" . "\n" . ($_POST["chrome"]) . ($_POST["safari"]) . ($_POST["internet-explorer"]) . ($_POST["firefox"]) . ($_POST["opera"]) . $_POST["microsoft-edge"] . ($_POST["browser-unsure"]); 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Error!"); 

header("Location: thanks.php");
?>



