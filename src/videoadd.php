<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "videostore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$v_link = $_POST['v_link'];
$v_desc = $_POST['v_desc'];
$date = date("Y-m-d");
$sql = "INSERT INTO video (link, description,date_added,is_deleted) VALUES ('$v_link','$v_desc','$date' ,'0')";

if ($conn->query($sql) === TRUE) {
    ?>
    <script type="text/javascript">
        alert("Video Linki Kaydedildi!");
        window.location.href = "page3.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
