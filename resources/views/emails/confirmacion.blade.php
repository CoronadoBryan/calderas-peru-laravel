{{-- filepath: resources/views/emails/confirmacion.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Solicitud</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #333333; background-color: #f8f9fa; line-height: 1.6;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
        <!-- Encabezado con logo -->
        <tr>
            <td align="center" bgcolor="#ffffff" style="padding: 30px 20px;">
                <img src="https://calderas-peru.netlify.app/assets/imagenes-productos/logo-origen.png" alt="Calderas Perú Logo" style="display: block; max-width: 200px; height: auto;">
            </td>
        </tr>
        
        <!-- Contenido principal -->
        <tr>
            <td style="padding: 40px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>
                            <h1 style="margin: 0 0 20px; color:ebbf46; font-size: 24px; font-weight: 700;">¡Gracias por tu solicitud!</h1>
                            <p style="margin: 0 0 15px;">Hola <strong>{{ $data['nombres'] }} {{ $data['apellidos'] }}</strong>,</p>
                            <p style="margin: 0 0 20px;">Hemos recibido tu solicitud de presupuesto. Nuestro equipo se pondrá en contacto contigo lo antes posible.</p>
                            
                            <h2 style="margin: 0 0 20px; color: #ebbf46; font-size: 18px; font-weight: 600; border-bottom: 2px solid #ebbf46; padding-bottom: 10px;">Datos de la Empresa</h2>
                            
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Razón Social:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['razon_social'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">RUC:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['ruc'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Giro de Empresa:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['giro_empresa'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Dirección:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['direccion'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Distrito:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['distrito'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Departamento:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['departamento'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">País:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['pais'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Teléfono:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['telefono'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Fax:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['fax'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                            <p style="margin: 30px 0 15px;">Si tienes alguna pregunta, no dudes en contactarnos a <a href="mailto:info@calderasperu.com" style="color: #ebbf46; text-decoration: none;">proyectos@calderasperu.com</a> o llamando al <strong>(51) 999 938 966 </strong>.</p>
                            
                            <p style="margin: 0 0 5px;">Atentamente,</p>
                            <p style="margin: 0; font-weight: 700; color: #ebbf46;">Equipo de Calderas Perú</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        
        <!-- Pie de página -->
        <tr>
            <td bgcolor="#ebbf46" style="padding: 20px 30px; text-align: center; font-size: 12px; color: #ffffff;">
                <p style="margin: 0 0 10px;">© 2023 Calderas Perú. Todos los derechos reservados.</p>
                <p style="margin: 0;">Av. Circunvalación Mz J Lt 7, Urb. La Capitana De Huachipa, Lima</p>
            </td>
        </tr>
    </table>
</body>
</html>