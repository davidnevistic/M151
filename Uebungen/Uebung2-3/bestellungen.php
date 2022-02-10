<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$id = $_GET["id"];

if (!$id) {
    die("Keine ID vorhanden!");
}
?>
<h1>Bestellungen von <?= $id; ?></h1>

<table>
    <tr>
        <td>Name</td>
        <td>Lieferkosten</td>
    </tr>
    <?php
    $sql = "SELECT * FROM orders WHERE customer_id = :id";
    $statement = $conn->prepare($sql);

    $params = [
        ":id" => $id
    ];

    $statement->execute($params);

    $result = $statement->fetchAll();

    foreach ($result as $row) {
    ?>
        <tr>
            <td><?= $row["ship_name"]; ?></td>
            <td><?= $row["shipping_fee"]; ?></td>
            <td><a href="delete.php?id=<?=$row["id"];?>">Löschen</td>
        </tr>
    <?php
    }
    ?>
</table>
