<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Blog DNE')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <script src="//unpkg.com/alpinejs" defer></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SPF21784V2');
</script>

</head>

<body class="bg-white text-gray-900  flex flex-col">

    @include('components.header')

    <div class="absolute top-[186px] z-40 w-full hidden md:block">
    <x-breadcrumb />
</div>

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')

</body>

</html>
