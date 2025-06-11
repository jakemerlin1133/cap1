<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kabaleyan Cove Resort')</title>
    <link rel="icon" type="image/png" href="{{ asset('KCR.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/5ccb4e6d08.js" crossorigin="anonymous"></script>
    <link href="/src/styles.css" rel="stylesheet">
</head>
<body class="flex bg-[#FFFDF6]">

    {{-- Sidebar --}}
   @include('partials.sidebar')

<div class="flex flex-col flex-1 min-h-screen">

        {{-- Header --}}
    <header class="bg-[#A0C878] text-white p-3 shadow flex items-center gap-2">
        <i class="fa-solid fa-bars text-xl mr-2 text-[#FAF6E9]"></i>
        <img src="{{ asset('KCR.png') }}" alt="Logo" class="w-6 h-6 object-contain">
        <h1 class="text-md font-semibold italic text-[#FAF6E9]">Kabaleyan Cove Resort</h1>
    </header>

        {{-- Main Content --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
