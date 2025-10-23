<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            height: 91vh;
            font-family: 'Century Gothic', 'Arial Narrow', Arial, sans-serif;
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            align-items: center;
            background: linear-gradient(90deg, rgba(108, 20, 19, 0.9) 0%, rgba(0, 0, 0, 0.9) 100%);
            color: white;
        }
        button{
            font-family: 'Century Gothic', 'Arial Narrow', Arial, sans-serif;
            margin: 15px;
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
    <center>
    <h1>Error</h1>
    <h2>Credenciales incorrectas</h2>
   <form action="login.php" method="post">
    <button type="submit">Volver al login</button>
    </center>
</body>
</html>