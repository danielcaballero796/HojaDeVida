<?php

include_once realpath('correo/enviarMail.php');

$mail = new enviarMail();
# Puede ser ruta relativa o absoluta

$correo = $_POST['mail'];
$Nusuario = $_POST['name'];
$telefono = $_POST['phone'];
$website = $_POST['website'];
$mensaje = $_POST['message'];
$rpta = 0;

if ($correo == "" || $Nusuario == "" || $telefono == "" || $mensaje == "") {
    $rpta=0;
} else {
    if ($website == "") {
        $website = "Sin Website";
    }
    $msj = "<html xmlns='http://www.w3.org/1999/xhtml'>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
               <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>

        </head>
        <body bgcolor='#8d8e90' style='background:url('http://divisist2.ufps.edu.co/assets/email/images/grid.png');'>
        <table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#8d8e90' style='padding: 50px 0;background: url('http://divisist.ufps.edu.co/images_mail/grid.png');'>
        <tr>
        <td>
        <table width='650' border='0' cellspacing='0' cellpadding='0' bgcolor='#FFFFFF' align='center' style='-webkit-box-shadow: 0px 14px 21px 0px rgba(50, 50, 50, 0.41); -moz-box-shadow: 0px 14px 21px 0px rgba(50, 50, 50, 0.41); box-shadow: 0px 14px 21px 0px rgba(50, 50, 50, 0.41);'>
                <tr>
                        <td>
                                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                <tr>
                       <td width='30'>&nbsp;</td>
                                        <td width='215'><br><a href='#'><img style='padding-left: 10px;' src='http://arquitectura.epizy.com/dan.png' width='100%'  border='0' alt=''/></a></td>
                                        <td width='383'>
                                                <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                        <tr>
                                                                <td height='46' align='right' valign='middle'>
                                                                    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                                                            <tr>
                                                                                    <td width='4%'>&nbsp;</td>
                                                                            </tr>
                                                                    </table>
                                                                </td>
                                                        </tr>
                                                </table>
                       </td>
                                 </tr>
                    <tr>
                            <td colspan='3'><hr width='95%'></td>
                    </tr>
                                </table>
                        </td>
                </tr>
        <tr>
        <td>
        <table width='100%' border='0' cellspacing='0' cellpadding='0'>
        <tr>
        <td width='5%'>&nbsp;</td>
        <td width='90%' align='justify' valign='top' style='font-family: Verdana, Geneva, sans-serif; color:#68696a; font-size:12px; line-height:20px;'>
       <p>Cordial Saludo Daniel, $Nusuario te ha enviado un correo:<br><br>
       $mensaje
       <br><br>
       <u>Datos del Cliente:<br></u>
       Nombre: $Nusuario <br>
       Correo: $correo <br>
       Telefono: $telefono <br>
       Website: $website <br>
       <br>

        <p style='margin-bottom: 0px;'>Cordialmente,</p>
        <p style='margin-bottom: 0px;'><a href='https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=$correo'><b>$Nusuario</b></a><br></p>
        </td>
        <td width='5%'>&nbsp;</td>
        </tr>
        </table>
        </td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td><img src='http://divisist2.ufps.edu.co/assets/email/images/PROMO-GREEN2_07.jpg' width='630' height='7' style='display:block' border='0' alt=''></td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
        <tr>
        <td width='50%' align='right'>
        <font style='font-family: Verdana, Geneva, sans-serif; color:#68696a; font-size:10px; line-height:20px;'>
        <strong>San Jos&eacute; de C&uacute;cuta - Colombia.</strong></font>
        </td>
        <td width='3%'>&nbsp;</td>
        </tr>
        </table></td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        </tr>
        </table></td>
        </tr>
        </table>
               <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>

        </body>
       </html>";

    $asunto = "Contacto mi sitio web";
    $mail->enviarMensajePlantilla($Nusuario, $msj, $asunto);
    $rpta = 1;
}

echo $rpta;