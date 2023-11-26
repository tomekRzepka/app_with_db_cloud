<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $stypendium = $_POST["stypendium"];
    $semestr = $_POST["semestr"];

    $sql = "INSERT INTO Studenci (Imie, Nazwisko, Stypendium, Semestr) VALUES (?, ?, ?, ?)";
    $params = array($imie, $nazwisko, $stypendium, $semestr);

    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    echo "Student dodany pomyślnie!";
}

sqlsrv_close($conn);
?>
