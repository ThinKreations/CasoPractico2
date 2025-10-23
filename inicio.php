<?php
    session_start();
    if(@$_SESSION["muse"]){
        $user = $_SESSION["muse"];
    }else{
        header("Location: error.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(135deg, rgba(120,220,180, 0.8) 0%, rgba(100,150,200, 0.9) 100%);
            margin: 0px;
            padding: 0px;
            height: 100vh;
            font-family: 'Century Gothic', 'Arial Narrow', Arial, sans-serif;
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            align-items: center;
        }
        button{
            font-family: 'Century Gothic', 'Arial Narrow', Arial, sans-serif;
            padding: 5px;
            border: 1px solid rgba(255,255,255,0.2);
            border-radius:5px;
            background-color: transparent;
            outline: none;
            color: white;
        }
        button:hover{
            background-color: rgba(255,255,255,0.1);
        }
    </style>
</head>
<body>
    <font size="6px">Bienvenido, <b><?php echo $user ?></b>.</font>
    <img src="https://m.media-amazon.com/images/I/61uiv0AYlvL.jpg" alt="weezer" width="400px" style="border-radius: 5px; box-shadow: 0px 2px 6px rgba(0,0,0,0.2); margin: 15px;">
    <form method="post" action="login.php" style="margin-top:25px">
        <input type="hidden" name="logout" value="1">
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>