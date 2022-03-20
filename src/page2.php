<html>
<body>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"">
    <title>Anasayfa</title>

</head>

<div style="border:5px solid #575151;border-radius: 5px;width: 100%;height: 10%">

    <div style="float:left">
        <h2>Video Admin</h2>
    </div>


    <div style="float:right;margin-top: 15px;margin-right: 250px">
        <form action="page3.php" style="float:right">
            <button style="background: white" type="submit">Yeni Video Ekle<img src="https://pngimage.net/wp-content/uploads/2018/05/art%C4%B1-i%C5%9Fareti-png.png" width="20px" height="20px">
                </button>
        </form>
    </div>


</div>

<?php
$username = "root";
$password = "";
$database = "videostore";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM video";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td>  </td> 
          <td>  </td> 
          <td>  </td> 
          <td>  </td> 
          <td>  </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $link = $row["link"];
        $description = $row["description"];
        $date_added = $row["date_added"];
        $is_deleted = $row["is_deleted"];
        foreach ([$is_deleted] as $value)
        {
            echo ($value == 0 ) ? '<table style="border:2px solid black;border-radius: 5px;height: 10%;margin:10px auto;width: 40%" >
            <tr> 
          <form action="page4.php" method="post">
          <td><input value="'.$id.'" readonly id="update_id" name="update_id" style="display: none"> </td> 
          <td> <a target="_blank" href="'.$link.'">
          <img src="https://i.pinimg.com/originals/31/23/9a/31239a2f70e4f8e4e3263fafb00ace1c.png" style="width: 50px;height: 50px;">
            </a>
          </td>
          <td><input value="'.$link.'" id="update_link" name="update_link" style="display: none" readonly></td> 
          <td><input value="'.$description.'" id="update_desc" name="update_desc" style="display:none" readonly> </td> 
          <td>'.$description.' <br> <b>Eklenme Tarihi:</b> '.$date_added.'</td>
          <td>
          <button style="background: white" type="submit">GÜNCELLE</button>
          </td> 
        
        </form>
        
          <td style="padding-top: 15px">
          <form action="delete.php" method="post">
          <input value="'.$id.'" readonly id="update_id" name="update_id" style="display: none"> 
                <button style="background: white" type="submit"><img 
                style="width: 20px;height: 20px"
                src="https://w7.pngwing.com/pngs/655/878/png-transparent-computer-icons-button-red-cross-angle-photography-internet-thumbnail.png"></button>
                </form>
            </td>
      </tr>
      </table>'
                : '<a></a>';
        }






    }
    $result->free();
}
?>




</body>
</html>
