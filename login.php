<?php 
    if(isset($_POST['logout'])) {
        setcookie("muse", "", time()-3600);
        session_start();
        session_unset();
        session_destroy();
    }
    session_start();
    $usr = @$_POST["usr"];
    $pass = @$_POST["pass"];
    $recordar = @$_POST["recordar"];
    if(isset($_SESSION["muse"])){
        header("Location: inicio.php");
    }
    if(@$_COOKIE["muse"]){
        $_SESSION["muse"]=$_COOKIE["muse"];
        header("Location: inicio.php");
    }
    if($usr=="muse" && $pass=="muse"){
        $_SESSION["muse"]=$usr;
        if($recordar == 'on'){
            setcookie("muse", $usr, time()+60*60*24*365);
        }
        header("Location: inicio.php");
    }else if (empty($usr) || empty($pass)){
        
    }else{
        header("Location: error.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body{
            background: linear-gradient(135deg, rgba(120,220,180, 0.8) 0%, rgba(100,150,200, 0.9) 100%);
            margin: 0px;
            padding: 0px;
            height: 100vh;
            font-family: 'Century Gothic', 'Arial Narrow', Arial, sans-serif;
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
        }
        form{
            background-color: rgb(225,225,225);
            box-shadow: 0px 2px 6px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            padding: 30px;
            border-radius:7px;
        }
        input{
            font-family: 'Century Gothic', 'Arial Narrow', Arial, sans-serif;
            margin: 20px;
            padding: 5px;
            border: none;
            background-color: transparent;
            border-bottom: 1px solid rgba(0,0,0,0.2);
            outline: none;
            transition: 0.1s ease-in-out;
        }
        input:hover{
            border-bottom: 1px solid rgba(0,0,0,0.9);
        }
        input:focus{
            border-bottom: 1px solid rgba(0,0,0,0.9);
        }
        button{
            font-family: 'Century Gothic', 'Arial Narrow', Arial, sans-serif;
            margin: 15px;
            padding: 5px;
            border: 1px solid rgba(0,0,0,0.3);
            border-radius:3px;
            background-color: transparent;
            outline: none;
        }
        button:hover{
            border: 1px solid rgba(0,0,0,0.4);
            background-color: rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <form method="POST">
        <font size="5px">Inicia Sesión</font>
        <input placeholder="Usuario" name="usr">
        <input placeholder="Contraseña" name="pass" type="password">
        <div><input type="checkbox" name="recordar" style="filter: opacity(69%)"><label>Recuerdame</label></div>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>