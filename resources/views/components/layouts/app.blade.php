<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    @livewireStyles
</head>

<body class="bg-slate-200 dark:bg-slate-700">
    <main>
        {{ $slot }}
    </main>
    @livewireScripts
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
