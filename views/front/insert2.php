<?php
if (isset($_POST['submit'])) {
    if (
        isset($_POST['daterep'])
    ) {
        $date = $_POST['daterep'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        } else {
            $Insert = "INSERT INTO reparation(delai_intervention, idReparation) values(?, ?)";
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("s", $date);
            if ($stmt->execute()) {
                echo "New record inserted sucessfully.";
            } else {
                echo $stmt->error;
            }
            $stmt->close();
            $conn->close();
        }
    } else {
        die();
    }
}
