<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Inventaris Lab' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100 text-gray-800">
    {{ $slot }}
</body>
</html>
