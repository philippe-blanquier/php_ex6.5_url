<!DOCTYPE html>
<html lang="fr">
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 6.5 URL Client</title>
    </head>
    <body >
        <!--
            Faire une page index.php. 
            Tester sur cette page que tous les paramètres de cette URL existent  
            et les afficher : index.php?language=PHP&server=LAMP
        -->
        <form action="test_url.php" methode="get">
            <label for="week">Nom :</label>
			<input type="integer" name="week" placeholder="12">
            <input type="submit" value="OK">
        </form>
    </body>
</html>