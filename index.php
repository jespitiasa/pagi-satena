<?php
include_once("include/_sesionstart.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>SATENA Colombia | Vuela Con SATENA | Mejor cobertura Nacional</title>
    <meta name="robots" content="index follow">
    <meta name="googlebot" content="index follow">
    <meta name="keywords" content="Travel, Satena, Booking, Aerolinea, Tiquetes, Volar, Rutas, Paseo, Estado, Familia, Regalo, Hotel">
    <meta name="title" content="SATENA Colombia | Vuela Con SATENA | Mejor cobertura Nacional">
    <meta name="description" content="SATENA, la aerolínea de los colombianos con la mejor cobertura nacional. Encuentra vuelos con los mejores precios a destinos como: Nuquí, La Macarena, Tolú y muchos más.">
    <link rel="canonical" href="https://www.satena.com" />
    <?php
        include_once("common/_head.php")
    ?>
</head>

<body>
    <?php
        include_once("common/_preloader.php");
        include_once("common/_subheader.php");
        include_once("common/_navbar.php");
    ?>
    </header>
    <main>
        <!-- Page Content -->
        <?php
        include_once("common/_slider.php");
        ?>
        <section>
            <article>

            </article>
            <article>

            </article>
        </section>
        <aside>

        </aside>
    </main>
    <footer>
        <?php
        include_once("common/_footer.php")
        ?>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="css/jquery/jquery.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="js/custom.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/accordions.js"></script>

    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '$colorwhite';
            }
        }
    </script>
</body>

</html>