<!DOCTYPE html>
<html>
	<head>
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400&lang=en" rel="stylesheet" type="text/css">
	<style>
	#header {
		font-family: 'Open Sans',arial;
	    background-color:#008B8B;
	    color:white;
	    text-align:center;
	    padding:5px;
	}
	#nav {
		font-family: 'Open Sans',arial;
	    line-height:30px;
	    background-color:#eeeeee;
	    height:300px;
	    width:100px;
	    float:left;
	    padding:5px; 
	}
	#section {
		font-family: 'Open Sans',arial;
	    width:350px;
	    float:left;
	    padding:10px; 
	}
	#footer {
		font-family: 'Open Sans',arial;
	    background-color:black;
	    color:white;
	    clear:both;
	    text-align:center;
	    padding:5px; 
	}
	ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
    	background-color: #f1f1f1;
	}
	li a{
		display: block;
    	width: 100px;
    	color: #000;
    	text-decoration: none;
	}
	li a.active {
	    background-color: #4CAF50;
	    color: white;
	}
	li a:hover:not(.active) {
    	background-color: #555;
    	color: white;
	}
	</style>
		<title>Admin Legitz</title>
	</head>
	<body>
	<div id="header">
		<h1>Legitz Dashboard</h1>
	</div>

	<div id="nav">
	<ul>
		<li><a href="admin">Dashboard</a></li>
		<li><a href="item">Item</a></li>
	    <li><a href="#news">Account</a></li>
     	<li><a href="#contact">Transaction</a></li>
		<li><a href="#about">About</a></li>
	</ul>
	</div>

	<div id="section">
		<h1>London</h1>
		<p>London is the capital city of England. It is the most populous city in the United Kingdom,
		with a metropolitan area of over 13 million inhabitants.</p>
		<p>Standing on the River Thames, London has been a major settlement for two millennia,
		its history going back to its founding by the Romans, who named it Londinium.</p>
	</div>

	<div id="footer">
		Copyright © W3Schools.com
	</div>
	</body>
</html>