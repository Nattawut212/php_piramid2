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

 include ("bb.php");?>
<?php
for($bom=1;$bom<=5;$bom++) {
	for($nut=2;$nut<=$bom;$nut++) {
	echo("..");
	}
	for($nut=11;$nut>=11;$nut--){
		echo($nut-$bom-$bom);
	}
	for($nut=10;$nut>=6+$bom;$nut--){
		echo($nut-$bom-$bom);
	}

	for($nut=5;$nut>=1+$bom;$nut--){
		echo($nut-$bom);
	}



	echo "<br/>";
}
include ('myweb_footer.php');
?>