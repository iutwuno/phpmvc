<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejemplo PHP MySQLi POO MVC CSS3</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
    </head>
    <body>
	
        <form action="<?php echo $helper->url("usuarios","crear"); ?>" method="post" class="col-lg-5">
            <h3>Añadir usuario</h3>
            <hr/>
            Nombre: <input type="text" name="nombre" placeholder="Armando Esteban" required class="form-control"/>
            Apellido: <input type="text" name="apellido" placeholder="Quito " required class="form-control"/>
            Email: <input type="text" name="email" placeholder="armando_esteban_quito@algo.com" required class="form-control"/>
            Contraseña: <input type="password" name="password" required class="form-control"/>
            <input type="submit" value="enviar" class="btn btn-success"/>
			<input type="button" value="Inicio" onclick="location.href='index.html'"class="btn btn-success" />
        </form>
		 
        
        <div class="col-lg-7">
            <h3>Usuarios</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($allusers as $user) {?>
                <?php echo $user->id; ?> -
                <?php echo $user->nombre; ?> -
                <?php echo $user->apellido; ?> -
                <?php echo $user->email; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
		
		
        <footer class="col-lg-12">
            <hr/>
           Ejemplo PHP MySQLi POO MVC - Asignatura IUTW - Universidad Nacional del Oeste - <a href="https://www.facebook.com/groups/IUTW.UNO.2017/">Interfaces de Usuarios y Tecnologias WEB</a> <?php echo  date("Y"); ?>
        </footer>
    </body>
</html>