<?php

//require "lib/class.phpmailer.php";
//require "lib/class.smtp.php";
include "class.phpmailer.php";
include "class.smtp.php";

class enviarMail
{

    private $mail;
    public $direc;

    public function __construct()
    {
        $this->mail = new PHPMailer;

        //indico a la clase que use SMTP
        $this->mail->IsSMTP();

        //permite modo debug para ver mensajes de las cosas que van ocurriendo
        //$this->mail->SMTPDebug = 2;
        //Debo de hacer autenticaci�n SMTP
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = "";

        //indico el servidor de Gmail para SMTP
        $this->mail->Host = "mail.ameliacompra.com";

        //indico el puerto que usa Gmail
        $this->mail->Port = 25;
        //Cargamos datos del correo emisor y receptor
        //        $this->cargarDatos();
    }

    private function cargarDatos()
    {

        $this->mail->Username = "no-reply@ameliacompra.com";
        $this->mail->Password = "n1xn35?X";
        $this->mail->FromName = "AmeliaCompra-Servicio";
        $this->mail->Subject = "Contacto-Servicio";
        $this->mail->AddAddress($this->direc);

    }

    public function enviarMensajeActivarUser($correoUsuario, $observacion)
    {

        $this->mail->ClearAddresses();

        $this->direc = $correoUsuario;
        //Cargamos datos del correo emisor y receptor
        $this->cargarDatos();

        $this->mail->MsgHTML("<p>Su cuenta en SmartCost ha sido Activada"
            . "\n<br> Su Usuario es : " . $correoUsuario . " y esta activo como : " . $observacion . "\n .Recuerde que usted es responsable de su Usuario y Clave. En caso de Problemas comunicarse al Correo: gerencia@smartcrop.com.co</p>");

        $this->mail->Send();
    }
	
    public function enviarMensajeCambioInformacion($nombreUsuario, $direccionUsuario, $correoUsuario, $telefonoUsuario)
    {

        $this->mail->ClearAddresses();

        $this->direc = $correoUsuario;
        //Cargamos datos del correo emisor y receptor
        $this->cargarDatos();

        $this->mail->MsgHTML("<p>Se Actualizo la Informacion de su cuenta en SmartCost <br><br>"
            . "\n Sus Datos son los Siguientes<br> "
            . "\nUsuario  : " . $nombreUsuario . "<br>"
            . "\nDireccion : " . $direccionUsuario . "<br>"
            . "\nCorreo : " . $correoUsuario . " <br>"
            . "\nTelefono :" . $telefonoUsuario . "<br>"
            . "En caso de que la informacion Registrada este erronea  comunicarse al Correo: gerencia@smartcrop.com.co</p>");

        $this->mail->Send();
    }

    public function enviarMensaje($correo,$observacion)
    {
        $this->mail->ClearAddresses();
        $this->direc = $correo;//direccion de receptor
        //Cargamos datos del correo emisor y receptor
        $this->cargarDatos();
        $this->mail->MsgHTML($observacion);
        $this->mail->Send();
    }

}
