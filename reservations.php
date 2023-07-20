<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.cdnfonts.com/css/mauikea-demo');
    </style>
    <link rel="stylesheet" href="./Assets/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Réservations</title>
</head>

<body>

<?php
?>
    
	<h1>Réservations</h1>
	<form>
		<label for="date">Date :</label>
		<input type="date" id="date" name="date" required><br>

		<select id="hours" name="hours">
			<label for="hours">Heure :</label>
			<option value="">--Choisir une heure--</option>
			<option value="">10h30</option>
			<option value="">11h05</option>
			<option value="">11h50</option>
			<option value="">12h30</option>
			<option value="">13h10</option>
			<option value="">13h50</option>
			<option value="">15h30</option>
			<option value="">16h15</option>
			<option value="">17h00</option>
			<option value="">17h45</option>
			<option value="">18h30</option>
		</select>

		<select id="service" name="service">
			<label for="service">Service :</label>
			<option value="">--Choisir un service--</option>
			<option value="coupeAdulte">Coupe adulte</option>
			<option value="coupeEtudiant">Coupe étudiant -18 ans</option>
			<option value="coupeEnfant">Coupe enfant -11 ans</option>
            <option value="coupeBarbe">Coupe + Barbe</option>
            <option value="zéroTondeuse">Rasage zéro à la tondeuse</option>
            <option value="zéroLame">Rasage zéro à la lame</option>
            <option value="barbeTaille">Barbe taillé</option>
            <option value="ContoursBarbe">Contours de barbe</option>
            <option value="Contours">Contours</option>
            <option value="barbeEpile">Barbe + épilation</option>
		</select>
		<br>

		<button type="submit" class="btn">RESERVER</button> 
	</form>

<?php
    include("./fonctions/footer.php");
?>
    
    <script src="./index.js"></script>

</body>