<!DOCTYPE html>
<html>
<body>
<head> 
<link rel="stylesheet" href="php.css">
<script src="https://use.fontawesome.com/98dccfb4ee.js"></script>
    <title> Visitor's Log </title>
    <h1> Visitor's Log </h1>
    <div class="aside">
        <div class="logo">
            <a href="#"><span>Toru</span></a>
        </div>
    <div class="nav-toggler">
            <span></span>
        </div>
        <ul class="nav">
            <li><a href="home"><i class="fa fa-address-card"></i></a><span>Profile</span></li>
        </ul>
    </div>

    <table>
        <tr>
            <th> ID </th>
            <th> Name </th>
            <th> Email </th>
            <th> Subject </th>
            <th> Message </th>
        </tr>

<?php 
$host = "192.168.150.213";
$dbusername = "webprogmi211";
$dbpassword = "j@zzyAngle30";
$dbname = "webprogmi211";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT id, fullName, emailUsed, subjectUsed, messageInput from acpojol_MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>".  $row["fullName"].  "</td><td>".  $row["emailUsed"] . "</td><td>".  $row["subjectUsed"] . "</td><td>". $row["messageInput"] . "<br>";
        }
    echo "</table>";
    } else {
        echo "0 results";
    }
    
    ?>
    </table>
</body>
</html>