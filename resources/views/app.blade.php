<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    {{-- Inertia --}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll,NodeList.prototype.forEach,Promise,Object.values,Object.assign" defer></script>

    {{-- Ping CRM --}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=String.prototype.startsWith" defer></script>

    @viteserver
      <script type="module" src="http://localhost:3000/@vite/client" ></script>
      <script type="module" src="http://localhost:3000/resources/js/app.js" ></script>
      <script type="module" src="http://localhost:3000/resources/css/app.css" ></script>
    @else
      <link href="{{ vite('app.css') }}" rel="stylesheet">
      <script type="module" src="{{ vite('app.js') }}" defer></script>
    @endviteserver
    @routes
</head>
<body class="font-sans antialiased leading-none text-gray-700">

@inertia

</body>
</html>
