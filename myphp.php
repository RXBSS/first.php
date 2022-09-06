<?php

$servername = "127.0.0.1";
$username = "root@localhost";
$password = "";
$dbname = "rxf";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, vorname, nachname, rufnummer, wohnort, geschlecht FROM menschen";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo
        "ID: " . $row["id"] .
            " - NAME: " . $row["vorname"] . " " . $row["nachname"] . "<br>" .
            " - NUMMER: " . $row["rufnummer"] . "<br>" .
            " - WOHNSITZ" . $row["wohnort"] . "<br>" .
            " - M/W: " . $row["geschlecht"] . "<br>"
            ;
    }
} else {
    echo "0 results";
}
$conn->close();

?>