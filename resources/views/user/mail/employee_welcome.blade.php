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
                   style="background-color: #ffffff; border-radius: 8px; overflow: hidden;
                   box-shadow: 0 0 10px rgba(0,0,0,0.05);">

                <!-- Header -->
                <tr>
                    <td style="background-color: #1e40af; padding: 25px; text-align: center;">
                        <h1 style="color: #ffffff; margin: 0;">
                            🏢 EduOne
                        </h1>
                        <p style="color: #dbeafe; margin: 5px 0 0;">
                            Plataforma Corporativa
                        </p>
                    </td>
                </tr>

                <!-- Contenido -->
                <tr>
                    <td style="padding: 35px; color: #333333;">

                        <h2 style="margin-top: 0;">
                            Bienvenido/a, {{ $user->name }} 👋
                        </h2>

                        <p style="font-size: 16px; line-height: 1.6;">
                            Nos complace darte la bienvenida al equipo de <strong>EduOne</strong>.
                            A partir de este momento, cuentas con acceso a nuestro sistema interno.
                        </p>

                        <p style="font-size: 16px; line-height: 1.6;">
                            Desde la plataforma podrás gestionar tus actividades,
                            consultar información institucional y colaborar con tu equipo.
                        </p>

                        <!-- Datos de acceso -->
                        <div style="background-color: #f8fafc; border-left: 4px solid #1e40af;
                                    padding: 15px; margin: 25px 0;">

                            <p style="margin: 0; font-size: 15px;">
                                📌 <strong>Datos de acceso:</strong>
                            </p>

                            <p style="margin: 8px 0 0; font-size: 15px;">
                                Usuario: <strong>{{ $user->email }}</strong><br>
                            </p>

                        </div>

                        <!-- Botón -->
                        <div style="text-align: center; margin: 30px 0;">
                            <a href="{{ url('/') }}"
                               style="
                               background-color: #1e40af;
                               color: #ffffff;
                               text-decoration: none;
                               padding: 12px 25px;
                               border-radius: 5px;
                               font-weight: bold;
                               display: inline-block;
                               ">
                                Acceder al Sistema
                            </a>
                        </div>

                        <p style="font-size: 15px; line-height: 1.6;">
                            Por seguridad, te recomendamos cambiar tu contraseña
                            en tu primer inicio de sesión.
                        </p>

                        <p>
                            Si tienes alguna consulta, comunícate con el área de soporte.
                        </p>

                        <p style="margin-bottom: 0;">
                            Te deseamos mucho éxito en esta nueva etapa. 🤝
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color: #f1f5f9; padding: 20px;
                               text-align: center; font-size: 14px; color: #666666;">
                        © {{ date('Y') }} EduOne · Aviatraining and Technology
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
