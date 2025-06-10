<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventory')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="/src/styles.css" rel="stylesheet">
</head>
<body class="flex">

    {{-- Sidebar --}}
   @include('partials.sidebar')

<div class="flex flex-col flex-1 min-h-screen">
        {{-- Header --}}
        <header class="bg-[#A0C878] text-white p-2 shadow">
            <h1 class="text-xl font-semibold">Inventory System</h1>
        </header>

        {{-- Main Content --}}
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
