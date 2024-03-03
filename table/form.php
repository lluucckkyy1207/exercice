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
		<DIV class="content"><H1>Saisie des valeurs</H1></DIV><BR>
		<DIV class="content"><LABEL for="a">valeur de a: </LABEL><INPUT id="a" type="text" name="a"></DIV>
		<DIV class="content"><LABEL for="b">valeur de b: </LABEL><INPUT id="b" type="text" name="b"></DIV><BR>
		<INPUT type="text" name="list_i" hidden>
		<INPUT type="text" name="new_i" hidden>
		<INPUT type="text" name="new_a" hidden>
		<INPUT type="text" name="list_new_i" hidden>
		<INPUT type="text" name="list_new_a" hidden>
		<INPUT type="text" name="line" hidden>
		<DIV class="content"><INPUT class="validate" type=submit value="valider"></DIV>
	</DIV>
	</FORM>
	</CENTER>
</BODY>
</HTML>