<?php

class Solicitud {
    public $nombre;
    public $email;
    public $fecha;
    public $fono;

    function __construct($nombre, $email, $fecha, $fono) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->fecha = $fecha;
        $this->fono = $fono;
    }

    function set_nombre($nombre) {
        $this->nombre = $nombre;
    }

    function get_nombre() {
        return $this->nombre;
    }

    function get_email() {
        return $this->email;
    }
}

$misolicitud = new Solicitud($_POST['nombre'], $_POST['email'], $_POST['fecha'], $_POST['fono']);

?>
