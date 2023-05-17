<?php
    $host= $_SERVER["HTTP_HOST"];
    $url = "/pagi-satena/";
    $url_completa = "https://" . $host . "/";
    $url_actual = "https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    $search = array('&NTILDE;', '&ntilde;', '&AACUTE;', '&EACUTE;', '&IACUTE;', '&OACUTE;', '&UACUTE;', '&aacute;', '&eacute;', '&iacute;', '&oacute;', '&uacute;');
    $replace  = array("Ñ", "ñ", "Á", "É", "Í", "Ó", "Ú", "á", "é", "í", "ó", "ú");
?>