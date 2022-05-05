<?php

//require "lib/class.phpmailer.php";
//require "lib/class.smtp.php";
include("class.phpmailer.php");
include("class.smtp.php");

/**
 * 
 */
class enviarMail {

    private $mail;
    public $direc;


    function __construct() {
        $this->mail = new PHPMailer;

        //indico a la clase que use SMTP
        $this->mail->IsSMTP();

        //permite modo debug para ver mensajes de las cosas que van ocurriendo
        //$this->mail->SMTPDebug = 2;
        //Debo de hacer autenticaci�n SMTP
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = "ssl";

        //indico el servidor de Gmail para SMTP
        $this->mail->Host = "smtp.gmail.com";

        //indico el puerto que usa Gmail
        $this->mail->Port = 465;

    }

    private function cargarDatos($asunto) {

        $this->mail->Username = "noresponderaplicacion@gmail.com";
        $this->mail->Password = "Soporte2020";
        $this->mail->FromName = "Soporte App";
        $this->mail->Subject = $asunto;
        
//         $this->mail->AddAddress("poncho22069@hotmail.com");

         $this->mail->AddAddress($this->direc);
    }
    

    function enviarMensajePlantilla($correo, $Usuario, $observacion, $asunto) {       
        $this->mail->ClearAddresses();

        //$this->direc = $correo;//receptor
        $this->direc = "ingdanielcaballero@gmail.com";//receptor
        //Cargamos datos del correo emisor
        $this->cargarDatos($asunto);

        $this->mail->MsgHTML($observacion);

        $this->mail->Send();
    }
    

}

?>


