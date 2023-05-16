<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/storage/assets/icon_web.webp" sizes="32x32 100x100"  />
    <title>Indonesian Youth Olympics</title>
    @vite(['resources/js/app.js'])
    @vite(['resources/sass/app.scss'])
    @yield('scripts')

</head>
    <body>
        <x-alert></x-alert>
        <main>
            {{ $slot }}
        </main>
    </body>
    <script src="https://kit.fontawesome.com/08b3198fd8.js" crossorigin="anonymous"></script>

</html>

