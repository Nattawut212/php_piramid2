<head>
<title>Bom</title></head>
<body bgcolor=>
<table width=100% bgcolor=pink><tr><td>
<span style="font-size:30px;">Hello</span>
</td></tr></table>
<table width=100% bgcolor=#dddddd><tr>
<td><a href='../myweb.php'>home</a></td>
<td><a href='../multi_form.php'>multiple</a></td>
<td><a href='../friend.php'>friend</a></td>
<td><a href='../me.php'>about us</a></td>
<td><a href="../logout.php">logout</a></td>
</tr></table>
<body>
<?php
 session_start();
 if(!isset($_SESSION["pass"]) ||$_SESSION["pass"] != "yes") {
 header('Location: ../login_page.php');exit;
 }
include ("bb.php");

for($bom=1;$bom<=4;$bom++) {
	for($nut=1;$nut<=4-$bom;$nut++) {
		
	echo(".");
	}
	echo($bom);

	for($nut=2;$nut<=$bom;$nut++){
	echo("**");
	}
	echo($bom);
	echo "<br/>";
}
for($bom=3;$bom>=1;$bom--) {
	for($nut=1;$nut<=4-$bom;$nut++) {
	echo(".");
	}
	echo($bom);
	for($nut=2;$nut<=$bom;$nut++){
	echo("**");
	}
	echo($bom);
	echo "<br/>";
}
include ('myweb_footer.php');
?>