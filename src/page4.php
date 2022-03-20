<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title>Video Güncelleme</title>

</head>

<body>
<div style="border:5px solid #575151;border-radius: 5px;width: 100%;height:60px">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="login.css">
        <title>Video Güncelle</title>

    </head>
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

<h1 style="text-align: center">Video Güncelleme</h1>

<div style="margin:0 auto;border:5px solid black;width: 55%;height: 200px;align-items: center;justify-content: center">

    <div style="float:right;margin-right: 50px;margin-top: 5px">
        <form action="page2.php">
            <button style="background: white" type="submit"><img
                        style="width: 20px;height: 20px"
                        src="https://w7.pngwing.com/pngs/655/878/png-transparent-computer-icons-button-red-cross-angle-photography-internet-thumbnail.png"></button>
        </form>
        <a>Vazgeç</a>
    </div>


    <form action="videoupdate.php" method="post">
        <input value="<?php echo $_POST['update_id']; ?>" style="display: none" id="be_updated_id" name="be_updated_id" readonly>

        <div style="margin-top: 50px;margin-left: 20px">
            <a>Youtube linki</a> <input value="<?php echo $_POST['update_link']; ?>" id="be_updated_link" name="be_updated_link" style="width: 70%">
        </div>
<br><br>
        <div style="margin-left: 20px">
            <a>Video Tanımı</a>  <input value="<?php echo $_POST['update_desc']; ?>" id="be_updated_desc" name="be_updated_desc" style="width: 70%">
        </div>
        <br><br>
        <button type="submit" style="margin-left:350px">Kaydet</button>

    </form>
</div>
</body>

</html>





