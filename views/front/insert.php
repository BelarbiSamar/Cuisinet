<?php
if (isset($_POST['submit'])) {
    if (
        isset($_POST['email']) &&
        isset($_POST['description'])
    ) {

        $email = $_POST['email'];
        $date = date('d-m-y h:i:s');
        $description = $_POST['description'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        } else {
            $Insert = "INSERT INTO reclamation(idReclamation, dateRec, idClient, description) values(?, ?, 1, ?)";
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("sss", $email, $date, $description);
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
