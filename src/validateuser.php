<?php



// include_once('dbconnection.php');
$mysqli = new mysqli("localhost","root","","videostore");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
$username = test_input($_POST["adminname"]);
$password = test_input($_POST["password"]);

if ($users = $mysqli -> query("SELECT * FROM admin")){
    while ($row = $users->fetch_assoc()) {
        // echo "users are: " .  $row['username']."<br>";
        foreach($users as $user) {

            if(($user['username'] == $username) &&
                ($user['password'] == $password)) {
                header("Location: page2.php");
            }
            else {
                echo "<script language='javascript'>";
                echo "alert('Yanlış Kullanıcı Adı veya Şifre!')";
                echo "</script>";
                die();
            }
        }
    }

    $users -> free_result();

}else
{
    echo "username or password is wrong";
}

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
