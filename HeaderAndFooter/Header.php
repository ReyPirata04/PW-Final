<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Serenisima</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="img/Logo_Lactolandia.png">
</head>
<body>
    <header>
        <nav>

        <div class="encabezado" >
            <div class="logo">
                <a href="index.php"><img src="img/Logo_Lactolandia.png"
                alt="Logo De Lactolandia" height="50px" width="50px" ></a>
                <div class="texto_logo">
                    <p width="150px" height="150px">Lactolandia</p>
                </div>
            </div>
            

            <?php
                $secciones = array();

                $secciones["Inicio"] = "index.php";
                $secciones["¿Quienes Somos?"] = "Quienes_Somos.php";
                $secciones["Contacto"] = "Contacto.php";
                $secciones["Productos"] = "Productos.php";

                print "<ul>";
                print "<div class='secc'>";

                foreach ($secciones as $key => $value) {
                    print "<li><a href=$value>$key</a></li>";
                }
                print "</ul>";
                print "</div>";

            ?>
            </div>
        </nav>
    </header>