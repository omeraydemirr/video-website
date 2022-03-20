<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title>Video Ekle</title>

</head>

<body>
<div style="border:5px solid #575151;border-radius: 5px;"><h2>Video Admin</h2></div>

<h1 style="text-align: center">Video Ekleme</h1>

<div style="margin:0 auto;border:5px solid black;width: 55%;height: 200px;align-items: center;justify-content: center">

   <div style="float:right;margin-right: 50px;margin-top: 5px">
       <form action="page2.php">
           <button style="background: white" type="submit"><img
                       style="width: 20px;height: 20px"
                       src="https://w7.pngwing.com/pngs/655/878/png-transparent-computer-icons-button-red-cross-angle-photography-internet-thumbnail.png"></button>
       </form>
    <a>Vazgeç</a>
   </div>
    <form action="videoadd.php" method="post">

    <div style="margin-top: 50px;margin-left: 20px">
   <a>Youtube linki</a> <input name="v_link" id="v_link" style="width: 70%">
    </div>
    <br><br>
    <div style="margin-left: 20px">
    <a>Video Tanımı</a><input name="v_desc" id="v_desc" style="width: 70%">
    <br><br>
    </div>
    <button type="submit" style="margin-left: 350px">KAYDET</button>

</form>
</div>
</body>

</html>

