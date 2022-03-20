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
$be_updated_link = $_POST['be_updated_link'];
$be_updated_desc = $_POST['be_updated_desc'];
$be_updated_id = $_POST['be_updated_id'];

$sql = "UPDATE video SET description='$be_updated_desc' , link='$be_updated_link' WHERE id='$be_updated_id' ";

if ($conn->query($sql) === TRUE) {
    ?>
    <script type="text/javascript">
        alert("Video Linki Güncellendi!");
        window.location.href = "page4.php";
    </script>
    <?php
} else {
    echo "Video Kaydedilemedi!: " . $conn->error;
}

$conn->close();
?>
