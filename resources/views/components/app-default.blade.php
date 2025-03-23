<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} | NewsPortal</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    @stack('styles')
</head>

<body class="bg-gray-100">

    {{ $slot }}


    @stack('scripts')
</body>

</html>