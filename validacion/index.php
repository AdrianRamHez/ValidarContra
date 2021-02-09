<html>
<head>
   <title>Validar Password</title>
   <link rel="stylesheet" href="escorreo.css">
</head>

<body>
<div class="wrap">
    <form action="index.php" method="post">
    Escribe una clave:
    <input type="password" name="clave" class="form-control" maxlength="10">  
    <div>
        <?php
            include_once 'validar.php';
        ?>
    </div>
    <input type="submit" value="Enviar">
    </form>
</div>
</body>
</html>