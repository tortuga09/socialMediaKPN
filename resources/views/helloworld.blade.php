<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <h1>Hello {{ $name }}
        Phone: {{ $phone ?? '0123456789' }}
        Email: {{ $email ?? 'example@example.com' }}
    </h1>
</body>
</html>
