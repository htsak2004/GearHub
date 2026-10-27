<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'GearHub - Platform Penyewaan Peralatan Kampus Perbanas Institute')</title>
    <meta name="description" content="@yield('meta_description', 'Sewa berbagai peralatan kampus dengan mudah, cepat, dan terpercaya untuk mendukung kegiatan akademik, organisasi, penelitian, maupun acara di Perbanas Institute.')">

    <!-- Preconnect Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@600;700&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-white text-slate-800 font-sans antialiased selection:bg-blue-600 selection:text-white flex flex-col min-h-screen">

    <!-- Header / Navbar -->
    @include('partials.navbar')

    <!-- Main Content Area -->
    <main id="main-content" class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Quick Search Modal -->
    @include('partials.modal-search')

    <!-- Scripts -->
    @stack('scripts')
</body>
</html>
