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
                       style="background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.05);">

                    <!-- Header -->
                    <tr>
                        <td style="background-color: #2563eb; padding: 25px; text-align: center;">
                            <h1 style="color: #ffffff; margin: 0;">
                                🎓 EduOne
                            </h1>
                        </td>
                    </tr>

                    <!-- Contenido -->
                    <tr>
                        <td style="padding: 35px; color: #333333;">

                            <h2 style="margin-top: 0;">
                                ¡Bienvenido, {{ $user->name }}! 👋
                            </h2>

                            <p style="font-size: 16px; line-height: 1.6;">
                                Nos alegra mucho tenerte con nosotros en <strong>EduOne</strong>.
                                Desde ahora podrás acceder a tus materias y recursos educativos.
                            </p>

                            <p style="font-size: 16px; line-height: 1.6;">
                                Nuestro objetivo es acompañarte en tu aprendizaje y ayudarte
                                a alcanzar tus metas académicas.
                            </p>

                            <!-- Botón -->
                            <div style="text-align: center; margin: 30px 0;">
                                <a href="{{ url('/') }}"
                                   style="
                                   background-color: #2563eb;
                                   color: #ffffff;
                                   text-decoration: none;
                                   padding: 12px 25px;
                                   border-radius: 5px;
                                   font-weight: bold;
                                   display: inline-block;
                                   ">
                                    Ingresar al sistema
                                </a>
                            </div>

                            <p style="font-size: 15px; line-height: 1.6;">
                                Si tienes alguna duda, no dudes en contactarnos.
                                Estamos para ayudarte.
                            </p>

                            <p style="margin-bottom: 0;">
                                ¡Éxitos en esta nueva etapa! 🚀
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f1f5f9; padding: 20px; text-align: center; font-size: 14px; color: #666666;">
                            © {{ date('Y') }} EduOne · Aviatraining and Technology
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
