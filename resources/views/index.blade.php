<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>re-Ozone</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <style>
    body {
      font-family: "Inconsolata", sans-serif;
    }
  </style>
</head>

<body>
  <x-layouts.dashboard>
    <div class="h-screen w-full bg-cyan-100"></div>
    <div class="h-screen w-full bg-cyan-100"></div>
  </x-layouts.dashboard>
</body>

</html>
