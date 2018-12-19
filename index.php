<html>
<head>
	<meta charset="utf-8" />
	<title>Magimix</title>
</head>
<body>
	<h1>Magimix</h1>
	<form action="page.php" method="post">
		<input type="text" name="poids" placeholder="Grammes..." />
 		<br />
 		<br />
		<select name="viande">
 			<option selected="selected" value="selected">Sélectionner le type de viande</option>
 			<option value="boeuf">Boeuf</option>
 			<option value="porc">Porc</option>
 		</select>
 		<br />
 		<br />
		<select name="cuisson"> 
			<option selected="selected" value="selected	">Faites le choix de votre cuisson </option>
		    <option value="bleu">BLEU</option>
		    <option value="point">A POINT</option>
		    <option value="cuit">Bien cuit</option>
		</select>
 		<br />
 		<br />
		<button type="submit">Calculer </button>

		<?php 
		if(isset($_GET['avertissement']) && $_GET['retour'])
		{
			$retour = $_GET['retour'];
			$retour = "<br />Pour cuire votre viande vous aurez besoin de " . $retour . " secondes"; 
			echo $retour;

		} else {
			if(isset($_GET['avertissement']))
			{
				echo "<br /><br />" . $_GET['avertissement'];
			}

		}
		?>
	</form>
</body>
</html>