<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a EduOne</title>
</head>

<body style="margin: 0; padding: 0; background-color: #f4f6f8; font-family: Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f4f6f8; padding: 20px;">
    <tr>
        <td align="center">

            <!-- Contenedor principal -->
            <table width="600" cellpadding="0" cellspacing="0"
                   style="background-color: #ffffff; border-radius: 6px; overflow: hidden;
                   box-shadow: 0 0 8px rgba(0,0,0,0.04);">

                <!-- Header -->
                <tr>
                    <td style="background-color: #1e40af; padding: 22px; text-align: center;">
                        <h1 style="color: #ffffff; margin: 0; font-size: 24px;">
                            EduOne
                        </h1>
                        <p style="color: #dbeafe; margin: 4px 0 0; font-size: 14px;">
                            Plataforma Corporativa
                        </p>
                    </td>
                </tr>

                <!-- Contenido -->
                <tr>
                    <td style="padding: 32px; color: #333333;">

                        <h2 style="margin-top: 0; font-size: 20px;">
                            Hola {{ $user->name }},
                        </h2>

                        <p style="font-size: 15px; line-height: 1.6;">
                            Te damos la bienvenida al sistema de <strong>EduOne</strong>.
                            A partir de ahora podrás acceder a la plataforma para gestionar
                            tus actividades y consultar información interna.
                        </p>

                        <p style="font-size: 15px; line-height: 1.6;">
                            Tu cuenta ya se encuentra activa y lista para usarse.
                        </p>

                        <!-- Datos de acceso -->
                        <div style="background-color: #f8fafc;
                                    border-left: 4px solid #1e40af;
                                    padding: 15px 18px;
                                    margin: 25px 0;">

                            <p style="margin: 0; font-size: 14px; font-weight: bold;">
                                Datos de acceso
                            </p>

                            <p style="margin: 8px 0 0; font-size: 14px; line-height: 1.6;">
                                Puedes iniciar sesión utilizando cualquiera de las siguientes opciones:
                            </p>

                            <p style="margin: 8px 0 0; font-size: 14px; line-height: 1.6;">
                                • Correo: <strong>{{ $user->email }}</strong><br>
                                • Identificador: <strong>{{ $user->id_user }}</strong>
                            </p>

                            <p style="margin: 8px 0 0; font-size: 14px; line-height: 1.6;">
                                Contraseña inicial: <strong>Fecha de registro (dd/mm/yy)</strong>
                            </p>

                        </div>

                        <!-- Botón -->
                        <div style="text-align: center; margin: 28px 0;">
                            <a href="{{ url('/') }}"
                               style="
                               background-color: #1e40af;
                               color: #ffffff;
                               text-decoration: none;
                               padding: 11px 24px;
                               border-radius: 4px;
                               font-size: 14px;
                               font-weight: 600;
                               display: inline-block;
                               ">
                                Ingresar al sistema
                            </a>
                        </div>

                        <p style="font-size: 14px; line-height: 1.6;">
                            Por motivos de seguridad, te recomendamos cambiar tu contraseña
                            la primera vez que ingreses.
                        </p>

                        <p style="font-size: 14px; line-height: 1.6;">
                            Si presentas algún inconveniente para acceder, puedes comunicarte
                            con el área de soporte.
                        </p>

                        <p style="margin-bottom: 0; font-size: 14px;">
                            Saludos,<br>
                            Equipo de EduOne
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color: #f1f5f9;
                               padding: 18px;
                               text-align: center;
                               font-size: 13px;
                               color: #666666;">
                        © {{ date('Y') }} EduOne · Aviatraining and Technology
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
