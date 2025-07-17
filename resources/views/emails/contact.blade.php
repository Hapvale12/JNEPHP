<!DOCTYPE html>
<html>
<head>
    <title>Inscripción al programa de voluntariado</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { width: 80%; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .header { background: #f4f4f4; padding: 10px; border-bottom: 1px solid #ddd; text-align: center; }
        .content { padding: 20px 0; }
        .footer { border-top: 1px solid #ddd; padding-top: 10px; font-size: 0.8em; color: #777; text-align: center; }
        ul { list-style: none; padding: 0; }
        li { margin-bottom: 10px; }
        strong { color: #555; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nueva Inscripción al Programa de Voluntariado</h2>
        </div>
        <div class="content">
            <p>Se ha realizado una nueva inscripción al programa de voluntariado desde el Portal DNE con los siguientes datos:</p>
            <ul>
                <li><strong>Nombres:</strong> {{ $data['nombre'] }}</li>
                <li><strong>Apellidos:</strong> {{ $data['apellidos'] }}</li>
                <li><strong>DNI:</strong> {{ $data['dni'] }}</li>
                <li><strong>Celular:</strong> {{ $data['telefono'] }}</li>
                <li><strong>Correo electrónico:</strong> {{ $data['email'] }}</li>
                <li><strong>Mensaje:</strong><br>{{ $data['message'] }}</li>
            </ul>
            <p>Saludos,<br>Portal DNE</p>
        </div>
        <div class="footer">
            <p>Este es un correo automático. Por favor, no respondas a esta dirección.</p>
        </div>
    </div>
</body>
</html>