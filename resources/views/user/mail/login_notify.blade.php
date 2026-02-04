<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerta de seguridad - EduOne</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f8fafc; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f8fafc; padding: 40px 20px;">
    <tr>
        <td align="center">

            <!-- Contenedor principal -->
            <table width="600" cellpadding="0" cellspacing="0"
                   style="background-color: #ffffff; border-radius: 12px; overflow: hidden;
                   box-shadow: 0 4px 6px rgba(0,0,0,0.07), 0 10px 25px rgba(0,0,0,0.05);">

                <!-- Header minimalista -->
                <tr>
                    <td style="padding: 40px 40px 30px; text-align: left;">
                        <h1 style="color: #1e293b; margin: 0; font-size: 28px; font-weight: 700; line-height: 1.3;">
                            Nuevo acceso detectado
                        </h1>
                    </td>
                </tr>

                <!-- Contenido -->
                <tr>
                    <td style="padding: 0 40px 40px; color: #475569;">

                        <p style="font-size: 16px; line-height: 1.7; margin: 0 0 24px; color: #334155;">
                            Hola <strong style="color: #1e293b;">{{ $user->name }}</strong>,
                        </p>

                        <p style="font-size: 15px; line-height: 1.7; margin: 0 0 16px;">
                            Hemos detectado un nuevo inicio de sesión en tu cuenta de EduOne. 
                            Si fuiste tú, puedes ignorar este mensaje.
                        </p>

                        <p style="font-size: 15px; line-height: 1.7; margin: 0 0 28px;">
                            Si <strong>no reconoces esta actividad</strong>, es importante que 
                            asegures tu cuenta de inmediato.
                        </p>

                        <!-- Card de detalles con diseño moderno -->
                        <div style="background: linear-gradient(135deg, #fef2f2 0%, #fff 100%);
                                    border: 1px solid #fee2e2;
                                    border-radius: 10px;
                                    padding: 24px;
                                    margin: 28px 0;">

                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding-bottom: 14px;">
                                        <p style="margin: 0; font-size: 13px; color: #dc2626; 
                                                  font-weight: 600; text-transform: uppercase; 
                                                  letter-spacing: 0.5px;">
                                            Detalles del acceso
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="padding: 8px 0; font-size: 14px; color: #64748b;">
                                                    Usuario
                                                </td>
                                                <td style="padding: 8px 0; text-align: right;">
                                                    <strong style="color: #1e293b; font-size: 14px;">
                                                        {{ $user->email }}
                                                    </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; border-top: 1px solid #fee2e2; 
                                                           font-size: 14px; color: #64748b;">
                                                    Fecha y hora
                                                </td>
                                                <td style="padding: 8px 0; border-top: 1px solid #fee2e2; 
                                                           text-align: right;">
                                                    <strong style="color: #1e293b; font-size: 14px;">
                                                        {{ now()->format('d/m/Y') }} a las {{ now()->format('H:i') }}
                                                    </strong>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </div>

                        <!-- Sección de acciones -->
                        <div style="background-color: #f8fafc; 
                                    border-radius: 10px; 
                                    padding: 24px; 
                                    margin: 28px 0;">
                            
                            <p style="margin: 0 0 16px; font-size: 14px; font-weight: 600; color: #1e293b;">
                                ¿Qué debes hacer?
                            </p>

                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 6px 0;">
                                        <span style="color: #10b981; font-size: 16px; margin-right: 8px;">✓</span>
                                        <span style="font-size: 14px; color: #475569;">
                                            Cambia tu contraseña inmediatamente
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 6px 0;">
                                        <span style="color: #10b981; font-size: 16px; margin-right: 8px;">✓</span>
                                        <span style="font-size: 14px; color: #475569;">
                                            Verifica la información de tu perfil
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 6px 0;">
                                        <span style="color: #10b981; font-size: 16px; margin-right: 8px;">✓</span>
                                        <span style="font-size: 14px; color: #475569;">
                                            Contacta a soporte si notas algo inusual
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Divider -->
                        <div style="border-top: 1px solid #e2e8f0; margin: 32px 0 24px;"></div>

                        <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0 0 20px;">
                            ¿Necesitas ayuda? Nuestro equipo de soporte está disponible de 9:00 a 18:00h
                            para asistirte con cualquier duda o problema.
                        </p>
                    </td>
                </tr>

                <!-- Footer moderno -->
                <tr>
                    <td style="background: linear-gradient(to bottom, #ffffff 0%, #f8fafc 100%);
                               padding: 24px 40px;
                               text-align: center;
                               border-top: 1px solid #e2e8f0;">
                        
                        <p style="margin: 0 0 8px; font-size: 13px; color: #94a3b8;">
                            © {{ date('Y') }} EduOne · Aviatraining and Technology
                        </p>
                        
                        <p style="margin: 0; font-size: 12px; color: #cbd5e1;">
                            Este es un correo automático de seguridad. Por favor no respondas a este mensaje.
                        </p>
                        
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>