<?php
    include("cabecera_tienda.php");
?>
    <!-- PERSONALIZAR -->
    <meta name="description" content="Login a los servicios de Tienda MyRopa Lider en el Sector">
    <meta name="keywords" content="moda, ropa, tienda, comercio, login, acceso">
    <title>LOGIN - Tienda MyRopa</title>
</head>

<body>

<?php
    include("menu_tienda.php");
?>

<div class="superiorIndividual">
    <h1>LOGIN - Tienda MyRopa</h1>
<div>

<main>
    <div class="row">

        <div class="col-5">
            <figure>
                <img  class="igor" src="images/igor.jpg">
            </figure>
        </div>
        <div class="col-4">
            <div class="formularioContacto" style="margin-left:30px;">
                <form action="login_acceso.php" method="POST">
                    <p>
                        <label for="txtNombre">Usuario: </label><br/>
                        <input type="text" id="txtNombre" name="txtNombre"/>
                    </p>

                    <p>
                        <label for="txtPassword">Contraseña: </label><br/>
                        <input type="text" id="txtPassword" name="txtPassword"/>
                    </p>
                    
                    <p>
                        <input type="submit" id="btnEnviar" />
                    </p>
                </form>
            </div>
        </div>
    </div>
</main>


<?php
    include("pie_tienda.php");
?>

