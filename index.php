<?php
$tab = ["img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", "img/lapins.jpg", 
"img/lionne.jpg", "img/ours.jpg", "img/ane.jpg", "img/chat.jpg", "img/chien.jpg", "img/lama.jpg", 
"img/lapins.jpg", "img/lionne.jpg", "img/ours.jpg"];
$dos = 'img/dos.png'; // On définie l'image de dos
shuffle($tab);

if(isset($_GET["pseudo"], $_GET["min"], $_GET["sec"]) && gettype($_GET["pseudo"]) == "string" && gettype($_GET["min"]) == "string" && gettype($_GET["sec"]) == "string"){
	$victoire = true;
}
else{
	$victoire = false;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Jeux-des-paires</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Kumar+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript">
		var tab = [<?php foreach ($tab as $casetabimg=>$image){
			echo "'$image'";
				if($casetabimg!=13){
				echo",";
				}
			}
        ?>];
	</script>

	<script type="text/javascript">

	
	</script>
</head>

	<body>
		<div id="titre">
		<h1>JEU DES PAIRES</h1>
		</div>
		<p>Règles du jeu: Afficher toutes les paires pour gagner</p>
		<p>Vous avez trouvé <span id="paires">0</span> paires cachées</p>
		<span id="chronotime">00:00</span>
		
			
		<div id="photo"> 
		<?php
			if($victoire == true){
			echo "<h2>Vous avez gagné, recommencer : <a id='lien' href='./index.php'>RECOMMENCER</a></h2>";
			}
			else{
				for($i=0; $i <= 13; $i++) {
					echo '<img src="img/dos.png" class="photo" onclick="choisir('.$i.')" draggable="false">';
				}
			}
		?>
		</div>

		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>