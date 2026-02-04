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

                <!-- Header con gradiente -->
                <tr>
                    <td style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 50%, #1d4ed8 100%);
                               padding: 40px 40px 35px; text-align: center; position: relative;">
                        
                        <!-- Decoración superior -->
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; 
                                    background: linear-gradient(90deg, #60a5fa, #a78bfa, #ec4899, #f59e0b);"></div>
                        
                        <div style="font-size: 48px; margin-bottom: 8px;">🎓</div>
                        
                        <h1 style="color: #ffffff; margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -0.5px;">
                            EduOne
                        </h1>
                        
                        <p style="color: #bfdbfe; margin: 6px 0 0; font-size: 14px; letter-spacing: 1px; text-transform: uppercase;">
                            Tu plataforma de aprendizaje
                        </p>
                    </td>
                </tr>

                <!-- Contenido -->
                <tr>
                    <td style="padding: 40px; color: #475569;">

                        <!-- Saludo destacado -->
                        <div style="text-align: center; margin-bottom: 32px;">
                            <h2 style="color: #1e293b; margin: 0 0 8px; font-size: 26px; font-weight: 700;">
                                ¡Bienvenido, {{ $user->name }}! 👋
                            </h2>
                            <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #3b82f6, #8b5cf6); 
                                        margin: 0 auto; border-radius: 2px;"></div>
                        </div>

                        <p style="font-size: 16px; line-height: 1.7; margin: 0 0 16px; color: #334155; text-align: center;">
                            Nos emociona mucho tenerte con nosotros en <strong style="color: #2563eb;">EduOne</strong>.
                        </p>

                        <p style="font-size: 15px; line-height: 1.7; margin: 0 0 28px; color: #64748b; text-align: center;">
                            Tu camino de aprendizaje comienza ahora. Desde esta plataforma podrás 
                            acceder a todas tus materias, recursos educativos y mucho más.
                        </p>

                        <!-- Cards de beneficios -->
                        <div style="margin: 32px 0;">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 8px;" width="50%">
                                        <div style="background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
                                                    border-radius: 10px; padding: 20px; text-align: center; height: 100%;">
                                            <div style="font-size: 32px; margin-bottom: 8px;">📚</div>
                                            <p style="margin: 0; font-size: 14px; color: #1e40af; font-weight: 600;">
                                                Contenido
                                            </p>
                                            <p style="margin: 4px 0 0; font-size: 13px; color: #64748b; line-height: 1.4;">
                                                Acceso 24/7 a tus materias
                                            </p>
                                        </div>
                                    </td>
                                    <td style="padding: 8px;" width="50%">
                                        <div style="background: linear-gradient(135deg, #f5f3ff 0%, #ede9fe 100%);
                                                    border-radius: 10px; padding: 20px; text-align: center; height: 100%;">
                                            <div style="font-size: 32px; margin-bottom: 8px;">🎯</div>
                                            <p style="margin: 0; font-size: 14px; color: #7c3aed; font-weight: 600;">
                                                Seguimiento
                                            </p>
                                            <p style="margin: 4px 0 0; font-size: 13px; color: #64748b; line-height: 1.4;">
                                                Monitorea tu progreso
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px;" width="50%">
                                        <div style="background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
                                                    border-radius: 10px; padding: 20px; text-align: center; height: 100%;">
                                            <div style="font-size: 32px; margin-bottom: 8px;">💬</div>
                                            <p style="margin: 0; font-size: 14px; color: #92400e; font-weight: 600;">
                                                Comunidad
                                            </p>
                                            <p style="margin: 4px 0 0; font-size: 13px; color: #64748b; line-height: 1.4;">
                                                Conecta con compañeros
                                            </p>
                                        </div>
                                    </td>
                                    <td style="padding: 8px;" width="50%">
                                        <div style="background: linear-gradient(135deg, #fce7f3 0%, #fbcfe8 100%);
                                                    border-radius: 10px; padding: 20px; text-align: center; height: 100%;">
                                            <div style="font-size: 32px; margin-bottom: 8px;">🏆</div>
                                            <p style="margin: 0; font-size: 14px; color: #9f1239; font-weight: 600;">
                                                Logros
                                            </p>
                                            <p style="margin: 4px 0 0; font-size: 13px; color: #64748b; line-height: 1.4;">
                                                Alcanza tus metas
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <!-- Mensaje motivacional -->
                        <div style="background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
                                    border-left: 4px solid #10b981;
                                    border-radius: 8px;
                                    padding: 20px 24px;
                                    margin: 32px 0;">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding-right: 12px; vertical-align: top; width: 28px;">
                                        <span style="font-size: 20px;">✨</span>
                                    </td>
                                    <td>
                                        <p style="margin: 0; font-size: 14px; color: #065f46; line-height: 1.6;">
                                            <strong>Nuestro compromiso contigo:</strong> 
                                            Estamos aquí para acompañarte en cada paso de tu aprendizaje 
                                            y ayudarte a alcanzar tus metas académicas.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <!-- Botón principal -->
                        <div style="text-align: center; margin: 36px 0 32px;">
                            <a href="{{ url('/') }}"
                               style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
                                      color: #ffffff;
                                      text-decoration: none;
                                      padding: 16px 40px;
                                      border-radius: 10px;
                                      font-size: 16px;
                                      font-weight: 700;
                                      display: inline-block;
                                      box-shadow: 0 4px 14px rgba(37, 99, 235, 0.4);
                                      transition: all 0.3s ease;
                                      letter-spacing: 0.3px;">
                                🚀 Comenzar mi aprendizaje
                            </a>
                        </div>

                        <p style="font-size: 14px; line-height: 1.6; color: #64748b; margin: 0 0 20px; text-align: center;">
                            ¿Tienes preguntas? Nuestro equipo de soporte está listo para ayudarte. 
                            No dudes en contactarnos en cualquier momento.
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