<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Manager</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    <div id="app">
        <header>
            <header-page></header-page>
        </header>
        <main class="bg-gray-800 text-slate-100">
            <section class="container mx-auto">
                <h1>The Manager</h1>

                <div>
                    @yield('content')
                </div>
            </section>
        </main>
    </div>
</body>

</html>
