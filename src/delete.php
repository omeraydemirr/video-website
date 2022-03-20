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
$be_deleted_id = $_POST['update_id'];

// sql to delete a record
$sql = "UPDATE video SET is_deleted=1 WHERE id='$be_deleted_id'";


if ($conn->query($sql) === TRUE) {
    ?>
    <script type="text/javascript">
        alert("Video silindi ve database'de 0 olarak kaydedildi!");
        window.location.href = "page2.php";
    </script>
    <?php
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
