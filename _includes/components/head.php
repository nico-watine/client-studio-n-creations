<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	{{ site.start_comment }}<link rel="preconnect" href="http://cdn.studioncreations.com">{{ site.end_comment }}
	<title>Tech Setup Survey</title>
	<meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="http://cdn.studioncreations.com<?php autoVer('/css/core.css'); ?>" />
	<link rel="stylesheet" href="{{ site.cdn_url }}<?php autoVer('/css/pages.css'); ?>" />
</head>