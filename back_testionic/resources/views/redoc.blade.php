<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Documentation</title>
    <script src="https://cdn.redoc.ly/redoc/latest/bundles/redoc.standalone.js"></script>
</head>
<body>
    <redoc spec-url="/path/to/openapi.yaml"></redoc>
    <!-- Reemplaza /path/to/openapi.yaml con la URL del archivo OpenAPI -->
    <script>
        Redoc.init('/path/to/openapi.yaml', {}, document.getElementById('redoc'));
    </script>
</body>
</html>
