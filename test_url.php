<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 6.5 URL Server</title>
    </head>
    <body>
        <?php
        // Test the input date parameters (format ISO8601 --> YYYY-MM-DD)
        if ((isset($_REQUEST['week'])) && (!empty($_REQUEST['week'])))
        {
            $weekParam= $_REQUEST['week'];
        }
        else
        {
            exit ("'week' parameter is missing");
        }
        echo ("PHP server script: ".__FILE__);
        ?>
        <p>Received parameters on Server:</p>
        <p>test_url.php?week=<?= $weekParam ?></p>
    </body>
</html>