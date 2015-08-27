<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>
    <h1>Din film/serie har blitt lagt til!</h1>
    <?php
        $tittel = $POST["tittel"];
        $beskrivelse = $POST["beskrivelse"];
        $regi = $POST["regi"];

        $connection = new mysqli('localhost', 'root', '', 'watchlist');
		if($connection->connect_error) die($connection->connect_error);
		$query = "INSERT INTO `film` (`id`, `tittel`, `beskrivelse`, `regi`)
        VALUES (NULL, '$tittel', '$beskrivelse', '$regi')";
		$result = $connection->query($query);
		$connection->close();
    ?>
</body>
</html>