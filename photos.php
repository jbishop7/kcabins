<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Kincardine Cabins</title>
    
</head>

<body id = "main" class = "fade">

	<?php include "header.php" ?>



	<div class = "generic-content">

	<?php
		include 'connection.php';
		if ($result = $mysqli -> query("SELECT gallery, picture FROM ssgallery WHERE active = 'yes'")){
			$gal1 = array();
			$gal10 = array();
			$gal11 = array();
			$gal12 = array();
			$gal16 = array();
			$gal2 = array();
			$gal3 = array();
			$gal4 = array();
			$gal5 = array();
			$gal6 = array();
			$gal8 = array();
			$gal9 = array();
			while($row = $result->fetch_row()){
				if ($row[0] == 1){
					array_push($gal1, $row[1]);
				}
				if ($row[0] == 10){
					array_push($gal10, $row[1]);
				}
				if ($row[0] == 11){
					array_push($gal11, $row[1]);
				}
				if ($row[0] == 12){
					array_push($gal12, $row[1]);
				}
				if ($row[0] == 16){
					array_push($gal16, $row[1]);
				}
				if ($row[0] == 2){
					array_push($gal2, $row[1]);
				}
				if ($row[0] == 3){
					array_push($gal3, $row[1]);
				}
				if ($row[0] == 4){
					array_push($gal4, $row[1]);
				}
				if ($row[0] == 5){
					array_push($gal5, $row[1]);
				}
				if ($row[0] == 6){
					array_push($gal6, $row[1]);
				}
				if ($row[0] == 8){
					array_push($gal8, $row[1]);
				}
				if ($row[0] == 9){
					array_push($gal9, $row[1]);
				}
			}
		}

		//now we make the divs for each "gallery"
		$picCounter = 0;
		echo '<div class = "generic-header">Historic</div><div class = "gallery-container">';
		foreach($gal1 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		//gallery 2
		echo '<div class = "generic-header">Cabin 1</div><div class = "gallery-container">';
		foreach($gal2 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		//gallery 3
		echo '<div class = "generic-header">Cabin 2</div><div class = "gallery-container">';
		foreach($gal3 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		//gallery 4
		echo '<div class = "generic-header">Cabin 3</div><div class = "gallery-container">';
		foreach($gal4 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		//gallery 5
		echo '<div class = "generic-header">Cabin 4</div><div class = "gallery-container">';
		foreach($gal5 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		//gallery 6
		echo '<div class = "generic-header">Stone Cottage</div><div class = "gallery-container">';
		foreach($gal6 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		//gallery 16
		echo '<div class = "generic-header">Back Deck</div><div class = "gallery-container">';
		foreach($gal16 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		
		//gallery 8
		echo '<div class = "generic-header">Views</div><div class = "gallery-container">';
		foreach($gal8 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		//gallery 9
		echo '<div class = "generic-header">Garden</div><div class = "gallery-container">';
		foreach($gal9 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		//gallery 10
		echo '<div class = "generic-header">Bathhouse and Outdoor Shower</div><div class = "gallery-container">';
		foreach($gal10 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		//gallery 11
		echo '<div class = "generic-header">Cookhouse</div><div class = "gallery-container">';
		foreach($gal11 as $pic){
			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";

		//gallery 12
		echo '<div class = "generic-header">Coach House</div><div class = "gallery-container">';
		foreach($gal12 as $pic){

			echo '<div class = "gallery-photo" onclick = "openModal('.$picCounter.')"><img class = "gallery-actual-photo" width = "150" height = "150" src="../upimg/'.$pic.'"></div>';
			$picCounter++;
		}
		echo "</div>";



	?>

	</div>


	<div class = "modal" id = "gallery-modal">
		<span class = "close" onclick = "closeModal()">&times;</span>
		<div class = "modal-content-container">
			<span id = "last-photo" onclick = "prevPhoto()">&#10094;</span>
			<span id = "next-photo" onclick = "nextPhoto()">&#10095;</span>
			<img class = "modal-content" id = "gallery-pic" height = "500" width = "1000">
		</div>
	</div>


	<?php include 'footer.php'; ?>

	<script>
		var currentPictureNumber = 0;	//set to 0 cuz why not, it dont matter
		function prevPhoto(){
			currentPictureNumber--;
			let currentPic = document.getElementById("gallery-pic");
			let allPics = document.getElementsByClassName("gallery-actual-photo"); 
			if (currentPictureNumber < 0){
				currentPictureNumber = allPics.length - 1;
			}
			let pictureLink = allPics[currentPictureNumber].src.split('com')[1];
			currentPic.src = `..${pictureLink}`;
		}

		function nextPhoto(){
			currentPictureNumber++;
			let currentPic = document.getElementById("gallery-pic");
			let allPics = document.getElementsByClassName("gallery-actual-photo");
			if(currentPictureNumber > allPics.length - 1){
				currentPictureNumber = 0;
			}
			let pictureLink = allPics[currentPictureNumber].src.split('com')[1];
			currentPic.src = `..${pictureLink}`;
		}

		function openModal(pictureNumber){
			let modal = document.getElementById("gallery-modal");
			let currentPic = document.getElementById("gallery-pic");
			let allPics = document.getElementsByClassName("gallery-actual-photo");
			currentPictureNumber = pictureNumber;
			let pictureLink = allPics[pictureNumber].src.split('com')[1];
			modal.style.display = "block";
			currentPic.src = `..${pictureLink}`;
		}
		function closeModal(){
			let modal = document.getElementById("gallery-modal");
			modal.style.display = "none";
		}
	</script>
</body>



</html>