<!DOCTYPE HTML>
<HTML>
<HEAD>
	<TITLE></TITLE>
	<META charset="UTF-8">
	<LINK rel="stylesheet" href="dtable.css">
</HEAD>
<BODY>
	<CENTER>
	<DIV class="urlnewTable">
	<A href="http://www.server.mg/table/form.php">Editer un nouveau table</A>
	</DIV>
	<H1>Table de Multiplication</H1>
	<DIV class="container">
<?php
	require_once('Table.php');

	/// Données
	$table = new Table($_GET['a'], $_GET['b']);

	// Affectation des valeurs
	$table->setLineToDel(explode('-', $_GET['line']));			// Tableau contenant les lignes supprimées
	$table->set_iModified(explode('-', $_GET['list_new_i']));	// tableau contenant les valeurs des i modifiées (1 <= i <= b)
	$table->set_aModified(explode('-', $_GET['list_new_a']));	// tableau contenant les valeurs des a modifiées
	$table->add_iModified($_GET['new_i']);		// Ajout du dernier i modifiée au tableau des valeurs des i modifiées
	$table->add_aModified($_GET['new_a']);		// Ajout du dernier a modifiée au tableau des valeurs des i modifiées
	$table->setLineModified(explode('-', $_GET['list_i']));		// Tableau contenant les lignes modifié
	$table->norepeatLineModified();

	$list_new_i = $_GET['list_new_i'];
	$list_new_a = $_GET['list_new_a'];

	$list_new_i .= "-".$_GET['new_i'];
	$list_new_a .= "-".$_GET['new_a'];

	// Rafraichir la page après modification
	if(isset($_GET['refresh'])){
		header("Location: http://www.server.mg/table/table1.php?a=".$table->get_a()."&b=".$table->get_b()."&list_i=".$_GET['list_i']."&new_i=".$_GET['new_i']."&new_a=".$_GET['new_a']."&list_new_i=".$list_new_i."&list_new_a=".$list_new_a."&line=".$_GET['line']);
	}
	echo "<TABLE>";

	$table->setLineIndex(0);
	for($i = 1; $i <= $table->get_b(); $i++){
		if(!in_array($i, $table->getLineToDel())){	// Si i n'appartient pas à liste des lignes à supprimer du tableau
			if(in_array($i, $table->getLineModified())){	// Si i appartient à la ligne de la table à changer
				foreach($table->getLineModified() as $key => $value){
					if($i == $value){
						$table->set_n1($table->get_iModified()[$key]);
						$table->set_n2($table->get_aModified()[$key]);
					}
				}
			}
			else{	// Si i n'appartient pas à la ligne de la table à changer
				$table->set_n1($i);
				$table->set_n2($table->get_a());
			}

			$table->incrementLineIndex();	// Incrementer l'index du ligne
			if($table->is_pair($table->getLineIndex())){	// si l'index de ligne est paire
				$table->setLineColor("#ADD8E6");	// la couleur de la ligne est bleu
			}
			else{	// Sinon
				$table->setLineColor("#90EE90");	// la couleur de la ligne est vert
			}

			$table->set_res($table->get_n1() * $table->get_n2());	// Caluler le résultat ( res = n1 * n2 )

			/* Affichage de la ligne de la table
				Format:
				| i | a | Modifier | Supprimer |
			*/
			echo "<TR bgcolor=\"".$table->getLineColor()."\">
					<TD class=\"n1\">".$table->get_n1()."</TD>
					<TD class=\"n2\">".$table->get_n2()."</TD>
					<TD class=\"result\">".$table->get_res()."</TD>

					<FORM action=\"modify.php\" method=\"GET\">
					    <INPUT type=\"text\" name=\"a\" value=\"".$table->get_a()."\" hidden>
						<INPUT type=\"text\" name=\"b\" value=\"".$table->get_b()."\" hidden>
						<INPUT type=\"text\" name=\"list_new_i\" value=\"".$_GET['list_new_i']."\" hidden>
						<INPUT type=\"text\" name=\"list_new_a\" value=\"".$_GET['list_new_a']."\" hidden>
						<INPUT type=\"text\" name=\"line\" value=\"".$_GET['line']."\" hidden>
						<INPUT type=\"text\" name=\"i\" value=\"".$_GET['list_i']."-$i\" hidden>
						<TD><BUTTON class=\"modify\" type=\"submit\">Modifier</BUTTON></TD>
					</FORM>

					<TD class=\"delete\"><A href=\"http://www.server.mg/table/table1.php?a=".$table->get_a()."&b=".$table->get_b()."&list_i=".$_GET['list_i']."&new_i=".$_GET['new_i']."&new_a=".$_GET['new_a']."&list_new_i=".$_GET['list_new_i']."&list_new_a=".$_GET['list_new_a']."&line=".$_GET['line']."-".$i."\"\">Supprimer</A></TD>
				</TR>";
		}
	}

	echo "</TABLE>";
?>
	</DIV>
	</CENTER>
</BODY>
</HTML>