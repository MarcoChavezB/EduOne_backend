<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a EduOne</title>
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
                        <div style="display: inline-block; background: linear-gradient(135deg, #dbeafe 0%, #eff6ff 100%); 
                                    padding: 8px 16px; border-radius: 20px; margin-bottom: 16px;">
                            <span style="color: #1e40af; font-size: 13px; font-weight: 600; letter-spacing: 0.5px;">
                                👋 BIENVENIDA
                            </span>
                        </div>
                        <h1 style="color: #1e293b; margin: 0; font-size: 28px; font-weight: 700; line-height: 1.3;">
                            Tu cuenta está lista
                        </h1>
                        <p style="color: #64748b; margin: 8px 0 0; font-size: 15px;">
                            Plataforma Corporativa EduOne
                        </p>
                    </td>
                </tr>

                <!-- Contenido -->
                <tr>
                    <td style="padding: 0 40px 40px; color: #475569;">

                        <p style="font-size: 16px; line-height: 1.7; margin: 0 0 24px; color: #334155;">
                            Hola <strong style="color: #1e293b;">{{ $user->name }}</strong>,
                        </p>

                        <p style="font-size: 15px; line-height: 1.7; margin: 0 0 16px;">
                            Es un placer darte la bienvenida a <strong>EduOne</strong>. 
                            Tu cuenta ya está activa y puedes comenzar a utilizar la plataforma 
                            para gestionar tus actividades y acceder a toda la información que necesitas.
                        </p>

                        <p style="font-size: 15px; line-height: 1.7; margin: 0 0 28px;">
                            Hemos preparado todo para que tu experiencia sea lo más fluida posible.
                        </p>

                        <!-- Card de credenciales con diseño moderno -->
                        <div style="background: linear-gradient(135deg, #eff6ff 0%, #fff 100%);
                                    border: 1px solid #dbeafe;
                                    border-radius: 10px;
                                    padding: 24px;
                                    margin: 28px 0;">

                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding-bottom: 14px;">
                                        <p style="margin: 0; font-size: 13px; color: #1e40af; 
                                                  font-weight: 600; text-transform: uppercase; 
                                                  letter-spacing: 0.5px;">
                                            🔑 Datos de acceso
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 16px;">
                                        <p style="margin: 0; font-size: 14px; color: #64748b; line-height: 1.6;">
                                            Puedes iniciar sesión con cualquiera de estas opciones:
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="padding: 8px 0; font-size: 14px; color: #64748b;">
                                                    Correo electrónico
                                                </td>
                                                <td style="padding: 8px 0; text-align: right;">
                                                    <strong style="color: #1e293b; font-size: 14px;">
                                                        {{ $user->email }}
                                                    </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; border-top: 1px solid #dbeafe; 
                                                           font-size: 14px; color: #64748b;">
                                                    Identificador
                                                </td>
                                                <td style="padding: 8px 0; border-top: 1px solid #dbeafe; 
                                                           text-align: right;">
                                                    <strong style="color: #1e293b; font-size: 14px;">
                                                        {{ $user->id_user }}
                                                    </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="padding: 16px 0 0;">
                                                    <div style="background-color: #fff; 
                                                                border: 1px dashed #3b82f6;
                                                                border-radius: 6px;
                                                                padding: 12px 16px;">
                                                        <p style="margin: 0; font-size: 13px; color: #64748b;">
                                                            Contraseña inicial
                                                        </p>
                                                        <p style="margin: 6px 0 0; font-size: 15px; color: #1e40af; font-weight: 600;">
                                                            Tu fecha de registro (dd/mm/yy)
                                                        </p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                        </div>

                        <!-- Botón principal -->
                        <div style="text-align: center; margin: 32px 0 28px;">
                            <a href="{{ url('/') }}"
                               style="background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
                                      color: #ffffff;
                                      text-decoration: none;
                                      padding: 14px 32px;
                                      border-radius: 8px;
                                      font-size: 15px;
                                      font-weight: 600;
                                      display: inline-block;
                                      box-shadow: 0 4px 12px rgba(30, 64, 175, 0.3);
                                      transition: all 0.3s ease;">
                                Acceder a EduOne
                            </a>
                        </div>

                        <!-- Sección de recomendaciones -->
                        <div style="background-color: #fef9c3; 
                                    border-left: 4px solid #eab308;
                                    border-radius: 6px;
                                    padding: 16px 20px; 
                                    margin: 28px 0;">
                            
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding-right: 12px; vertical-align: top; width: 24px;">
                                        <span style="font-size: 18px;">⚡</span>
                                    </td>
                                    <td>
                                        <p style="margin: 0; font-size: 14px; color: #854d0e; line-height: 1.6;">
                                            <strong>Recomendación de seguridad:</strong> 
                                            Cambia tu contraseña al ingresar por primera vez. 
                                            Esto ayudará a mantener tu cuenta más segura.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0 0 20px;">
                            Si tienes algún problema para acceder o necesitas ayuda, 
                            no dudes en contactar a nuestro equipo de soporte. Estamos aquí para ayudarte.
                        </p>

                        <p style="margin: 0; font-size: 14px; color: #1e293b;">
                            <strong>¡Te deseamos una excelente experiencia!</strong><br>
                            <span style="color: #64748b;">Equipo de EduOne</span>
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
                            Este es un correo automático. Por favor no respondas a este mensaje.
                        </p>
                        
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>