{{-- filepath: resources/views/emails/presupuesto.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Presupuesto Recibido</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #333333; background-color: #f8f9fa; line-height: 1.6;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 800px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
        <!-- Encabezado con logo -->
        <tr>
            <td align="center" bgcolor="#ffffff" style="padding: 30px 20px;">
                <img src="https://calderas-peru.netlify.app/assets/imagenes-productos/logo-origen.png" alt="Calderas Perú Logo" style="display: block; max-width: 200px; height: auto;">
                <h1 style="margin: 20px 0 0; color: #333333; font-size: 24px; font-weight: 700;">Nuevo Presupuesto Recibido</h1>
            </td>
        </tr>
        
        <!-- Contenido principal -->
        <tr>
            <td style="padding: 40px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td>
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
                            
                            <h2 style="margin: 0 0 20px; color: #ebbf46; font-size: 18px; font-weight: 600; border-bottom: 2px solid #ebbf46; padding-bottom: 10px;">Datos del Solicitante</h2>
                            
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Nombres:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['nombres'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Apellidos:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['apellidos'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Email:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['email'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Celular:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['celular'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Anexo:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['anexo'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Email Solicitante:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['email_solicitante'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                            <h2 style="margin: 0 0 20px; color: #ebbf46; font-size: 18px; font-weight: 600; border-bottom: 2px solid #ebbf46; padding-bottom: 10px;">Datos de la Caldera</h2>
                            
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Capacidad (B.H.P):</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['capacidad_bhp'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Cantidad:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['cantidad'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Tipo:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['tipo'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Combustible:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['combustible_utilizar'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Presión de Trabajo:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['presion_trabajo'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Voltaje Disponible:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['voltaje_disponible'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Altura de Operación:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['altura_operacion'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Lugar de Instalación:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['lugar_instalacion'] }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Equipos Complementarios:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['equipos_complementarios'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                            <h2 style="margin: 0 0 20px; color: #ebbf46; font-size: 18px; font-weight: 600; border-bottom: 2px solid #ebbf46; padding-bottom: 10px;">Datos del Mantenimiento</h2>
                            
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td width="25%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Norma:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['norma'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="25%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Diámetro:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['diametro'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="25%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Pies de Longitud:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['pies_longitud'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="25%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Servicio de Retubado:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['servicio_retubado'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                            <h2 style="margin: 0 0 20px; color: #ebbf46; font-size: 18px; font-weight: 600; border-bottom: 2px solid #ebbf46; padding-bottom: 10px;">Datos de los Repuestos</h2>
                            
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom: 30px;">
                                <tr>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Repuesto o Accesorio:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['repuesto_accesorio'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Marca:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['marca'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Voltaje Disponible:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['voltaje_disponible_repuesto'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33%" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Diámetro Repuesto:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['diametro_repuesto'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td colspan="2" valign="top">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding: 8px 0;">
                                                    <strong style="color: #ebbf46;">Otros:</strong>
                                                </td>
                                                <td style="padding: 8px 0;">
                                                    {{ $data['otros'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            
                            <h2 style="margin: 0 0 20px; color: #ebbf46; font-size: 18px; font-weight: 600; border-bottom: 2px solid #ebbf46; padding-bottom: 10px;">Comentarios</h2>
                            
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="padding: 15px; background-color: #f8f9fa; border-radius: 4px;">
                                        {{ $data['comentarios'] }}
                                    </td>
                                </tr>
                            </table>
                            
                            <p style="margin: 30px 0 0; padding: 15px; background-color: #e9ecef; border-radius: 4px; text-align: center; font-weight: 600; color: #4361ee;">
                                Fecha de solicitud: {{ date('d/m/Y H:i:s') }}
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        
        <!-- Pie de página -->
        <tr>
            <td bgcolor="#ebbf46" style="padding: 20px 30px; text-align: center; color: #ffffff;">
                <p style="margin: 0 0 10px; font-size: 14px;">Este correo fue generado automáticamente por el sistema de presupuestos.</p>
                <p style="margin: 0; font-size: 12px;">© 2023 Calderas Perú. Todos los derechos reservados.</p>
            </td>
        </tr>
    </table>
</body>
</html>