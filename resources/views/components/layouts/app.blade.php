<!doctype html>
<html class="light" >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
  </head>
  <body class="bg-surface text-on-surface">
    <x-nav />
    <main class="ml-64 p-10 min-h-screen bg-surface">
      {{ $slot }}
    </main>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
  </body>
</html>