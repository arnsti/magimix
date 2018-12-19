<?php 
	if($_POST['poids'] !== "")
	{
		$poids = $_POST['poids'];
		$poids = intval($poids);

		if($_POST['viande'] !== "selected")
		{
			$choixViande = $_POST['viande'];

			if($_POST['cuisson'] !== "selected")
			{
				$choixCuisson = $_POST['cuisson'];

				// Si c'est du boeuf
				if($choixViande === "boeuf")
				{
					if($choixCuisson === "bleu")
					{
						$retour = calculBoeuf($poids, $choixCuisson);
					}
					else if($choixCuisson === "point")
					{
						$retour = calculBoeuf($poids, $choixCuisson);
					}
					else
					{
						$retour = calculBoeuf($poids, $choixCuisson);
					}
				}
				// Sinon c'est du porc
				else
				{
					if($choixCuisson === "bleu")
					{
						$retour = calculPorc($poids, $choixCuisson);
					}
					else if($choixCuisson === "point")
					{
						$retour = calculPorc($poids, $choixCuisson);	
					}
					else
					{
						$retour = calculPorc($poids, $choixCuisson);
					}
				}

			}
			else 
			{
				$avertissement = "Merci d'indiquer le type de viande";
			}
		}
		else 
		{

			$avertissement = "Merci d'indiquer le type de viande";
		}
	} 
	else 
	{
		$avertissement = "Merci d'indiquer le grammage"; 
	}
	if(isset($avertissement))
	{
			echo $avertissement;
	}

function calculBoeuf($poids, $cuisson)
{
	$gramme = 500; 

	if($cuisson === "bleu")
	{
		$temps = 10; 

		$calcul = ($temps * $poids / $gramme) * 60; 

	}
	else if ($cuisson === "point")
	{
		$temps = 17; 

		$calcul = ($temps * $poids / $gramme) * 60;  
	}
	else
	{
		$temps = 25; 

		$calcul = ($temps * $poids / $gramme) * 60;  
	}

		return $calcul;

}

function calculPorc($poids, $cuisson)
{
	$gramme = 400; 	

	if($cuisson === "bleu")
	{
		$temps = 15; 

		$calcul = ($temps * $poids / $gramme) * 60; 

	}
	else if ($cuisson === "point")
	{
		$temps = 25; 

		$calcul = ($temps * $poids / $gramme) * 60; 
	}
	else
	{ 
		$temps = 40; 

		$calcul = ($temps * $poids / $gramme) * 60; 


	}

	return $calcul;

}


header('Location: index.php?retour='.$retour.'&avertissement='.$avertissement);
?>