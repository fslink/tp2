<?php 
/*
	
*/
function ctrlGetPost($method, $varName, $type){

	$data = null;
	$ctrlResult = false;
	// Vérifie la méthode
	if($method == 'get'){
		if (filter_has_var(INPUT_GET, $varName)){
			// Affectation de varName
			$data = $_GET[$varName];

			//Controle du Type
			if(ctrlType($data, $type)){
				//Enregistrement dans le fichier controle_input
				$controle_input = fopen('./controle_input.php', 'a+');
				//Sécurise les données et les insère
				fputs($controle_input,date('l jS \of F Y h:i:s A') . ' : ' . htmlspecialchars($data) . "\n");
				fclose($controle_input);
				echo $varName . " a été ajouté";
				$ctrlResult = true;

			} else {
				echo "Mauvais type de données";
				$ctrlResult = false;
			}
		}

	} elseif ($method == 'post') {
		if (filter_has_var(INPUT_POST, $varName)) {
			// Affectation de varName
			$data = $_POST[$varName];

			//Controle du Type
			if(ctrlType($data, $type)){
				//Enregistrement dans le fichier controle_input
				$controle_input = fopen('./controle_input.php', 'a+');
				fputs($controle_input, date('l jS \of F Y h:i:s A') . ' : ' . htmlspecialchars($data) . "\n");
				fclose($controle_input);
				echo $varName . " a été ajouté";
				$ctrlResult = true;	

			} else {
				echo "Mauvais type de données";
				$ctrlResult = false;
			}
		}

	} else {
		$ctrlResult = false;
	}

	return $ctrlResult;
}

// Vérifie le type de la variable
function ctrlType($varCtrl, $type){
	$result = false;
	//contrôle de type de données
	switch ($type) {
		case 'INT':
			if(filter_var($varCtrl, FILTER_VALIDATE_INT)) {
				$result = true;
			}
			break;
		case 'FLOAT':
			if (filter_var($varCtrl, FILTER_VALIDATE_FLOAT)) {
				$result = true;
			}
			break;
		case 'BOOL':
			if (filter_var($varCtrl, FILTER_VALIDATE_BOOLEAN)) {
				$result = true;
			}
			break;
		case 'HTML':
			$varCtrl != strip_tags($varCtrl) ? $result = true: $result = false;
			break;

		case 'STRING':
			if (is_string($varCtrl)) {
				$result = true;
			}
			break;

		default:
			$result = false;
			break;
	}

	return $result;
}

if(isset($_GET['method_trans'])){
	ctrlGetPost($_GET['method_trans'], 'client_name', 'STRING');
	ctrlGetPost($_GET['method_trans'], 'client_html', 'HTML');
	ctrlGetPost($_GET['method_trans'], 'client_age', 'INT');
	ctrlGetPost($_GET['method_trans'], 'client_taille', 'FLOAT');
	ctrlGetPost($_GET['method_trans'], 'client_genre', 'BOOL');

} elseif(isset($_POST['method_trans'])) {
	ctrlGetPost($_POST['method_trans'], 'client_name', 'STRING');
	ctrlGetPost($_POST['method_trans'], 'client_html', 'HTML');
	ctrlGetPost($_POST['method_trans'], 'client_age', 'INT');
	ctrlGetPost($_POST['method_trans'], 'client_taille', 'FLOAT');
	ctrlGetPost($_POST['method_trans'], 'client_genre', 'BOOL');

} else {
	echo "BIG ERROR FATAL FATAL!!!";
}

 ?>
