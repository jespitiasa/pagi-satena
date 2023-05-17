<?php
    // se inicia seccion
    session_start();
    // verificamos el idioma que esta por defecto
    if (!isset($_SESSION['pagina']['web'])) {
        $_SESSION['pagina']['web'] = 'Spanish';
    }
    //Seleccionamos la zona horaria de Bogotá
    date_default_timezone_set('America/Bogota');
    // Consiltamos la url actual
    $url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    //Formato de fecha actual del sistema
    $_hoy = date("d/m/Y H:i", time());
    $_fecha_hoy = date('Y-m-d H:i');
    // Capturamos la ip del cliente
    function IP(){
        if (isset($_SERVER)) {
            if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]) && ip2long($_SERVER["HTTP_X_FORWARDED_FOR"]) !== false) {
                $ipadres = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } else {
                if (isset($_SERVER["HTTP_CLIENT_IP"])  && ip2long($_SERVER["HTTP_CLIENT_IP"]) !== false) {
                    $ipadres = $_SERVER["HTTP_CLIENT_IP"];
                } else {
                    $ipadres = $_SERVER["REMOTE_ADDR"];
                }
            }
        } else {
            if (getenv('HTTP_X_FORWARDED_FOR') && ip2long(getenv('HTTP_X_FORWARDED_FOR')) !== false) {
                $ipadres = getenv('HTTP_X_FORWARDED_FOR');
            } else {
                if (getenv('HTTP_CLIENT_IP') && ip2long(getenv('HTTP_CLIENT_IP')) !== false) {
                    $ipadres = getenv('HTTP_CLIENT_IP');
                } else {
                    $ipadres = getenv('REMOTE_ADDR');
                }
            }
        }
        return $ipadres;
    }
    // llamamos a la url completa, esto se parametrizo para que se pudiese llamar los link de los estilos, scrip y subáginas
    include_once("_url.php");
    // Consulta se el idiona selecionado. Si el idiona es espaoñal ingresa y se guarda la constante como "inicio", sino la constante se guarda "Home
    if ($_SESSION['pagina']['web'] == 'Spanish') {
        // Titulo en español
        $title = "Inicio";
    } else {
        // Titulo en Ingles
        $title = "Home";
    }
?>