<?php
$fullName = filter_input(INPUT_POST, 'fullName');
$emailUsed = filter_input(INPUT_POST, 'emailUsed');
$subjectUsed = filter_input(INPUT_POST, 'subjectUsed');
$messageInput = filter_input(INPUT_POST, 'messageInput');

if (!empty($fullName)){
    if (!empty($emailUsed)){
        if(!empty($subjectUsed)){
            if(!empty($messageInput)){

  
                $host = "192.168.150.213";
                $dbusername = "webprogmi211";
                $dbpassword = "j@zzyAngle30";
                $dbname = "webprogmi211";

// CONNECTION HERE
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}else{
    $sql = "INSERT INTO acpojol_MyGuests (fullName, emailUsed, subjectUsed, messageInput)
    values ('$fullName', '$emailUsed', '$subjectUsed', '$messageInput')";
    if ($conn->query($sql)){
        echo "New Record has been added.";
    }else{
        echo "Error: ". $sql . "<br>". $conn->error;
    } 
    $conn->close();
    }


            } else {
                echo "Message should not be empty, Try Again.";
                die ();
            }
        } else {
            echo "Subject should not be empty, Try Again.";
            die ();
        }
    } else {
        echo "Email should not be empty, Try Again.";
        die();
    } 
} else {
        echo "Name is required, Try Again.";
        die();
    }


echo "<h3> Visitor's Log</h3>";
echo $fullName;
echo "<br>";
echo $emailUsed;
echo "<br>";
echo $subjectUsed;
echo "<br>";
echo $messageInput;
echo "<br>";

?>