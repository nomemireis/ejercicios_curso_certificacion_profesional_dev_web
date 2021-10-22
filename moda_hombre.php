<?php
    include("cabecera_tienda.php");
?>
    <!-- PERSONALIZAR -->
    <meta name="description" content="Moda de caballero - Tienda MyRopa Lider en el Sector">
    <meta name="keywords" content="moda, ropa, tienda, comercio, hombre, caballero">
    <title>HOMBRE - Tienda MyRopa</title>
</head>

<body>

    <?php
        include("menu_tienda.php");
    ?>

    <div class="superiorIndividual">
        <h1>HOMBRE - Tienda MyRopa</h1>
    <div>

<main>
<?php 

if (!(isset($_SESSION['inicio']))){

echo ("
    <div class='row'>
        <div class='col-6' style='margin-left:15px'>
            <img class='imgSecciones' src='images/moda_hombre.jpg' alt=''>
        </div>

        <div class='col-4 logueate' style='margin-left:-50px'>
            Accede para ver la moda de Hombre.
        </div>
    </div>");

} else { 
   echo ("

    <div class='row' id='galeria'>
    <div class='col-1'></div>
        <div class='col-3'>
            <img src='images/ropa-h1.jpg' alt=''/>
            <br/>
                    <button class='botonComprar' onclick='sumaCarrito()'>Comprar</button>
                    <img src='images/logo_papelera.jpg' class='imgBotonPapelera' onclick='restaCarrito()' />

        </div>
        <div class='col-3'>
            <img src='images/ropa-h2.jpg' alt=''/>
            <br/>
                    <button class='botonComprar' onclick='sumaCarrito()'>Comprar</button>
                    <img src='images/logo_papelera.jpg' class='imgBotonPapelera' onclick='restaCarrito()' />
        </div>
        <div class='col-3'>
            <img src='images/ropa-h3.jpg' alt=''/>
            <br/>
                    <button class='botonComprar' onclick='sumaCarrito()'>Comprar</button>
                    <img src='images/logo_papelera.jpg' class='imgBotonPapelera' onclick='restaCarrito()' />
        </div>
    </div>
    <div class='row' id='galeria'>
    <div class='col-1'></div>
        <div class='col-3'>
            <img src='images/ropa-h4.jpg' alt=''/>
            <br/>
                    <button class='botonComprar' onclick='sumaCarrito()'>Comprar</button>
                    <img src='images/logo_papelera.jpg' class='imgBotonPapelera' onclick='restaCarrito()' />
        </div>
        <div class='col-3'>
            <img src='images/ropa-h5.jpg' alt=''/>
            <br/>
                    <button class='botonComprar' onclick='sumaCarrito()'>Comprar</button>
                    <img src='images/logo_papelera.jpg' class='imgBotonPapelera' onclick='restaCarrito()' />
        </div>
        <div class='col-3'>
            <img src='images/ropa-h6.jpg' alt=''/>
            <br/>
                    <button class='botonComprar' onclick='sumaCarrito()'>Comprar</button>
                    <img src='images/logo_papelera.jpg' class='imgBotonPapelera' onclick='restaCarrito()' />
        </div>
    </div>"
);
} 
?>
</main>


<?php
    include("pie_tienda.php");
?>

