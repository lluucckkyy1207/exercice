<!DOCTYPE HTML>
<HTML>
<HEAD>
	<TITLE>table</TITLE>
	<META charset="UTF-8">
	<LINK rel="stylesheet" href="dform.css">
</HEAD>
<BODY>
	<CENTER>
	<FORM action="table1.php" method="GET">
	<DIV class="container">
		<DIV class="content"><H1>Modification</H1></DIV><BR>
		<INPUT type="text" name="a" value="<?php echo $_GET['a'] ?>" hidden>
		<INPUT type="text" name="b" value="<?php echo $_GET['b'] ?>" hidden>
		<INPUT type="text" name="list_i" value="<?php echo $_GET['i'] ?>" hidden>
		<DIV class="content"><LABEL for="a">valeur de a: </LABEL><INPUT id="a" type="text" name="new_i">
		<DIV class="content"><LABEL for="b">valeur de b: </LABEL><INPUT id="b" type="text" name="new_a">
		<INPUT type="text" name="list_new_i" value="<?php echo $_GET['list_new_i'] ?>" hidden>
		<INPUT type="text" name="list_new_a" value="<?php echo $_GET['list_new_a'] ?>" hidden>
		<INPUT type= "text" name="line" value="<?php echo $_GET['line'] ?>" hidden>
		<INPUT type= "text" name="refresh" value="1" hidden>
		<DIV class="content"><INPUT class="validate" type=submit value="valider"></DIV>
	</DIV>
	</FORM>
	</CENTER>
</BODY>
</HTML>