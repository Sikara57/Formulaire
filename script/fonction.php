<?php

if(isset($_POST['nb_enfant']) && $_POST['nb_enfant']!='') $nb_enfant=$_POST['nb_enfant'];

if(isset($_POST['nb_cred']) && $_POST['nb_cred']!='') $nb_cred=$_POST['nb_cred'];

$enfants=array();
/*$enfant=array(
	'Nom'=>'',
	'Naissance'=>'',
	'Prénom'=>''
);*/

function verification(type,champ)
{
	switch (type)
	case "texte":
	{
		if(is_string(champ)) return true;
		break;
	}
	
	case "nombre":
	{
		if(is_numeric(champ))return true;
		break;
	}
	
	default:
	{
		echo 'type inconnu';
	}
}

function verif_enfant()
{
	for($i=1;$i<=$nb_enfant;$i++)
	{
		$enfants[$i]=$enfant[];
	}

}


?>